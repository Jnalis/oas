<?php

namespace App\Http\Controllers;

use App\Models\Campuses;
use Illuminate\Http\Request;

class CampusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $campuses = Campuses::all();

        return view('admin.admin_view_campuses', compact('campuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.admin_add_campuses');
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
        $campuses = new Campuses();

        $campuses->campuses_name = $request->campuses_name;

        $campuses->save();

        $notification = array(
            'message' => 'Campuses Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.campuses.index')->with($notification);
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
        $campuses = Campuses::find($id);

        return view('admin.admin_edit_campuses', compact('campuses'));
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
        $campuses = Campuses::find($id);

        $campuses->campuses_name = $request->campuses_name;

        $campuses->save();

        $notification = array(
            'message' => 'Campuses Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.campuses.index')->with($notification);
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
            Campuses::destroy($id);

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
