<?php
    $server_locations = $server_locations->toArray();
    $plans = $plans->toArray();
?>

<div class="max-w-sm ml-6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    @if ($page > 1)
        <h2 class="text-xl font-bold">Summary</h2>
        <h3 class="underline mt-2">Container info</h3>
        Container name: {{ Session::get('container_name') }}<br/>
        Container config: {{ Session::get('container_config') ?? 'not set'}}<br/>
        Container location: {{ $server_locations[Session::get('container_location')]['server_location_name'] }}<br/>
    @endif
    @if ($page > 2)
        <h3 class="underline mt-2">Selected plan</h3>
        Plan: {{ $plans[Session::get('container_plan')-1]['plan_name'] }}<br/>
        Billing period: {{ Session::get('container_billing_period') == 1 ? 'Monthly' : 'Yearly'}}<br/>
        Autoupgrade: {{ Session::get('container_plan_autoupgrade') ? 'Yes' : 'No'}}<br/>
    @endif
    @if ($page > 3)
        <h3 class="underline mt-2">Domain settings</h3>
        Domain: {{ Session::get('container_domain') }}<br/>
        Subdomain: {{ Session::get('container_subdomain') }}<br/>
    @endif
</div>
