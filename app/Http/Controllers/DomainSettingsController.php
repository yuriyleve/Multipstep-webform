<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\ServerLocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DomainSettingsController extends Controller
{
    public function index()
    {
        return view('container.domain_settings');
    }

    public function create()
    {
        $server_locations = ServerLocations::all();
        $plans = Plan::all();
        return view('container.domain_settings', compact('server_locations', 'plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $container_domain = $request->request->get('container_domain');
        $container_subdomain = $request->request->get('container_subdomain');

        Session::put('container_domain', $container_domain);
        Session::put('container_subdomain', $container_subdomain);

        $server_locations = ServerLocations::all();
        $plans = Plan::all();
        return view('container.dns_settings', compact('server_locations', 'plans'));

    }

}
