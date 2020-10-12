<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;

class studentController extends Controller
{
    public function show(){
        return view('stud_create');
    }
    public function insert(Request $request) {
        $name = $request->input('stud_name');
        $address = $request->input('stud_add');
        $date_of_birth = $request->input('stud_dob');
        $graduation = $request->input('stud_grad');
        $is_active = $request->input('stud_active');
        $phone_number = $request->input('stud_phone');

        $data = array(
           'name'=>$name,
           'address' =>$address,
           'date_of_birth' =>$date_of_birth,
           'graduation'=>$graduation,
            'is_active'=>$is_active,
           'phonenumber'=>$phone_number
        );

        DB::table('students')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/view">Click Here</a> to go back.';
     }
     public function view() {
      //   $users = DB::select('select * from students');
      //   return view('stud_view',['users'=>$users]);
      $users = DB::table('students')->get();
      return view('stud_view',['users'=>$users]);
     }
     public function index() {
        $users = DB::select('select * from students');
        return view('stud_delete',['users'=>$users]);
     }
     public function destroy($id) {
        DB::table('students')->where('id',$id)->delete();
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
     }
     public function softindex() {
         $users = DB::select('select * from students');
         return view('stud_delete',['users'=>$users]);
      }
      public function softdestroy($id) {
         Student::find($id)->delete(); 
         echo "Soft delete.<br/>";
         echo '<a href = "/softdelete">Click Here</a> to go back.';
      }

     public function update() {
        $users = Student::all();
        return view('stud_edit_view',['users'=>$users]);
     }
     public function updateShow($id) {
        $users = Student::find([$id]);
      //   $users = DB::select('select * from students where id = ?',[$id]);
        return view('stud_update',['users'=>$users]);
        
     }
     public function edit(Request $request,$id) {

      $update = Student::find($id);
       
      $update->name = $request->input('stud_name');
      $update->address = $request->input('stud_add');
      $update->date_of_birth = $request->input('stud_dob');
      $update->graduation = $request->input('stud_grad');
      $update->is_active = $request->input('stud_active');
      $update->phonenumber = $request->input('stud_phone');
      
      $update->save();
      //   Student::where("id", $id)->update(['users'=>$data]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit-records">Click Here</a> to go back.';
     }
     
}
