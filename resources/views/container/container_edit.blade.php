@extends('layouts.app')

@section('title', 'Create Container')

@section('content')
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">Edit container {{$usercontainer->container_name}}</h1>
        </div>
        <div class="flex mt-2">
            <div class="w-3/5">
                <form method="POST" action="{{ route('container.update', 1) }}">
            @csrf
            {{ method_field('PATCH') }}
            <input type="hidden" name="id" value="1"/>
            <div class="grid grid-cols-2 gap-2 items-center mb-4">
                <span class="font-bold">Container name</span>
                <input name="container_name" id="container_name" value="{{ $usercontainer->container_name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                <span class="font-bold">Container config</span>
                <input name="container_config" id="container_config" value="{{ $usercontainer->container_config }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <span class="font-bold">Server location</span>
                <select name="container_location" id="container_location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($server_locations as $key => $server_location)
                        <option value="{{ $key }}" {{ $usercontainer->container_location == $key ? 'selected' : ''}}>{{ $server_location['server_location_name'] }}</option>
                    @endforeach
                </select>
                <span class="font-bold">Domain</span>
                <input name="container_domain" id="container_domain" value="{{ $usercontainer->container_domain }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                <span class="font-bold">Subdomain</span>
                <input name="container_subdomain" id="container_subdomain" value="{{ $usercontainer->container_subdomain }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                <span class="font-bold">Status</span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="container_status" value="1" {{ $usercontainer->container_status ? 'checked' : '' }} class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                </label>
            </div>
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </form>
            </div>
        </div>
    </div>
@endsection
