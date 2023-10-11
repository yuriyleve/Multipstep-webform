@extends('layouts.app')

@section('title', 'Create Container')

@section('content')
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">View container {{$usercontainer->container_name}}</h1>
        </div>
        <div class="flex mt-2">
            <div class="w-3/5">
                <form method="get" action="{{ route('container.edit', $usercontainer->id) }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-2 items-center mb-4">
                        <span class="font-bold">Container name</span>
                        {{ $usercontainer->container_name }}
                        <span class="font-bold">Container config</span>
                        {{ $usercontainer->container_config }}
                        <span class="font-bold">Server location</span>
                        {{ $server_locations[$usercontainer->container_location]['server_location_name'] }}
                        <span class="font-bold">Domain</span>
                        {{ $usercontainer->container_domain }}
                        <span class="font-bold">Subdomain</span>
                        {{ $usercontainer->container_subdomain }}
                        <span class="font-bold">Billing plan</span>
                        {{ $plan[$usercontainer->container_plan]['plan_name'] }}
                        <span class="font-bold">Billing cycle</span>
                        {{ $usercontainer->container_billing_period == 1 ? 'Monthly' : 'Yearly' }}
                        <span class="font-bold">Next billing</span>
                        {{ $usercontainer->container_next_billing_cycle }}
                        <span class="font-bold">Status</span>
                        {{ $usercontainer->container_status ? 'Active' : 'Disactive' }}
                        <span class="font-bold">Requests this month</span>
                        49/{{ $plan[$usercontainer->container_plan]['plan_max_requests'] }}
                    </div>
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
