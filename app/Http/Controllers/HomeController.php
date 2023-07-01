<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment;

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
            } else {
                return view('employee.home');
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
            // $userid=Auth::user()->id;
            $data=user::find(Auth::id());
            return view('user.customer.accountstatement',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function fundtransfer(){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
            // $userid=Auth::user()->id;
            $data=user::find(Auth::id());
            return view('user.customer.fundtransfer',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
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
}
