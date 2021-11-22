<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use Auth;
use Session;

class LoginController extends Controller
{
     public function registerUpload(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $check = admin::where('email', $email)->first();
        if ($check) {
            $message = "You are already register";
            session::flash('error', $message);
            return redirect('/login');
        }else {
            $data = new admin;
            $data->name = $request->name;
            $data->email = $email;
            $data->password = bcrypt($password);
            $data->status = 0;
            $data->save();
            $message = "You are successfully register";
            session::flash('error', $message);
            return redirect('/login');
        }
    }
     public function loginCheck(Request $request) {
        //  return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
            //   return "hi";
                $UserStatus =admin::where('email',$data['email'])->first();
                if ($UserStatus->status==0 && $UserStatus->user_type==null) {
                    Auth::logout();
                   

                    return redirect()->back();
                }
  
                return redirect('/admin-index');  
            }else {
                $message= "Invalid User or Password";
                Session::flash('success',$message);
                return redirect()->back();
            }
        }
        
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }

    public function AdminIndex() {
        $data = admin::all();
        return view('admin.index')->with(compact('data'));
    }

    public function changeStatus(Request $request)
    {
        $user = admin::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    
    
     public function adminDelete($id) {
        $data = admin::find($id);
        $data->delete();
        return redirect()->back();
    }


}
