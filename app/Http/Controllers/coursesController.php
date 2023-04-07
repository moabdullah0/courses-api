<?php

namespace App\Http\Controllers;

use App\Http\Requests\coursesRequest;
use App\Http\Resources\coursesResource;
use App\Models\courses;
use App\Models\sessions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $courses=courses::all();
       return view('courses.index',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $courses=new courses();

$courses->title=$request->input('title');
$courses->description=$request->input('description');
  if($request->hasFile('image')){
     $file=$request->file('image');
     $ext=$file->getClientOriginalExtension();
     $filename=time(). '.'.$ext;
     $file->move('public/imageupload',$filename);
       $courses->image=$filename;}

       $courses->save();
    return new coursesResource($courses);
  // return response()->json($courses,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(courses $course)
    {
        $course=courses::all();
        return response()->json($course);
    }
    public function showsesions($id)

    {
        if(courses::where('id',$id)->exists()){
           $course= courses::where('id',$id)->first();
           $sessions= sessions::where('courses_id',$course->id)->get();
           return view('courses.show-session',compact('course','sessions'));
        }
        else{
            return redirect('/admin/show-courses');
        }
//$sessions=courses::where()
    }

    public function showstudent($id)

    {

        if(courses::where('id',$id)->exists()){
            $course= courses::where('id',$id)->first();
            $users= User::where('course_id',$course->id)->get();
            return view('courses.show-student',compact('users','course'));
         }
         else{
             return redirect('/admin/show-courses');
         }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, courses $course)
    {
        $courss=courses::find($course);

$courss->title=$request->input('title');
$courss->description=$request->input('description');


if($request->hasFile('image')){
$dest='public/imageupload'.$courss->image;
if(File::exists($dest)){
File::delete($dest);
}
$file=$request->file('image');
$ext=$file->getClientOriginalExtension();
$filename=time(). '.'.$ext;
$file->move('public/imageupload/',$filename);
 $courss->image=$filename;

}


$courss->update();

return response()->json($courss);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
