<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Customer;
use App\Property;
use App\RequestInfo;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalProperty = Property::SelectCountTotallyProperty();
        $totalOffer = Offer::SelectCountTotallyOffer();
        $totalRequest = RequestInfo::SelectCountTotallyRequest();
        $totalAgency = User::SelectCountTotallyAgency();
        $customers = Customer::paginate(10);
//        dd($customer);

        $offers = Offer::SelectShowDashboard();
        return view('admin.dashboard')->with([
            'totalProperty' => $totalProperty,
            'totalOffer' => $totalOffer,
            'totalRequest' => $totalRequest,
            'totalAgency' => $totalAgency,
            'customers' => $customers,
            'offers' => $offers
        ]);
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
