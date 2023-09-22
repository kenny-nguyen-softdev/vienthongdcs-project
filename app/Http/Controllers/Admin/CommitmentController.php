<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Commitment\CommitmentService;
use App\Models\Commitment;

class CommitmentController extends Controller
{
    protected $commitmentService;

    public function __construct(CommitmentService $commitmentService)
    {
        $this->commitmentService = $commitmentService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commitments = $this->commitmentService->getAllCommitmentList();

        return view('admin.commitment.index', [
            'commitments' => $commitments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.commitment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commitment = $this->commitmentService->save($request);

        return redirect()->back();
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
    public function edit(Commitment $commitment)
    {

        return view('admin.commitment.edit', [
            'commitment' => $commitment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commitment $commitment)
    {
        $result = $this->commitmentService->update($request, $commitment);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.commitment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commitment $commitment)
    {
        $result = $this->commitmentService->deleteById($commitment->id);

        return redirect()->back();
    }
}