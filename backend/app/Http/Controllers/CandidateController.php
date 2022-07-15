<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\SkillSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $candidate = Candidate::all();
        return response()->json([
            'success'   => true,
            'message'   => 'List of Candidates',
            'data'      => $candidate
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'job_id'    => 'required',
            'name'      => 'required',
            'email'     => 'required|email|unique:candidates',
            'phone'     => 'required|unique:candidates',
            'skill_set' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }

        $candidate = Candidate::create([
            'job_id'    => $request->job_id,
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'skill_set' => json_encode($request->skill_set)
        ]);

        $ss = SkillSet::create([
            'candidate_id'  => $candidate->id,
            'skill_id'      => $candidate->skill_set
        ]);

        if ($candidate && $ss) {
            return response()->json([
                'success'   => true,
                'message'   => 'Data Candidate Inserted!',
                'data'      => $candidate
            ], 201);
        }

        return response()->json([
            'success'   => false,
            'message'   => 'Sorry, failed to insert Data Candidate'
        ], 409);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
