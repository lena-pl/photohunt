<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateAttemptRequest;
use App\Http\Requests\UpdateAttemptRequest;
use App\Http\Controllers\Controller;
use App\Attempt;
use App\User;
use App\Mission;

class AttemptsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
     public function store(CreateAttemptRequest $request, $mission_id)
    {
        $user = User::findOrFail(1);
        $mission = Mission::findOrFail($mission_id);

        $attempt = new Attempt($request->all());
        $attempt->user()->associate($request->user());
        $attempt->mission_id = $mission_id;

        $attempt->save();

        return redirect()->route('missions.show', $mission_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($mission_id, $id)
    {
        $attempt = Attempt::findOrFail($id);
        return view('attempts.edit', compact('attempt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateAttemptRequest $request, $mission_id, $id)
    {
        $attempt = Attempt::findOrFail($id);
        if ($attempt->mission->user->id === $request->user()->id) {
            $attempt->fill($request->all());
        } else {
            $attempt->fill($request->except('status'));
        }
        $attempt->save();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        } else {
            return redirect()->route('missions.show', $mission_id)
                ->with('status.success', 'Success! Your attempt is now updated!');
        }
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
