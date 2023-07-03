<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Employee;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Transactionmethod;
use App\Models\Feedback;

use App\Models\Appointment;
use Notification;

class EmployeeController extends Controller
{
    public function employeeprofile()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $employeedata = User::find(Auth::id());
                return view('employee.employeeprofile', compact('employeedata'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function updateemployeeprofile()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $employeedata = User::find(Auth::id());
                return view('employee.updateemployeeprofile', compact('employeedata'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function editemployeeprofile(Request $request, $id)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data = User::find($id);
                $data->name = $request->name;
                $data->email = $request->email;
                $data->phone = $request->phone;
                $data->status = $request->status;
                $image = $request->file;
                if ($image) {
                    $imagename = time() . '.' . $image->getClientOriginalExtension();
                    $request->file->move('employeeimages', $imagename);
                    $data->image = $imagename;
                }

                $data->save();
                return redirect()->back()->with('message', 'Your Details Updated Successfully');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function customerservice(Request $request)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $employeedata= User::find(Auth::id());
                $search = $request['search'] ?? "";
                if ($search != "") {
                    //where
                    // $customers=user::where('user_name','=',$search)->get();
                    $customers = User::where('uid', '=', $search)->orWhere('name', 'LIKE', "%$search%")->get();
                } else {
                    $customers = User::all();
                }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

        return view('employee.customerservice',compact('customers', 'search','employeedata'));
    }

    public function deposit($id){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data=user::find($id);
                $employeedata= User::find(Auth::id());
                return view('employee.deposit',compact('data','employeedata'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function finaldeposit(Request $request)
    {
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data = User::find($request->input('id'));
                $amount = $request->input('amount');
                if($amount<0){
                    Alert::error('Negative Balance', 'Please enter valid amount');
                }
                else if($amount==0){
                    Alert::error('Opps!', 'Please enter an amount');
                }
                else{
                    $data->balance+=$amount;
                    $data->save();

                    $transaction=new transaction();
                    $transaction->from=Auth::user()->uid;
                    $transaction->to= $data->uid;
                    $transaction->date= Carbon::now()->format('Y-m-d');
                    $transaction->time=Carbon::now()->format('H:i:s');
                    $transaction->message="Deposited Tk $amount. Balance Tk $data->balance. at $transaction->date, $transaction->time";
                    $transaction->save();

                    $transactionmethod=transactionmethod::find(1);
                    $transactionmethod->deposit+=$amount;
                    $transactionmethod->total+=$amount;
                    $transactionmethod->save();

                    Alert::success('Deposit Successful', 'Money has been added successfully.');
                }
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
        return redirect()->back();
    }

    public function withdraw($id){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data=user::find($id);
                $employeedata= User::find(Auth::id());
                return view('employee.withdraw',compact('data','employeedata'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function finalwithdraw(Request $request)
    {
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data = User::find($request->input('id'));
                $amount = $request->input('amount');
                if($amount<0){
                    Alert::error('Negative Balance', 'Please enter valid amount');
                }
                else if($amount==0){
                    Alert::error('Opps!', 'Please enter an amount');
                }
                else if($amount>$data->balance){
                    Alert::error('Insufficient Balance', 'The transfer amount exceeds users account balance.');
                }
                else{
                    $data->balance-=$amount;
                    $data->save();

                    $transaction=new transaction();
                    $transaction->from= $data->uid;
                    $transaction->to= Auth::user()->uid;
                    $transaction->date= Carbon::now()->format('Y-m-d');
                    $transaction->time=Carbon::now()->format('H:i:s');
                    $transaction->message="Withdrew Tk $amount. Balance Tk $data->balance. at $transaction->date, $transaction->time";
                    $transaction->save();

                    $transactionmethod=transactionmethod::find(1);
                    $transactionmethod->withdraw+=$amount;
                    $transactionmethod->total+=$amount;
                    $transactionmethod->save();

                    Alert::success('Withdraw Successful', 'Money has been credited successfully.');
                }
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
        return redirect()->back();
    }

    public function customerprofile($id)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data = User::find($id);
                $employeedata= User::find(Auth::id());
                return view('employee.customerprofile', compact('data','employeedata'));
            } 
            else {
                return redirect()->back();
            }
        } 
        else {
            return redirect('login');
        }
    }

    public function updatecustomer($id){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data=user::find($id);
                $employeedata= User::find(Auth::id());
                return view('employee.updatecustomer',compact('data','employeedata'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function editcustomerprofile(Request $request, $id)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data = User::find($id);
                $data->name = $request->name;
                $data->email = $request->email;
                $data->phone = $request->phone;
                $data->status = $request->status;

                $data->save();
                return redirect()->back()->with('message', 'Customer Details Updated Successfully');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function deletecustomer($id){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                Alert::success('Customer Deleted Succesfully','Customer Deleted Succesfully');
                $data=user::find($id);
                $data->delete();
                return redirect()->back();
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function showfeedback(Request $request)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $employeedata= User::find(Auth::id());
                $feedback = feedback::all();
                
                return view('employee.showfeedback',compact('feedback','employeedata'));
            } 
            else {
                return redirect()->back();
            }
        } 
        else {
            return redirect('login');
        }
    }
    public function deletefeedback($id){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                Alert::success('Feedback Deleted Succesfully','Feedback Deleted Succesfully');
                $data=feedback::find($id);
                $data->delete();
                return redirect()->back();
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
}