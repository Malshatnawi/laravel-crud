<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['National_Id' , 'Full_Name', 'Email', 'Mobile', 'Password', 'Address', 'Student_Image' ];
}
