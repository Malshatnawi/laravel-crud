<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use \Illuminate\Foundation\Auth\AuthenticatesUsers; // <- add this line



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_students = Student::all();

        // return redirect()->route('studentsList')->with( ['all_students' => $all_students] );

        return view ('studentsList' , compact('all_students'));
    }


    public function AdminIndex(){

        $all_students = Student::all();

        

        return view ('studentsTable' , compact('all_students'));

    }


    public function AdminLogin(Request $request){
        $email=request('email');
        $password=request('password');

        $student_by_col_name=Student::where('Email', $email);

        // $getstudent=$student_by_col_name;

       
        // dd($student_by_col_name);

        if(Student::where('Email', $email )->exists()){
            if(Student::where('Password', $password )->exists()){
                
                $all_students = Student::all();

        

                return view ('studentsTable' , compact('all_students'));
            }
            else{
                echo "wrong pass";
                die();
            }
        
        
        }
        //     if(Student::where('Password', $password )->exists()){

        //    }
           else{
               echo "no";
               die();
           }


        if($student_by_col_name){
            // dd($student_by_col_name);

            if($student_by_col_name['password'] == $password){

                echo "ok";
            }
            else{
                echo "incorrect password";
            }
        }
        else{
            echo "email exists";
        }
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedInputs=$request->validate([
            'name' => 

            array (
            'required',
            'regex:/^([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+$/'
            
            ),

            "email"=>"required|email",
            "password" => "required|min:8|max:16",
            "password_confirmation" => "required_with:password|same:password|min:8|max:16",
            "national_id" => "required",
            "phone" => "required|digits:14 ",
            "address" => "required",
            "image" => "required"

       
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

        $file_extension = $request -> image -> getClientOriginalExtension();
        $file_name=time().".".$file_extension;
        $path = 'images/students';
        $request -> image -> move($path , $file_name);


        
        Student::create([
            "Email"=>request('email'),
            "Full_Name"=>request('name'),
            "Password"=>request('password'),
            "Mobile"=>request('phone'),
            "Address"=>request('address'),
            "Student_Image"=>$file_name,
            "National_Id"=>request('national_id'),




        ]);

       

        // return $this->index($request);

        return redirect('studentsList');



        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student, $id)
    {
        $student=Student::find($id);

        return view ('profile' , compact('student'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
        $studentArray=Student::find($id);

    
    
        return view ('editStudent', compact('studentArray'));

    }


    public function updateValidation(Request $request, Student $student, $id)
    {
        
        $validatedInputs=$request->validate([
            'name' => 

            array (
            'required',
            'regex:/^([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+$/'
            
            ),

            "email"=>"required|email",
            "password" => "required|min:8|max:16",
            "password_confirmation" => "required_with:password|same:password|min:8|max:16",
            "national_id" => "required",
            "phone" => "required|digits:14 ",
            "address" => "required",
            "image" => "required"

       
        ]);


        return $this->update($request, $id);




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $file_extension = $request -> image -> getClientOriginalExtension();
        $file_name=time().".".$file_extension;
        $path = 'images/students';
        $request -> image -> move($path , $file_name);


        Student::where ("id" , $id)->update(
            [
            "Email"=>request('email'),
            "Full_Name"=>request('name'),
            "Password"=>request('password'),
            "Mobile"=>request('phone'),
            "Address"=>request('address'),
            "Student_Image"=>$file_name,
            "National_Id"=>request('national_id'),




        ]);

        return redirect('studentsList');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, $id)
    {
        $student_by_id=Student::destroy($id);
    
    
        return redirect ('admin');

    }
}
