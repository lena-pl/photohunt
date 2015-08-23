<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateAttemptRequest;
use App\Http\Controllers\Controller;
use App\Attempt;
use App\User;
use App\Mission;

class AttemptsController extends Controller
{
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
        $attempt->user_id = 1;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
