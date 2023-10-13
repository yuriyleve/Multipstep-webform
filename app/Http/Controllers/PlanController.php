<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\ServerLocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();

        return response()->json($plans);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $server_locations = ServerLocations::all();
        $plans = Plan::all();
        return view('container.select_plan', compact('server_locations', 'plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $container_plan = $request->request->get('container_plan');
        $container_billing_period = $request->request->get('container_billing_period');
        $container_autoupgrade = $request->request->get('container_plan_autoupgrade') ?? 0;

        Session::put('container_plan', $container_plan);
        Session::put('container_billing_period', $container_billing_period);
        Session::put('container_plan_autoupgrade', $container_autoupgrade);

        $server_locations = ServerLocations::all();
        $plans = Plan::all();

        return view('container.domain_settings', compact('server_locations', 'plans'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
