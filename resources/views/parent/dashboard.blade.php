@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    @include('widgets.head')
    <div class="container-main pb-14">
        <div class="flex md:flex-row flex-col justify-between mt-8">
            <h1 class="text-black font-bold text-2xl">
                Good Morning, <span>John Doe</span>
            </h1>
            <div
                class="flex items-center mt-5 sm:mt-0 flex-wrap justify-end gap-3"
            >
                <a
                    href="{{route('home')}}"
                    class="bg-secondary block py-1.5 px-4 text-white rounded-md"
                >Donate</a
                >
                <a
                    href="{{route('home')}}"
                    class="bg-secondary flex items-center text-white gap-1 py-1.5 px-4 rounded-xl"
                >
                    Dashboard
                </a>
                <form>
                    <div class="flex items-center">
                        <div class="relative">
                            <input
                                class="border search-input bg-[#c4d0fb] rounded-l-full rounded-r-lg py-1.5 px-4"
                                placeholder="Search"
                                type="text"
                            />
                            <img
                                src="../assets/images/white-cross.png"
                                class="absolute dismiss cursor-pointer hidden right-4 top-[50%] translate-y-[-50%]"
                                alt=""
                            />
                        </div>
                        <img
                            class="cursor-pointer relative -left-3 bg-secondary px-2 py-2.5 rounded-md"
                            src="../assets/images/search-icon.png"
                            alt=""
                        />
                    </div>
                </form>
            </div>
        </div>
        <div class="grid md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
            <a
                href="old-testiments.html"
                class="flex flex-col items-center justify-center 2xl:py-12 py-6 text-center rounded-lg px-4 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
            >
                <img
                    class="lg:max-w-[70px] 2xl:max-w-none"
                    src="../assets/images/bible-green.png"
                    alt=""
                />
                <p class="mt-4">Old Testiments</p>
            </a>
            <a
                href="#"
                class="flex flex-col justify-center items-center 2xl:py-12 py-6 text-center rounded-lg px-4 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
            >
                <img
                    class="lg:max-w-[70px] 2xl:max-w-none"
                    src="../assets/images/bible-red.png"
                    alt=""
                />
                <p class="mt-4">New Testiments</p>
            </a>
            <a
                href="#"
                class="flex flex-col justify-center items-center 2xl:py-12 py-6 text-center rounded-lg px-4 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
            >
                <img
                    class="lg:max-w-[70px] 2xl:max-w-none"
                    src="../assets/images/bible-orange.png"
                    alt=""
                />
                <p class="mt-4">Broad Spectrum</p>
            </a>
            <a
                href="#"
                class="flex flex-col justify-center items-center 2xl:py-12 py-6 text-center rounded-lg px-4 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
            >
                <img
                    class="lg:max-w-[70px] 2xl:max-w-none"
                    src="../assets/images/bible-orangev1.png"
                    alt=""
                />
                <p class="mt-4">Bible Versus</p>
            </a>
            <a
                href="#"
                class="flex flex-col justify-center items-center 2xl:py-12 py-6 text-center rounded-lg px-4 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
            >
                <img
                    class="lg:max-w-[70px] 2xl:max-w-none"
                    src="../assets/images/where-to-find-help.png"
                    alt=""
                />
                <p class="mt-4">Where & When To Find Help</p>
            </a>
        </div>
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
            <div class="flex items-center justify-between">
                <h2 class="font-bold text-secondary text-lg">Friends</h2>
                <a
                    href="view-all-friends.html"
                    class="font-bold underline text-sm"
                >View All</a
                >
            </div>
            <div class="px-16 grid grid-cols-3 2xl:grid-cols-4 mt-5 gap-5">
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/avatar_1.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                            <div class="flex items-center gap-1.5">
                                <img
                                    src="../assets/images/coins.png"
                                    class="w-[17px]"
                                    alt=""
                                />
                                <p class="text-xs text-accent">60 coins</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/avatar_3.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                            <div class="flex items-center gap-1.5">
                                <img
                                    src="../assets/images/coins.png"
                                    class="w-[17px]"
                                    alt=""
                                />
                                <p class="text-xs text-accent">60 coins</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/avatar_2.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                            <div class="flex items-center gap-1.5">
                                <img
                                    src="../assets/images/coins.png"
                                    class="w-[17px]"
                                    alt=""
                                />
                                <p class="text-xs text-accent">60 coins</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/avatar_2.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                            <div class="flex items-center gap-1.5">
                                <img
                                    src="../assets/images/coins.png"
                                    class="w-[17px]"
                                    alt=""
                                />
                                <p class="text-xs text-accent">60 coins</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/avatar_2.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                            <div class="flex items-center gap-1.5">
                                <img
                                    src="../assets/images/coins.png"
                                    class="w-[17px]"
                                    alt=""
                                />
                                <p class="text-xs text-accent">60 coins</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/avatar_2.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                            <div class="flex items-center gap-1.5">
                                <img
                                    src="../assets/images/coins.png"
                                    class="w-[17px]"
                                    alt=""
                                />
                                <p class="text-xs text-accent">60 coins</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
            <div class="flex items-center justify-between">
                <h2 class="font-bold text-secondary text-lg">Groups</h2>
                <a href="view-all-groups.html" class="font-bold underline text-sm"
                >View All</a
                >
            </div>
            <div class="px-16 grid grid-cols-3 2xl:grid-cols-4 mt-5 gap-5">
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/group_1.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">ABC Group</h3>
                            <div class="flex items-center gap-1.5">
                                <p class="text-xs text-accent">10 People</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/group_1.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">ABC Group</h3>
                            <div class="flex items-center gap-1.5">
                                <p class="text-xs text-accent">10 People</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/group_1.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">ABC Group</h3>
                            <div class="flex items-center gap-1.5">
                                <p class="text-xs text-accent">10 People</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/group_1.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">ABC Group</h3>
                            <div class="flex items-center gap-1.5">
                                <p class="text-xs text-accent">10 People</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/group_1.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">ABC Group</h3>
                            <div class="flex items-center gap-1.5">
                                <p class="text-xs text-accent">10 People</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                >
                    <img
                        src="../assets/images/group_1.png"
                        class="rounded-full w-[40px]"
                        alt=""
                    />
                    <div class="flex items-center justify-between w-full">
                        <div>
                            <h3 class="font-semibold text-lg mb-1">ABC Group</h3>
                            <div class="flex items-center gap-1.5">
                                <p class="text-xs text-accent">10 People</p>
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('widgets.footer')

</div>

@endsection
