<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\content;
use App\Models\User;
use Session;
use DB;

class SubjectController extends Controller
{
    public function SubjectFormSubmit(Request $request) {
        request()->validate([
         'image'  => 'required|mimes:png,jpg,jpeg,webp',
       ]);
        $data = new subject;

        $data->category = $request->category ;
        $data->name = $request->name ;
        $data->description = $request->description ;
        $data->meta_title = $request->meta_title ;
        $data->meta_description = $request->meta_description ;
        $data->meta_keyword = $request->meta_keyword ;
        $data->slug = $request->slug;
       
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();
            $filename = time() ."-". $fileFirstName;
            $file->move('public/uploads/image/', $filename );
            $data->image = $filename;
        }

        if($request->hasfile('file')) {
            $file = $request->file('file');
            $fileFirstName = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();
            $filename = time() ."-". $fileFirstName;
            $file->move('public/uploads/file/', $filename );
            $data->file = $filename;
        }
       
        $data->save();
        $message = "Subject is added!!";
        session::flash('success', $message);
        return redirect()->back();
        
    }

    public function ShowSubjectList() {
        $data = subject::all();
        return view('admin.add-subject')->with(compact('data'));
    }

    public function editSubjectList($id) {
        $data = subject::find($id);
        return view('admin.edit-subject')->with(compact('data'));
    }
    
     public function cloneSubjectList($id) {
        $data = subject::find($id);
        return view('admin.clone')->with(compact('data'));
    }

    public function editSubmit(Request $request) {
        $data = subject::find($request->id);
        $data->category = $request->category ;
        $data->name = $request->name ;
        $data->description = $request->description ;
        $data->meta_title = $request->meta_title ;
        $data->meta_description = $request->meta_description ;
        $data->meta_keyword = $request->meta_keyword ;
        $data->slug = $request->slug;
        $data->save();

        $message = "Subject Was edited!!";
        session::flash('success', $message);
        return redirect('/add-subject');
    }
    
    public function cloneSubmit(Request $request) {
        $data = new subject;

        $data->category = $request->category ;
        $data->name = $request->name ;
        $data->description = $request->description ;
        $data->meta_title = $request->meta_title ;
        $data->meta_description = $request->meta_description ;
        $data->meta_keyword = $request->meta_keyword ;
        $data->slug = $request->slug;
       
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();
            $filename = time() ."-". $fileFirstName;
            $file->move('public/uploads/image/', $filename );
            $data->image = $filename;
        }

        if($request->hasfile('file')) {
            $file = $request->file('file');
            $fileFirstName = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();
            $filename = time() ."-". $fileFirstName;
            $file->move('public/uploads/file/', $filename );
            $data->file = $filename;
        }
       
        $data->save();
        $message = "Subject is added!!";
        session::flash('success', $message);
        return redirect('/add-subject');
        
    }

    public function deleteSubjectList($id) {
        $data = subject::find($id);
        $data->delete();
        $message = "Subject Was deleted!!";
        session::flash('error', $message);
        return redirect()->back();
    }
    public function userDetails() {
        $data = User::all();
        return view('admin.user-details')->with(compact('data'));
    }
    
     public function addContentPopUp(Request $request) {
        $data = content::where('id', 1)->update(['content1'=>$request->content1, 'content2'=>$request->content2]);
        return redirect()->back();
    }

    public function addContent() {
        $item = content::first();
        return view('admin.add-content')->with(compact('item'));
    }
    
     public function referralList() {
       $data = DB::table('shares')
       ->join('users','users.id','=','shares.user_id')
        ->select('users.id','users.email','shares.email as share_email','shares.created_at')
        ->get();
        return view('admin.referral-list')->with(compact('data'));
    }
}

