<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Student;

class HomeController extends Controller
{

    public function home(){
        return view('frontend.pages.home');
    }
    public function about(){
        return view('frontend.pages.about');        
    }

    public function services(){
        return view('frontend.pages.services');        
    }
    public function newpost(){
        return view('backend.pages.addPost');        
    }
    public function userLogin(){
        //dd('hi');
        return view('frontend.pages.login');        
    }
     public function login(Request $req){
       $email = $req->email;
        $password = $req->pass;
        $user = Student::where('email','=',$email)->where('password','=',$password)->first();
         if($user)
        {
            Session::put('userid',$user->id);
            Session::put('useremail',$user->email);
            //Session::put('usertype',$user->user_type);  

            return redirect('/test');
        }
        else
        {
            return redirect()->back()->with('msg',"The email or password you entered is incorrect");
        }  
    }

    public function view_post(){
        //dd('hi');
       $all_post = DB::table('posts')->get();
       $manage_post = view('backend.pages.viewPost')->with('post_info',$all_post);
       return view('backend.layouts.layout')->with('backend.pages.viewPost',$manage_post);

    }

    public function testpage(){
    	//dd('hi');
        return view('backend.pages.dashboard');   

    }
    public function add_post(Request $reg){
        $title = $reg->title;
        $message = $reg->message;
       
        //$obj = new Student();
        //$obj->title = $tile;
        //$obj->user_post = $message;
        $result = DB::insert("insert into posts (title,user_post) values(?,?)",[$title,$message]);
        if($result){
           return redirect()->back()->with('msg',"successfully saved");
        }

    }
     public function userLogout(Request $req){
       $req->session()->flush();
      return redirect('loginn');
    }
}

?>
