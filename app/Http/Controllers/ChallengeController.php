<?php

namespace App\Http\Controllers;

use App\Challenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChallengeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = DB::table('challenges')->paginate(10);
        return view('challenge.index', ["challenges" => $challenges]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('challenge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Challenge::create($this->validateChallenge());
        return redirect('/challenges');
    }

    /**
     * Display the specified resource.
     *
     * @param  Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(Challenge $challenge)
    {
        return view('challenge.show', ["challenge" => $challenge]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        return view('challenge.edit', ['challenge' => $challenge]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challenge $challenge)
    {
        $challenge->update($this->validateChallenge());
        return redirect('/challenges/' . $challenge->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challenge $challenge)
    {
        //
    }

    protected function validateChallenge() {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'code' => 'required',
            'language' => 'sometimes',
            'comments' => 'sometimes|nullable'
        ]);
    }
}
