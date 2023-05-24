<x-guest-layout>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            {{-- ********************start********************************************** --}}
            <div class="bg-white">
                <header class="absolute inset-x-0 top-0 z-50">
                    <nav class=" flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                        <div class="flex lg:flex-1" id="logo">
                            <a href="/" style="width:200px;">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </div>



                        {{-- hambuger --}}
                        <div class="flex lg:hidden ">
                            <button type="button" id="openx"
                                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                        {{-- end hambuger --}}
                        {{-- <div class="hidden lg:flex lg:gap-x-12">
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                        </div> --}}
                        {{-- <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                                    aria-hidden="true">&rarr;</span></a>
                        </div> --}}


                        @if (Route::has('login'))
                            <div class="hidden lg:flex lg:flex-1 lg:justify-end" style="">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </nav>
                    <!-- Mobile menu, show/hide based on menu open state. -->
                    <div class="lg:hidden" role="dialog" aria-modal="true" id="btn-close">
                        <!-- Background backdrop, show/hide based on slide-over state. -->
                        <div class="fixed inset-0 z-50"></div>
                        <div
                            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                            <div class="flex items-center justify-between">
                                <a href="/" style="width:150px;">
                                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                </a>
                                <button type="button" id="closex" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-gray-500/10">
                                    <div class="space-y-2 py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                                    </div>
                                    <div class="py-6">
                                        @if (Route::has('login'))
                                            <div class="lg:flex lg:flex-1" style="">
                                                @auth
                                                    <a href="{{ url('/dashboard') }}"
                                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                                @else
                                                    <a href="{{ route('login') }}"
                                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar
                                                        sesión</a>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}"
                                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






























                </header>
                <script>
                    let bu = document.getElementById("btn-close");


                    openx.addEventListener("click", (e) => {

                        bu.setAttribute("class", "lg:hidden");
                        logo.setAttribute("class", "flex lg:flex-1 show");
                    })

                    closex.addEventListener("click", (e) => {

                        logo.setAttribute("class", "flex lg:flex-1 hidden");
                        bu.setAttribute("class", "hidden");
                    })
                </script>

                <div class="relative isolate px-6 pt-14 lg:px-8">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                        aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                            <div
                                class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                Announcing our next round of funding. <a href="#"
                                    class="font-semibold text-indigo-600"><span class="absolute inset-0"
                                        aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your
                                online business</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non
                                deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam
                                occaecat fugiat aliqua.</p>
                            <div class="mt-10 flex items-center justify-center gap-x-6">
                                <a href="#"
                                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                    started</a>
                                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more
                                    <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                        aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                </div>
            </div>


            {{-- ****************************************************************** --}}
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.
                </p>
            </div>
            {{-- ****************************************************************** --}}

            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="ab ti"><img
                            src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3603&amp;q=80"
                            alt="" class="mj ti adl aie apz bxo cut">
                        <div class="aa af adl bbo bbs bcj"></div>
                    </div>
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error
                            voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                            unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-10 w-10 rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="ab ti"><img
                            src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3603&amp;q=80"
                            alt="" class="mj ti adl aie apz bxo cut">
                        <div class="aa af adl bbo bbs bcj"></div>
                    </div>
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error
                            voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                            unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-10 w-10 rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="ab ti"><img
                            src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3603&amp;q=80"
                            alt="" class="mj ti adl aie apz bxo cut">
                        <div class="aa af adl bbo bbs bcj"></div>
                    </div>
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error
                            voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                            unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-10 w-10 rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <!-- More posts... -->
            </div>

            {{-- ****************************************************************** --}}
            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-gray-600">Transactions every 24 hours</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">44
                                million</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-gray-600">Assets under holding</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                $119
                                trillion</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-gray-600">New users annually</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                46,000</dd>
                        </div>
                    </dl>
                    {{-- ****************************************************************** --}}
                </div>
            </div>

            {{-- ****************************************************************** --}}



            {{-- fin************************************* --}}
        </div>
    </div>

</x-guest-layout>
