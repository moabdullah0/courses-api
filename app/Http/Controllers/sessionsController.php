<?php

namespace App\Http\Controllers;

use App\Http\Requests\sessionsRequest;
use App\Http\Resources\sessionsResource;
use App\Models\sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class sessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(sessionsRequest $request)
    {
        $data=$request->validated();
        $sessions=sessions::create($data);
        return new sessionsResource($sessions);
    }

    /**
     * Display the specified resource.
     */
    public function show(sessions $id)
    {
        //
    }


    public function update(Request $request, $session_id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|string',
            'courses_id' => 'nullable',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $session = sessions::find($session_id);
        $session->title = $request->input('title');
        $session->description = $request->input('description');
        $session->courses_id = $request->input('courses_id');
        $session->link = $request->input('link');

        $session->save();

        return response()->json([
            'success' => true,
            'data' => $session,
            'message' => 'Session updated successfully',
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sessions $sessions_id)
    {
     $delete_Sessions=  $sessions_id->delete();
       return response()->json([
        'success' => true,
            'data' => $delete_Sessions,
            'message' => 'Session deleted successfully',
       ]);
    }
}
