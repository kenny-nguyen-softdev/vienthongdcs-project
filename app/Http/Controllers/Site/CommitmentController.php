<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Commitment\CommitmentService;
use Illuminate\Http\Request;

class CommitmentController extends Controller
{
    protected $commitmentService;

    public function __construct(CommitmentService $commitmentService)
    {
        $this->commitmentService = $commitmentService;
    }

    public function show($commitmentSlug)
    {
        $commitment = $this->commitmentService->getCommitmentBySlug($commitmentSlug);

        if (empty($commitment)) {
            return redirect()->route('site.home');
        }

        return view('site.commitment.show', [
            'commitment' => $commitment
        ]);
    }
}