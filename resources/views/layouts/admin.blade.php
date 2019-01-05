<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include ('partials._meta')

        <title>
            {{ config('app.name') }}
        </title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


        @yield('head')
    </head>

    <body>
        <div class="flex flex-col min-h-screen text-base">
            <header class="header sticky pin-t lg:z-40 z-20 w-full bg-moon-grey font-sans-alt">
                <div class="relative flex">
                    <div class="header-logo flex-no-shrink w-376 py-6 px-10 lg:block hidden">
                        <a href="/doc" class="flex items-center block h-6 hover:no-underline">
                            <img src="{{ asset('svg/logo-rounded.svg') }}"
                                 class="h-12 w-12 mr-5"
                                 alt="{{ config('app.name') }}">

                            <span class="font-normal text-lg text-blue">{{ config('app.name') }}</span>
                        </a>
                    </div>

                    <nav class="header-nav relative z-30 flex flex-grow justify-between items-center bg-white px-4 whitespace-no-wrap lg:h-auto h-18">
                        <div class="flex items-center lg:hidden">
                            <div class="mx-6">
                                <a href="/doc"
                                   class="block h-10 w-10 text-nebula-blue fill-current no-underline">
                                    <img src="{{ asset('svg/logo-rounded.svg') }}"
                                         class="h-full w-full"
                                         alt="{{ config('app.name') }}">
                                </a>
                            </div>

                            <button class="flex items-center mr-8 text-cosmos-black hover:text-cosmos-black fill-current focus:outline-none focus:shadow-outline"
                                    data-toggle-sidebar="">
                                <span class="flex items-center h-8 w-8 mr-2 p-2 flex-no-grow flex-no-shrink">
                                    <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                        <path d="M19,8H1A1,1,0,0,1,1,6H19a1,1,0,0,1,0,2Z"></path>
                                        <path d="M19,2H1A1,1,0,0,1,1,0H19a1,1,0,0,1,0,2Z"></path>
                                        <path d="M19,14H1a1,1,0,0,1,0-2H19a1,1,0,0,1,0,2Z"></path>
                                    </svg>
                                </span>

                                <span class="block flex-no-grow flex-no-shrink text-xs uppercase"> Menu </span>
                            </button>
                        </div>

                        <ul class="list-reset h-full ml-24 mr-40 uppercase leading-tight text-sm font-semibold tracking-wide lg:flex hidden">
                            <li class="flex items-center h-full mx-16">
                                <span class="border-b-2 cursor-pointer flex h-full header-item header-item-active hover:text-nebula-blue items-center no-underline transition-fast-out"
                                      data-header-item-active="true"
                                      data-header-item=""
                                      data-open-dropdown="guides">
                                    Guides
                                </span>
                            </li>

                            <li class="flex items-center h-full mx-16">
                                <span class="border-b-2 cursor-pointer flex h-full header-item hover:text-nebula-blue items-center no-underline transition-fast-out"
                                      data-header-item-active="false"
                                      data-header-item=""
                                      data-open-dropdown="api-reference">
                                    API Reference
                                </span>
                            </li>

                            <li class="flex items-center h-full mx-16">
                                <span class="border-b-2 cursor-pointer flex h-full header-item hover:text-nebula-blue items-center no-underline transition-fast-out"
                                      data-header-item-active="false"
                                      data-header-item=""
                                      data-open-dropdown="faq">
                                    FAQ
                                </span>
                            </li>
                        </ul>

                        <div class="flex items-center bg-telluric-blue-opacity-10 rounded-lg px-4 overflow-hidden max-w-448 w-full" data-search-wrapper="">
                            <div class="h-4 mr-4 text-solstice-blue opacity-75 fill-current">
                                <svg class="block h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M19.71,18.29,16,14.61A9,9,0,1,0,14.61,16l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,19.71,18.29ZM2,9a7,7,0,1,1,12,4.93h0s0,0,0,0A7,7,0,0,1,2,9Z"></path>
                                </svg>
                            </div>

                            <input autocapitalize="none" autocomplete="off" autocorrect="off" class="text-sm w-full h-12 mt-two-px py-4 bg-transparent text-telluric-blue shadow-none outline-none truncate leading-normalized" id="docsearch" placeholder="Search for concepts, code, or forum discussions" required="required" spellcheck="false"> <div class="h-8 mx-8 text-solstice-blue opacity-75 fill-current cursor-pointer hidden" data-search-empty=""> <svg class="block h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path d="M8.41,7l5.3-5.29A1,1,0,1,0,12.29.29L7,5.59,1.71.29A1,1,0,0,0,.29,1.71L5.59,7,.29,12.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L7,8.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg> </div> </div>
                    </nav>
                </div>
            </header>

            <div class="flex-1 font-sans">
                Hello
            </div>
        </div>

        {{--@yield('content')--}}
    </body>
</html>
