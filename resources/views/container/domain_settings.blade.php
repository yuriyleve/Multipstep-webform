@extends('layouts.app')

@section('title', 'Wij doneren webshops!')

@section('content')
    <?php $page = 3; ?>
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">Create Container</h1>
        </div>
        <div class="flex mt-2">
            @include('partials.dashboard_nav')
            <div class="w-3/5">
                <form class="" method="post" action="{{ route('domain.store') }}" novalidate="novalidate" id="kt_modal_create_app_form">
                    @csrf
                    <div class="mb-6">
                        <label for="container_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domain</label>
                        <input name="container_domain" id="container_domain" value="{{ Session::get('container_domain') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <label for="container_subdomain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subdomain</label>
                        <input name="container_subdomain" id="container_subdomain" value="{{ Session::get('container_subdomain') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
        {{--            @if (Session::get('container_plan') == 1)--}}
        {{--                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>--}}
        {{--            @else--}}
                        <a href="{{ route('plan.create') }}">Back to Select Plan</a>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
        {{--            @endif--}}
                </form>
            </div>
            @include('partials.container_summary')
        </div>
    </div>
@endsection
