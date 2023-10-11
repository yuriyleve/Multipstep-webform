<div class="w-[200px]">
    <ul class="text-lg">
        <li><a href="{{ route('container_info.create') }}">Container info</a></li>
        <li>
            @if (Session::get('container_name'))
                <a href="{{ route('plan.create') }}">Select plan</a>
            @else
                <span class="text-gray-300">Select plan</span>
            @endif
        <li>
            @if (Session::get('container_plan'))
                <a href="{{ route('domain.create') }}">Custom domain</a>
            @else
                <span class="text-gray-300">Custom domain</span>
            @endif

        </li>
        <li>
            @if (Session::get('container_domain'))
                <a href="{{ route('dns.create') }}">Review</a>
            @else
                <span class="text-gray-300">Finish</span>
            @endif
        </li>
{{--        <li>--}}
{{--            <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                @csrf--}}
{{--                <a href="{{ route('logout') }}"--}}
{{--                   @click.prevent="$root.submit();">--}}
{{--                    {{ __('Log Out') }}--}}
{{--                </a>--}}
{{--            </form>--}}
{{--        </li>--}}
    </ul>
</div>
