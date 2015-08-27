<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateMissionRequest;
use App\Http\Requests\UpdateMissionRequest;

use App\Http\Controllers\Controller;

use App\Mission;

class MissionsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $missions = Mission::with('user')->get();

        return view('missions.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $mission = new Mission;
        return view('missions.create', compact('mission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateMissionRequest $request)
    {
        $mission = new Mission($request->all());
        $mission->user()->associate($request->user());
        $mission->save();

        return redirect()->route('missions.show', $mission->id)
            ->with('status.success', 'Success! Your mission is now live!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $mission = Mission::findOrFail($id);
        $attempts = $mission->attempts()->with('user')->get();

        $attemptTally = count($attempts);
        $successTally = count($mission->attempts()->where('status', 'success')->get());

        return view('missions.show', compact('mission', 'attempts', 'attemptTally', 'successTally'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $mission = Mission::find($id);
        return view('missions.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateMissionRequest $request, $id)
    {
        $mission = Mission::findOrFail($id);
        $mission->fill($request->all());
        $mission->save();

        return redirect()->route('missions.show', $id)
            ->with('status.success', 'Success! Your mission is now updated!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
