<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\DonationService;
use App\Http\Requests\StoreDonationRequest;

class DonationController extends Controller
{
    protected $donationService;

    /**
     * Undocumented function
     *
     * @param \App\Services\DonationService $donationService
     */
    public function __construct(DonationService $donationService)
    {
        $this->donationService = $donationService;
    }

    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        // dd(response()->json($this->donationService->getData()));
        return response()->json($this->donationService->getData());
    }

    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('donations');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDonationRequest $request)
    {
        return response()->json(
            $this->donationService->saveData($request->only(
                'donator_name',
                'email',
                'amount',
                'message'
            ))
        );
    }

    /**
     * getChartsDataByDate
     *
     * @param  mixed $request
     * @return void
     */
    public function getChartsDataByDate(Request $request)
    {
        return response()->json($this->donationService->searchDate($request->startDate, $request->endDate));
    }

    public function searchDonator(Request $request)
    {
        return response()->json($this->donationService->searchDonatorName($request->search));
    }
}
