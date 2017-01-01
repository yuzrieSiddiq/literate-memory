<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('club');
    }

    /**
     * Show the form for creating a new resource.
     * Create new proposal
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];

        return view ('proposal.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only([
            'proposalID',
            'clubID',
            'status',
            'lastreviewedby',
            'isEditable',
            'isEquipmentRequested',
            'isFundRequested',
            'isExecGroupInvolved'
        ]);

        $newproposal = new Proposal;
        $newproposal->proposalID            = $input['proposalID'];
        $newproposal->clubID                = $input['clubID'];
        $newproposal->status                = $input['status'];
        $newproposal->lastreviewedby        = $input['lastreviewedby'];
        $newproposal->isEditable            = $input['isEditable'];
        $newproposal->isFundRequested       = $input['isFundRequested'];
        $newproposal->isEquipmentRequested  = $input['isEquipmentRequested'];
        $newproposal->isExecGroupInvolved   = $input['isExecGroupInvolved'];
        $newproposal->save();

        return response()->json($newproposal);
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
    }
}
