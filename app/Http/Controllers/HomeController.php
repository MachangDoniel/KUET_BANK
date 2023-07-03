<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Transaction;

// use DB;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $user = User::all();
                return view('user.home',compact('user'));
            } 
            else if(Auth::user()->usertype == '1') {
                $employeedata= User::find(Auth::id());
                return view('employee.home',compact('employeedata'));
            }
            else if(Auth::user()->usertype == '2') {
                $admindata= User::find(Auth::id());
                return view('admin.home',compact('admindata'));
            }
            else{
                return redirect('home');
            }
            
        } 
        else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        }
        else{
            $user = User::all(); // Retrieve all user from the database
            return view('user.home',compact('user'));

            // $users=user::select('select * from users');
            // return view('user.home',['users'=>$users]);
        }
        
    }

    public function account(){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
                // $userid=Auth::user()->id;
                $data=user::find(Auth::id());
                return view('user.customer.account',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function accountstatement(){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
                 $userid=Auth::user()->id;
                 $data=user::find(Auth::id());
                // return view('user.customer.accountstatement',compact('data'));
                $info=Transaction::orderBy('id','desc')->get();
                // $data=$data->reverse();
                return view('user.customer.accountstatement',compact('data','info'));

            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function fundtransfer(Request $request)
    {
        $search = $request->input('search');
        $data = auth()->user();

        $customers = [];

        if ($search) {
            $customers = User::where('id', $search - 100000)->get();
        }

        return view('user.customer.fundtransfer', compact('search', 'data', 'customers'));
    }

    public function transfer(Request $request)
    {
        $request->validate([
            'transfermoney' => 'required|numeric',
            'sender_id' => 'required|numeric',
            'receiver_id' => 'required|numeric',
        ]);

        $transferAmount = $request->input('transfermoney');
        $senderId = $request->input('sender_id');
        $receiverId = $request->input('receiver_id');

        $sender = User::find($senderId);
        $receiver = User::find($receiverId);

        if ($sender && $receiver) {
            if($transferAmount<0){
                Alert::error('Negative Balance', 'Please enter valid amount');
            }
            else if($transferAmount==0){
                Alert::error('Opps!', 'Please enter an amount');
            }
            else if ($transferAmount > $sender->balance) {
                Alert::error('Insufficient Balance', 'The transfer amount exceeds your account balance.');
            } 
            else {
                $sender->balance -= $transferAmount;
                $receiver->balance += $transferAmount;

                $sender->save();
                $receiver->save();

                $transaction=new transaction();
                $transaction->from= $sender->uid;
                $transaction->to= $receiver->uid;
                $transaction->date= Carbon::now()->format('Y-m-d');
                $transaction->time=Carbon::now()->format('H:i:s');
                $transaction->message="Transferred Tk $transferAmount from account $sender->uid to account $receiver->uid at $transaction->date, $transaction->time";
                $transaction->save();

                Alert::success('Transfer Successful', 'Money has been transferred successfully.');
            }
        } else {
            Alert::error('Invalid Accounts', 'Receiver accounts are invalid.');
        }

        return redirect()->route('fundtransfer');
    }

    public function balance($id){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
                $user=user::find($id);
                Alert::success('Your current balance is'+$user->balance,'Good Luck');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function customerservice(Request $request){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $search=$request['search'] ?? "";
                if($search!=""){
                    //where
                    // $customers=user::where('user_name','=',$search)->get();
                    $customers=user::where('uid','=',$search)->orWhere('name','LIKE',"%$search%")->get();
                }
                else{
                    $customers=user::all();
                }
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
        
        $data=compact('customers','search');
        return view('employee.customerservice')->with($data);
    }
    
}
