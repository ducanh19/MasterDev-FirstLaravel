<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use Illuminate\Http\Request;
use Redirect;

class scheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = schedule::all();
        
        return view('schedules.index')
            ->with('schedules', $schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new schedule;
        $schedule->title = $request->get('title');
        $schedule->activity_from = $request->get('start');
        $schedule->activity_to = $request->get('end');
        $schedule->time_ship = $request->get('ship');
        $schedule->shop_name = $request->get('shop');

        $schedule->save();
        return Redirect::to('admin/schedules');
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
        $schedule = schedule::find($id);

        return View('schedules.edit')
            ->with('schedule', $schedule);
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
        $schedule = schedule::find($id);

        $schedule->title = $request->get('title');
        $schedule->activity_from = $request->get('start');
        $schedule->activity_to = $request->get('end');
        $schedule->time_ship = $request->get('ship');
        $schedule->shop_name = $request->get('shop');
        $schedule->save();

        return Redirect::to('admin/schedules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = schedule::find($id);
        $schedule->delete();

        return Redirect::to('admin/schedules');
    }
}
