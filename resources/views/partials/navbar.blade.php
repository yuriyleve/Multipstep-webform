<div class="w-full">
    <grid class="text-xl flex">
        <li><a href="{{ route('container.index') }}">Show containers</a></li>
        <li><a href="{{ route('domain.index') }}">Billing</a></li>
        <li><a href="{{ route('container.index') }}">Blog</a></li>
        <li><a href="{{ route('container.create') }}">Create container</a></li>
{{--        <li>--}}
{{--            <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                @csrf--}}
{{--                <a href="{{ route('logout') }}"--}}
{{--                   @click.prevent="$root.submit();">--}}
{{--                    {{ __('Log Out') }}--}}
{{--                </a>--}}
{{--            </form>--}}
{{--        </li>--}}
    </grid>
</div>
