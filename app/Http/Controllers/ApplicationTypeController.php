<?php

namespace App\Http\Controllers;

use App\Models\ApplicationType;
use Illuminate\Http\Request;

class ApplicationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $application_type = ApplicationType::all();
        return view('admin.admin_view_application_type', compact('application_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.admin_add_application_type');
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
        // return $request->all();
        $application = new ApplicationType();

        $application->application_type = $request->application_type;

        $application->save();

        $notification = array(
            'message' => 'Application Type Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.application_type.index')->with($notification);
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
        $application = ApplicationType::find($id);

        return view('admin.admin_edit_application_type', compact('application'));
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
        $application = ApplicationType::find($id);

        $application->application_type = $request->application_type;

        $application->save();

        $notification = array(
            'message' => 'Application Type Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.application_type.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            // dd($id);
            ApplicationType::destroy($id);

            session()->flash('message', 'Application Type Deleted Successfully');

            return redirect()->back();
        } catch (\Illuminate\Database\QueryException $ex) {
            if ($ex->getCode() === '23000') {

                session()->flash('message', 'Application Type Can\'t be Deleted');

                return redirect()->back();
            }
        }
    }
}
