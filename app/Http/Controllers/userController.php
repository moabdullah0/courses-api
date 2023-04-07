<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user=User::all();
       return view('students.index',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $data=$request->validated();
        $student=User::create($data);
        return new UserResource($student);
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
$users=User::all();
return response()->json($users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $id)
    {
        $dataupdate=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ];

           User::where(['id'=>$id])->update($dataupdate);

           return response()->json($dataupdate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
$user->delete();
return response()->json($user);
    }
}
