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
        $container_name =  Session::get('container_name');
        $container_config =  Session::get('container_config');
        $container_id =  Session::get('container_id');
        $container_gtm_id =  Session::get('container_gtm_id');
        $container_location =  Session::get('container_location');
        $container_plan =  Session::get('container_plan');
        $container_billing_period =  Session::get('container_billing_period');
        $container_plan_autoupgrade =  Session::get('container_plan_autoupgrade');
        $container_domain =  Session::get('container_domain');
        $container_subdomain =  Session::get('container_subdomain');

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

        return view('container.container_list');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usercontainer = UserContainer::find($id);
        $server_locations = ServerLocations::all();
        $plan = Plan::all();
        return view('container.container_show', compact('usercontainer', 'server_locations', 'plan'));
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
    public function update(Request $request, UserContainer $userContainer)
    {
        $container_name = $request->request->get('container_name');
        $container_config = $request->request->get('container_config');
        $container_location = $request->request->get('container_location');
        $container_domain = $request->request->get('container_domain');
        $container_subdomain = $request->request->get('container_subdomain');
        $container_status = $request->request->get('container_status') ?? 0;

        $usercontainer = UserContainer::find($request->id);

        $usercontainer->update([
            'container_name' => $container_name,
            'container_config' => $container_config,
            //            'container_id' => $container_id,
            //            'container_gtm_id' => $container_gtm_id,
            'container_location' => $container_location,
            //            'container_use_custom_subdomain' => $container_use_custom_subdomain,
            'container_domain' => $container_domain,
            'container_subdomain' => $container_subdomain,
            //            'container_tagging_server_url' => $container_tagging_server_url,
            //            'container_plan' => $container_plan,
            //            'container_billing_period' => $container_billing_period,
            //            'container_plan_autoupgrade' => $container_plan_autoupgrade,
            'container_status' => $container_status
        ]);

        $usercontainers = UserContainer::all();
        $server_locations = ServerLocations::all();
        $plans = Plan::all();
        return view('container.container_list', compact('usercontainers', 'server_locations', 'plans'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserContainer $userContainer)
    {
        //
    }
}
