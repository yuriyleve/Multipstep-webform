@extends('layouts.app')

@section('title', 'Wij doneren webshops!')

@section('content')
    <?php $page = 2; ?>
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">Create Container</h1>
        </div>
        <div class="flex mt-2">
            @include('partials.dashboard_nav')
            <div class="w-1/2">
                <form method="post" action="{{ route('plan.store') }}">
                    @csrf
                    @foreach ($plans as $key => $plan)
                        <div class="relative -mt-6 mb-1">
                            <input class="relative top-12 peer ml-2" type="radio" name="container_plan" value="{{ $key+1 }}" {{ Session::get('container_plan') == $key+1 ? 'checked' : ''}} id="container_plan_{{ $key+1 }}">
                            <label class="grid grid-cols-3 pl-8 p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:text-white peer-checked:ring-blue-500 peer-checked:bg-blue-500 peer2-checked:ring-2 peer-checked:border-transparent" for="container_plan_{{ $key+1 }}">
                                    <div class="col-span-2">
                                        <div class="font-bold">{{ $plan->plan_name }}</div>
                                        <div class="">Total {{ $plan->plan_max_requests }} requests | {{ $plan->plan_total_servers }} cloud server</div>
                                    </div>
                                    <div class="font-bold text-lg grid align-center justify-center">&euro; {{ $plan->plan_price }}</div>

                            </label>
            {{--                <div class="absolute hidden w-5 h-5 peer-checked:block top-10 right-3">--}}
            {{--                    👍--}}
            {{--                </div>--}}
                        </div>
                    @endforeach
                    <div class="my-4">
                        <label class="font-bold">Billing period</label>
                        <select id="container_billing_period" name="container_billing_period" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"> // update plan prices
                            <option value="1" {{ Session::get('container_billing_period') == 1 ? 'selected' : ''}} >Monthly</option>
                            <option value="2" {{ Session::get('container_billing_period') == 2 ? 'selected' : ''}}>Yearly</option>
                        </select>
                        <div>Save up to 13% with a yearly subscription!</div>
                    </div>
                    <div class="mb-4">
                        <div class="grid grid-cols-4 gap-3 items-center">
                            <div class="col-span-3">
                                <label class="font-bold">Automatic upgrade?</label>
                                <div class="fs-7 fw-semibold text-muted">Your package will automatically be upgraded based on your requests.</div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="container_plan_autoupgrade" value="1" {{ Session::get('container_plan_autoupgrade') ? 'checked' : '' }} class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                    </div>
                    <a href="{{ route('container_info.create') }}">Back to Container info</a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
                </form>
            </div>
            @include('partials.container_summary')
        </div>
    </div>
@endsection
