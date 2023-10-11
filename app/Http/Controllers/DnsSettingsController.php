<?php

namespace App\Http\Controllers;

use App\Models\DnsSettings;
use App\Models\Plan;
use App\Models\ServerLocations;
use App\Models\UserContainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DnsSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('container.dns_settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $server_locations = ServerLocations::all();
        $plans = Plan::all();
        return view('container.dns_settings', compact('server_locations', 'plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $container_plan = $request->request->get('container_plan');
//        $container_billing_cycle = $request->request->get('container_billing_cycle');
//        $container_autoupgrade = $request->request->get('container_autoupgrade');
//
//        Session::put('container_plan', $container_plan);
//        Session::put('container_billing_cycle', $container_billing_cycle);
//        Session::put('container_autoupgrade', $container_autoupgrade);
//
//        return view('container.dns_settings');

    }

    /**
     * Display the specified resource.
     */
    public function show(UserContainer $userContainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserContainer $userContainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserContainer $userContainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserContainer $userContainer)
    {
        //
    }
}
