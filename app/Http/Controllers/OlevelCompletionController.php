<?php

namespace App\Http\Controllers;

use App\Models\LevelCompletion;
use Illuminate\Http\Request;

class OlevelCompletionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $status = LevelCompletion::all();
        return view('admin.admin_view_olevel_completion', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.admin_add_olevel_completion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $completion = new LevelCompletion();

        $completion->level_completion_status = $request->level_completion_status;

        $completion->save();

        $notification = array(
            'message' => 'O Level Completion Status Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.olevel_completion_status.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $completion = LevelCompletion::find($id);
        return view('admin.admin_edit_olevel_completion', compact('completion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $completion = LevelCompletion::find($id);

        $completion->level_completion_status = $request->level_completion_status;

        $completion->save();

        $notification = array(
            'message' => 'O Level Completion Status Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.olevel_completion_status.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // dd($id);
            LevelCompletion::destroy($id);

            session()->flash('message', 'Deleted Successfully');

            return redirect()->back();
        } catch (\Illuminate\Database\QueryException $ex) {
            if ($ex->getCode() === '23000') {

                session()->flash('message', 'Can\'t be Deleted');

                return redirect()->back();
            }
        }
    }
}
