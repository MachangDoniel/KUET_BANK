<?php

namespace App\Http\Controllers;

use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Employee;
use App\Models\User;

use App\Models\Appointment;
use Notification;

class EmployeeController extends Controller
{
    public function employeeprofile(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data=User::find(Auth::id());
                return view('employee.employeeprofile',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function updateemployeeprofile(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data=User::find(Auth::id());
                return view('employee.updateemployeeprofile',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function editemployeeprofile(Request $request, $id){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $user=user::find($id);
                $user->name=$request->name;
                $user->email=$request->email;
                $user->phone=$request->phone;
                $user->status=$request->status;
                $image=$request->file;
                if($image){
                    $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->file->move('employeeimages',$imagename);
                    $user->image=$imagename;
                }

                $user->save();
                return redirect()->back()->with('message','Your Details Updated Successfully');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function customerservice(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data=User::find(Auth::id());
                return view('employee.customerservice',compact('data'));
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
