<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\business;
use App\Models\addpage;
use App\Models\category;
use Session;

class bcontroller extends Controller
{
    //for registeration
    public function register(Request $request)
    {
    $check= new business;
    if($request->isMethod('post'))
    {
        $check->name=$request->get('name');
        $check->password=$request->get('password');
        $check->save();
    }
    return view("login");
    }

    //for login in admin pannel 
    public function login(Request $request)
    {
       $name=$request->get('name');
       $password=$request->get('password');
       if($name=='roshni' && $password='roshni')
       {
        Session::put("user_session","done");
        return redirect("/summarypage");
       }
      
        return redirect('login');
    }
    //for the summary(main) page
    public function summarypage()
    {
        return view('summarypage');   
    }
    //for add page form and table
    public function addpage(Request $request)
    {
    $check= new addpage;
    if($request->isMethod('post'))
    {
        $check->name=$request->get('name');
        $check->title=$request->get('title');
        $check->content=$request->get('content');
        $status=$check->status=$request->get('status');
        
        if($status=='on')
        {
         $status=1;
        }
        else{
         $status=0;
        }
        $check->status=$status;
        $check->save();
    }
    return view('pageadd');   
    }
    //------------------------------------------------------------------------------------------
    //
    public function page1()
    {
        return view('page1');   
    }
    //for logout
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }

    //for displaying content in summarypage
    public function d_summarypage()
    {
      $data=addpage::simplepaginate(10);
      return view('summarypage',compact('data'));
    }

     //to delete data in summarypage
     public function deletedata($id)
     {  
          $obj= addpage::find($id);
          $obj->delete();
          return redirect("summarypage");
     }
    //for search 
     public function search(Request $request)
     {
      if($request->isMethod('post'))
      {
         $name=$request->get('search-text');
         $data=business::where('name','Like','%'.$name.'%')->simplepaginate(10);
      }
         return view('summarypage',compact('data'));
      }
     
    //for edit 
    
   public function editdisplay($id)
   {
       $findrec=addpage::where('id',$id)->get();
       return view('addpage',compact('findrec','data'));
   }
    
 
    //to save changes
    public function editdata(Request $request, $id='')
    {  
       $add=student::find($id);
       if($request->isMethod('post'))
     {
         $add->fname=$request->get('fname');
         $add->lname=$request->get('lname');
         $add->marks1=$request->get('m1');
         $add->marks2=$request->get('m2');
         $add->save();
     }
     return redirect("summarypage");
    }
//--------------------------------------------------------------------------
  //for add page form and table
  public function addcategory(Request $request)
  {
        $check= new category;
        if($request->isMethod('post'))
        {
        $check->name=$request->get('name');
        $check->save();
        }
  return view('addcategory');   
  }
  //for displaying content in summarypage
   public function d_summarycat()
{
  $data=category::simplepaginate(10);
  return view('summarycat',compact('data'));
}
      //to delete data in summarypage
      public function c_deletedata($id)
      {  
           $obj= category::find($id);
           $obj->delete();
           return redirect("summarycat");
      }

     //for edit in category
   public function c_editdisplay($id)
   {
       $findrec=category::where('id',$id)->get();
       return view('addpage',compact('findrec','data'));
   }
    
 
    //to save changes
    public function c_editdata(Request $request, $id='')
    {  
       $add=student::find($id);
       if($request->isMethod('post'))
     {
         $add->fname=$request->get('name');
    
         $add->save();
     }
     return redirect("summarycat");
    }
} 
  /*  public function login(Request $request)
    {  
        $name->name=$request->get('name');
        $password->password=$request->get('password');
        $login =business::where(['name'=>$name,'password'=>$password])->get();

     if(count($login) > 0)
     {
         return view('register')->with(['name'=>" "]);
     }
     else {
        // echo "Login Failed!";
        return Redirect::route('login')->with(['error'=> "Invalid Username or Password!!"]);
     }
     return redirect("login");
    }
}
/*
    $Login =business::where(['name'=>$name,'password'=>$password])->get();

    if(count($Login) > 0)
    {
        return view('register')->with(['name'=>" "]);
    }
    else {
       // echo "Login Failed!";
       return Redirect::route('login')->with(['error'=> "Invalid Username or Password!!"]);
    }
    
/*

   



   //to display data in edit

   public function editdisplay($id)
   {
       $data=Student::simplepaginate(6);
       $findrec=Student::where('id',$id)->get();
       return view('display_form',compact('findrec','data'));
   }

   //to save changes
   public function editdata(Request $request, $id='')
   {  
      $add=student::find($id);
      if($request->isMethod('post'))
    {
        $add->fname=$request->get('fname');
        $add->lname=$request->get('lname');
        $add->marks1=$request->get('m1');
        $add->marks2=$request->get('m2');
        $add->save();
    }
    return redirect("display_form");
   }


   
   //for search 
   public function search(Request $request)
   {
      if($request->isMethod('post'))
      {
         $name=$request->get('name');
         $data=student::where('fname','Like','%'.$name.'%')->simplepaginate(6 );
      }
      return view('display_form',compact('data'));
   }

   //for valiadtion function
   public function validation()
   {
      return view('validation-form');
   }
   public function validation_submit(Request $req)
   {
      $this->validate($req, ['fname'=>'required']);
      $this->validate($req, ['lname'=>'required']);
      $this->validate($req, ['marks1'=>'required']);
      $this->validate($req, ['marks2'=>'required']);
      return back();
   }*/
