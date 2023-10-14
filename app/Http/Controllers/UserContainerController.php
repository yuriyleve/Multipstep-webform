<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\ServerLocations;
use App\Models\UserContainer;
use Database\Seeders\PlanSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usercontainers = UserContainer::all();
        $plans = Plan::all();

        return response()->json([
            'usercontainers' => $usercontainers,
            'plans' => $plans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getServerLocations()
    {
        $server_locations = ServerLocations::all();

        return response()->json($server_locations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $randomstring = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $container_id = substr(str_shuffle($randomstring), 1, 8);

        $container_name =  $request->name;
        $container_config =  $request->config;
        $container_gtm_id =  'GTM-' . $container_id;
        $container_location =  $request->location;
        $container_plan =  $request->plan;
        $container_billing_period =  $request->billing_period;
        $container_plan_autoupgrade =  $request->plan_autoupgrade;
        $container_domain =  $request->domain;
        $container_subdomain =  $request->subdomain;
        $container_use_custom_subdomain = 1;
        $container_tagging_server_url = 'asdas-arett@addingwell-clients-prod-002.iam.gserviceaccount.com';
        $container_status = 0;

        $usercontainer = UserContainer::create([
            'container_name' => $container_name,
            'container_config' => $container_config,
            'container_id' => $container_id,
            'container_gtm_id' => $container_gtm_id,
            'container_location' => $container_location,
            'container_use_custom_subdomain' => $container_use_custom_subdomain,
            'container_domain' => $container_domain,
            'container_subdomain' => $container_subdomain,
            'container_tagging_server_url' => $container_tagging_server_url,
            'container_plan' => $container_plan,
            'container_billing_period' => $container_billing_period,
            'container_plan_autoupgrade' => $container_plan_autoupgrade,
            'container_status' => $container_status,
        ]);

        return response()->json([
            'message' => 'Success!',
        ]);
    }

    /**
     * Display the specified resource.                                                                   
     */

    public function getContainerByID(Request $request)
    {
        $usercontainer = UserContainer::find($request->id);
        $server_locations = ServerLocations::all();
        $plan = Plan::all();

        return response()->json([
            'usercontainer' => $usercontainer,
            'server_locations' => $server_locations,
            'plans' => $plan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usercontainer = UserContainer::find($id);
        $server_locations = ServerLocations::all();
        $plan = Plan::all();
        return view('container.container_edit', compact('usercontainer', 'server_locations', 'plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateContainer(Request $request)
    {
        $container_name = $request->container_name;
        $container_config = $request->container_config;
        $container_location = $request->container_location;
        $container_domain = $request->container_domain;
        $container_subdomain = $request->container_subdomain;
        $container_status = $request->container_status;

        $usercontainer = UserContainer::find($request->id);

        $usercontainer->update([
            'container_name' => $container_name,
            'container_config' => $container_config,
            'container_location' => $container_location,
            'container_domain' => $container_domain,
            'container_subdomain' => $container_subdomain,
            'container_status' => $container_status
        ]);

        return response()->json([
            'message' => 'Success!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserContainer $userContainer)
    {
        //
    }
}
