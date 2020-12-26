<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\User;

class UsersController extends Controller
{
    public function login_get(){
        if (auth()->check()) {
            $all_students = Student::all();

            return view ('studentsTable' , compact('all_students'));
            
        }
        else{
            return view ('login');
        }
        
    }

    public function register_get(){
        return view ('addAdmin');
    }

    public function create(Request $request)
    {
        $validatedInputs=$request->validate([
            'name' => 

            array (
            'required',
            'regex:/^([A-Za-z]{3,})+\s+([A-Za-z]{3,})+$/'
            
            ),

            "email"=>"required|email",
            "password" => "required|min:8|max:16",
            "password_confirmation" => "required_with:password|same:password|min:8|max:16",
            "mobile" => "required|digits:14 ",

       
        ]);

        return $this->store($request);



        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $file_extension = $request -> image -> getClientOriginalExtension();
        // $file_name=time().".".$file_extension;
        // $path = 'images/students';
        // $request -> image -> move($path , $file_name);


        
        User::create([
            "email"=>request('email'),
            "name"=>request('name'),
            "password"=>request('password'),
            "mobile"=>request('mobile'),




        ]);

       

        // return $this->index($request);

        return $this->login_get();



        
    }



    public function login_post(Request $request){
        $remember=$request->has('remember')?true:false;
        if(auth()->attempt(['email' => request('email') , 'password' => request('password')], $remember)){

             $all_students = Student::all();

            return view ('studentsTable' , compact('all_students'));

            // Student::AdminIndex();


        }
        else{
            return back();
        }
    }
}
