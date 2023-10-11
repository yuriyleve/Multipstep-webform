<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\ServerLocations;
use App\Models\UserContainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContainerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('container.container_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $server_locations = ServerLocations::all();
        return view('container.container_create', compact('server_locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $container_name = $request->request->get('container_name');
        $container_config = $request->request->get('container_config');
        $container_location = $request->request->get('container_location');

        $randomstring = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $container_id = substr(str_shuffle($randomstring), 1, 8);

        Session::put('container_name', $container_name);
        Session::put('container_config', $container_config);
        Session::put('container_location', $container_location);
        Session::put('container_id', $container_id);
        Session::put('container_gtm_id', 'GTM-'.$container_id);
        Session::put('container_page', 2);

        $server_locations = ServerLocations::all();
        $plans = Plan::all();
        return view('container.select_plan', compact('server_locations', 'plans'));
    }

}
