@extends('layouts.app')

@section('title', 'Create Container')

@section('content')
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">Create Container</h1>
        </div>
        <div class="flex mt-2">
            @include('partials.dashboard_nav')
            <div class="w-3/5">
                <form method="post" action="{{ route('container_info.store') }}">
                    <?php $page = 1; ?>
                    @csrf
                    <div class="mb-6">
                        <label for="container_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Container name</label>
                        <input name="container_name" id="container_name" value="{{ Session::get('container_name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <label for="container_config" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Container config</label>
                        <input name="container_config" id="container_config" value="{{ Session::get('container_config') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="container_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Container location</label>
                        <select name="container_location" id="container_location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($server_locations as $key => $server_location)
                                <option value="{{ $key }}" {{ Session::get('container_location') == $key ? 'selected' : ''}}>{{ $server_location['server_location_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
                </form>
            </div>
        </div>
    </div>
@endsection
