<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\User;
use App\Models\content;
use App\Models\count;
use App\Models\share;
use Session;
use Response;
use DB;
use Auth;

class UserController extends Controller
{
   public function preschool() {
      
        $data = subject::where('category', 'pre school')->get();
         return view('worksheets.index')->with(compact('data')); 
         
      
   }

   public function kindergarten() {
    $data = subject::where('category', 'kinder garten')->get();
    return view('worksheets.index')->with(compact('data'));
}


   public function firstgrade() {
    $data = subject::where('category', '1st grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function secondgrade() {
    $data = subject::where('category', '2nd grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function thirdgrade() {
    $data = subject::where('category', '3rd grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function fourthgrade() {
    $data = subject::where('category', '4th grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function fifthgrade() {
    $data = subject::where('category', '5th grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function sixthgrade() {
    $data = subject::where('category', '6th grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function seventhgrade() {
    $data = subject::where('category', '7th grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }
  public function eightthgrade() {
    $data = subject::where('category', '8th grade')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function highschool() {
    $data = subject::where('category', 'high school')->get();
    return view('worksheets.index')->with(compact('data'));
  }
 
   public function miscellaneous() {
    $data = subject::where('category', 'miscellaneous')->get();
    return view('worksheets.index')->with(compact('data'));
  }

   public function cogat() {
    $data = subject::where('category', 'cogat')->get();
    return view('worksheets.index')->with(compact('data'));
  }

   public function competitivemath() {
    $data = subject::where('category', 'competitive math')->get();
    return view('worksheets.index')->with(compact('data'));
  }
   public function activities() {
    $data = subject::where('category', 'activities')->get();
    return view('worksheets.index')->with(compact('data'));
  }

   public function stem() {
    $data = subject::where('category', 'STEM')->get();
    return view('worksheets.index')->with(compact('data'));
  }

  public function ShowGrid($slug) {
    //   dd(session()->all());
     if(Session::has('user_id')){
         $counting = subject::select('slug')->where('slug', $slug)->count();
        if($counting>=1){
            $category = subject::select('category')->where('slug', $slug)->get()->toArray();
             $ss =[];
            foreach($category as $arr){
              $ss[] = $arr;
            } 
            $data = subject::where('slug', $slug)->first();
    $content = content::first(); 
     $count = count::where('user_id', Session::get('user_id'))->count();
     $share = share::where('user_id', Session::get('user_id'))->count();
    //  $fare = share::where('user_id', Session::get('user_id'))->count();
     return view('grid')->with(compact('data', 'content','count','share','arr'));
    }else{
    $data = subject::where('slug', $slug)->first();
    $content = content::first(); 
     $count = count::where('user_id', Session::get('user_id'))->count();
     $share = share::where('user_id', Session::get('user_id'))->count();
    //  $fare = share::where('user_id', Session::get('user_id'))->count();
     return view('grid')->with(compact('data', 'content','count','share'));
    }
    }
     $counting = subject::select('slug')->where('slug', $slug)->count();
    if($counting>=1){
        $category = subject::select('category')->where('slug', $slug)->get()->toArray();
        $ss =[];
        foreach($category as $arr){
              $ss[] = $arr;
             
        }
         
        $data = subject::where('slug', $slug)->first();
    $content = content::first(); 
       return view('grid')->with(compact('data', 'content','arr'));
    }else{
        $data = subject::where('slug', $slug)->first();
    $content = content::first(); 
    return view('grid')->with(compact('data', 'content'));
    }
    
  }

  public function searchQuestion(Request $request) {
    $q = $request->q;
    $data = subject::where('name','LIKE','%'.$q.'%')->get();
    if(count($data) > 0) {
        return view('welcome')->withDetails($data)->withQuery( $q );
    }
    else {
    	return view ('welcome')->withMessage('No Details found. Try to search again !');
    }
}
  public function formSubmit(Request $request) {
    //   return $data = $request->all();
        if(Session::has('user_id')){
         $counting = count::where('user_id', Session::get('user_id'))->count();
         if($counting>=5){
         return redirect()->back();
        }
        if($counting>=19){
         return redirect()->back();
        }
    }
    $count = User::where('email', $request->email)->count();
    if($count>=1) {
         $counted = count::where('email', $request->email)->count();
         if($counted>=5){
             $user = User::where('email', $request->email)->first();
              Session::put('user_id', $user->id);
             Session::put('email', $request->email);
              Session::put('name', $request->name);
             return redirect()->back();
         }
                $user = User::where('email', $request->email)->first();
                
              $file_count = new count;
               $file_count->user_id = $user->id;
              $file_count->email = $request->email;
              $file_count->file = $request->file;
              $file_count->save();
              Session::put('user_id', $user->id);
             Session::put('email', $request->email);
              Session::put('name', $request->name);
            //   return redirect()->back();
             $file = $request->file;
             
            $myFile = public_path('uploads/file/'.$file);
             return response::download($myFile);
             
             return redirect()->back();      
        
    }else {
        
        $data = new User;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->save();
    $last = DB::table('users')->latest()->first();
     Session::put('user_id', $last->id);
    Session::put('email', $request->email);
    Session::put('name', $request->name);
    $file_count = new count;
    $file_count->user_id = $last->id;
    $file_count->email = $request->email;
    $file_count->file = $request->file;
    $file_count->save();
    //  return redirect()->back();
     $file = $request->file;
    $myFile = public_path('uploads/file/'.$file);
    return response::download($myFile);
      return redirect()->back();   
   

    }

    
   }
   
   public function referralFormSubmit(Request $request) {
       
          $count = share::where('email', $request->email)->count();
       $count1 = share::where('email', $request->email1)->count();
       $count2 = share::where('email', $request->email2)->count();
       $count3 = share::where('email', $request->email3)->count();
       $count4 = share::where('email', $request->email4)->count();
       if($count>=1 || $count1>=1 || $count2>=1 || $count3>=1 || $count4>=1){
           return redirect()->back();
       }else {
       if($request->name) {
           $data = new share;
           $data->name = $request->name;
           $data->email = $request->email;
           $data->user_id = Session::get('user_id');
           $data->file = $request->file;
           $data->save();
            
       }
       
       if($request->name1) {
           $data = new share;
           $data->name = $request->name1;
           $data->email = $request->email1;
           $data->user_id = Session::get('user_id');
           $data->file = $request->file;
           $data->save();
           
       }
       if($request->name2) {
           $data = new share;
           $data->name = $request->name2;
           $data->email = $request->email2;
           $data->user_id = Session::get('user_id');
           $data->file = $request->file;
           $data->save();
           
       }
       if($request->name3) {
           $data = new share;
           $data->name = $request->name3;
           $data->email = $request->email3;
           $data->user_id = Session::get('user_id');
           $data->file = $request->file;
           $data->save();
            
       }
       if($request->name4) {
           $data = new share;
           $data->name = $request->name4;
           $data->email = $request->email4;
           $data->user_id = Session::get('user_id');
           $data->file = $request->file;
           $data->save();
           
       }
        $file = $request->file;
            $myFile = public_path('uploads/file/'.$file);
             return response()->download($myFile);
             return redirect()->back();
   }  
        
    }
       
     
     
     public function secondFormSubmit(Request $request) {
        
        $file_count = new count;
        $file_count->user_id = $request->user_id;
        $file_count->email = $request->email;
        $file_count->file = $request->file;
        $file_count->save();
        //  return redirect()->back();
         $file = $request->file;
        $myFile = public_path('uploads/file/'.$file);
         return response()->download($myFile);
        return redirect()->back();
     }

}
