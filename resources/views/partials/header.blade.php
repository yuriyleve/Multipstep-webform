{{--<div x-data="scrollProgress" class="fixed inset-x-0 top-0 z-50">--}}
{{--    <div class="h-1 bg-blue-500" :style="`width: ${percent}%`"></div>--}}
{{--</div>--}}

<style>

    .nav-dropdown {
        width: 200px;
    }

</style>

<div class="w-full shadow-lg fixed bg-white z-50 pb-14">
    @include('partials.verify-account-alert')
    <div class="fixed w-full z-50" style="{{\optional(Auth::user())->hasSkippedEmailVerification() ? 'top: 2.5rem' : ''}}">
        <header
                class=" flex justify-around items-center px-4 md:px-12 h-14 transition-all duration-400 z-50"
        >
            <a href="/" class="flex items-center text-gray-900">
                {{--        <img src="{{ asset('/images/logo-icon.png') }}"--}}
                {{--             alt="Logo" class="mr-2 h-12"--}}
                {{--        >--}}

                <span class="relative font-semibold text-3xl text-gray-900"
                      :class="{'{{ Request::is(['']) ? 'text-gray-900 md:text-white w-full' : 'text-gray-900' }}': !scrolledFromTop, 'text-gray-900': scrolledFromTop}"><span
                            class="hidden">YnstYn Mon3aan Supershop SuperSocial Supermerca2 Mogenta Ekomasu LvL2 Merca2 ElFuturo Rebizz Refaktor Rekommerz Ubizz Yourbizz Trubis Trubizz Noorder|Spirit</span> {{ config('app.name') }}</span>
            </a>
            <nav>
                <button name="menu-toggle" class="md:hidden" x-on:click="navbarOpen = !navbarOpen">
                    <svg class="w-6 h-6 text-gray-900"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 20 20"
                         stroke="currentColor"
                         :class="{'{{ Request::is(['']) ? 'text-gray-900 md:text-white w-full' : 'text-gray-900' }}': !scrolledFromTop, 'text-black': scrolledFromTop}"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <ul
                        class="
                    fixed
                    left-0
                    right-0
                    transition
                    duration-200
                    transform
                    translate-x-full
                    p-4
                    mt-4 md:mt-5
                    font-bold
                    md:relative md:flex md:min-h-0 md:space-y-0 md:p-0 md:translate-x-0 md:space-x-4 md:m-4
                "
                        :class="{'translate-x-full': !navbarOpen, 'translate-x-0 text-gray-900 w-full': navbarOpen,'{{ Request::is(['']) ? 'text-gray-900 md:text-white w-full' : 'text-gray-900' }}': !scrolledFromTop, 'w-full': scrolledFromTop}"
                >
                    <li x-data="{ open: false }">
                        <button
                                x-on:mouseover="open = 1"
                                x-on:mouseleave="open = 0"
                                x-on:click="open = 1"
                                :class="{'underline underline-offset-8': open}"
                                class="p-2 md:py-6 md:px-2" onclick="window.location='{{ url("/") }}'"
                        >Home
                        </button>
                    </li>
                    <li x-data="{ open: false }">
                        <button href="#"
                                x-on:mouseover="open = 3"
                                x-on:mouseleave="open = 0"
                                x-on:click="open = 3"
                                :class="{'underline underline-offset-8': open}"
                                class="p-2 md:py-6 md:px-2" onclick="window.location='{{ url("/container") }}'"
                        >Containers
                        </button>
                    </li>
                    <li x-data="{ open: false }" class="hidden">
                        <button href="#"
                                x-on:mouseover="open = 4"
                                x-on:mouseleave="open = 0"
                                x-on:click="open = 4"
                                :class="{'underline underline-offset-8': open}"
                                class="p-2 md:py-6 md:px-2"
                        >Billing
                        </button>
                        <ul class="nav-dropdown hidden bg-white px-4 pb-4 text-black md:absolute"
                            :class="{'hidden': !open}"
                            x-show="open == 4"
                            x-on:mouseover="open = 4"
                            x-on:mouseleave="open = 0"
                        >
                            <li>Core Web Vitals</li>
                            <li>SEO Audit</li>
                            <li>SEA Audit</li>
                            <li>Security Audit</li>
                        </ul>
                    </li>
                    <li x-data="{ open: false }">
                        <button href="#"
                                x-on:mouseover="open = 5"
                                x-on:mouseleave="open = 0"
                                x-on:click="open = 5"
                                :class="{'underline underline-offset-8': open}"
                                class="p-2 md:py-6 md:px-2" onclick="window.location='{{ url("/portfolio/cases") }}'"
                        >Blog
                        </button>
                        {{--                <ul class="nav-dropdown hidden bg-white px-4 pb-4 text-black md:absolute"--}}
                        {{--                    :class="{'hidden': !open}"--}}
                        {{--                    x-show="open == 5"--}}
                        {{--                    x-on:mouseover="open = 5"--}}
                        {{--                    x-on:mouseleave="open = 0"--}}
                        {{--                >--}}
                        {{--                    <li>Cases</li>--}}
                        {{--                    <li>Reviews</li>--}}
                        {{--                </ul>--}}
                    </li>
                    <li x-data="{ open: false }">
                        <button href="#"
                                x-on:mouseover="open = 6"
                                x-on:mouseleave="open = 0"
                                x-on:click="open = 6"
                                :class="{'underline underline-offset-8': open}"
                                class="p-2 md:py-6 md:px-2"
                                onclick="window.location='{{ url("/about-us") }}'"
                        >About us
                        </button>
                    </li>
                    <li x-data="{ open: false }">
                        <button href="#"
                                x-on:mouseover="open = 7"
                                x-on:mouseleave="open = 0"
                                x-on:click="open = 7"
                                :class="{'underline underline-offset-8': open}"
                                class="bg-blue-500 text-white ring-2 rounded-lg p-2 md:py-2 md:px-2 mt-4"
                                onclick="window.location='{{ url("/container/create") }}'"
                        >Create container
                        </button>
                    </li>
{{--                    @if (Auth::user())--}}
{{--                        <li x-data="{ open: false }">--}}
{{--                            <button href="#"--}}
{{--                                    x-on:mouseover="open = 7"--}}
{{--                                    x-on:mouseleave="open = 0"--}}
{{--                                    x-on:click="open = 7"--}}
{{--                                    :class="{'underline underline-offset-8': open}"--}}
{{--                                    class="p-2 md:py-6 md:px-2"--}}
{{--                                    onclick="window.location='{{ url("/dashboard") }}'"--}}
{{--                            >Dashboard--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                    @endif--}}
                </ul>
            </nav>
        </header>
    </div>
</div>
