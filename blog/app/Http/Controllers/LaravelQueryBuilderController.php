<?php
namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class LaravelQueryBuilderController extends Controller{

    //Retriving all rows from a table
    function retrivingAllRowsFromTable(){
            $result= DB::table('student_details')->get();
            return $result; 
    }
    //Retriving single rows from a table
    function retrivingSingleRowsFromTable(){
        $result= DB::table('student_details')->where('name','Dhiraj Baidya')->first();
        return $result->name; 
    }
    //Retriving single row by its id column value
    function retrivingSingleRowsIdColumnValue(){
        $result= DB::table('student_details')->find(3);
        return $result->name; 
    }
    //Retriving a list of column value
    function retrivingListOfColumnValue(){
        $result= DB::table('student_details')->pluck('name');
        return $result; 
    }
    //Retriving Specific a custom key column
    function retrivingSpecificCustomKeyColumn(){
        $result= DB::table('student_details')->pluck('name', 'class');
        return $result; 
    }
}