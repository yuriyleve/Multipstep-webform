@extends('layouts.app')

@section('title', 'Wij doneren webshops!')

@section('content')
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">Containers</h1>
        </div>
        <div class="grid grid-cols-8 mt-2">
            <div class="col-span-2">Name</div>
            <div>Usage</div>
            <div class="col-span-2">Expires on</div>
            <div>Status</div>
            <div>Plan</div>
            <div></div>
            @foreach ($usercontainers as $usercontainer)
                <div class="col-span-2">{{ $usercontainer->container_id }}</div>
                <div class="">49 / {{ $plans[$usercontainer->container_plan]['plan_max_requests'] }}</div>
                <div class="col-span-2">{{ $usercontainer->container_next_billing_cycle }}</div>
                <div class="">{{ $usercontainer->container_status ? 'Active' : 'Disactive'}}</div>
                <div class="">{{ $plans[$usercontainer->container_plan]['plan_name'] }}</div>
                <div class="">
                    <a href="{{ route('container.show', $usercontainer->id) }}" class="btn btn-sm btn-bg-light btn-active-color-primary">View</a>
                </div>
            @endforeach
        </div>
     </div>
@endsection
