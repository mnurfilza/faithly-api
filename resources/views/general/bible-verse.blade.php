@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    <div class="container-main pb-14">
        @include('widgets.head')
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] rounded-xl mt-20 px-5 pt-16 pb-20"
        >
            <div>
                <ul
                    class="mb-5 flex gap-0.5 max-w-[500px] rounded-xl items-center mx-auto list-none flex-col flex-wrap border-b-0 pl-0 bg-white py-0.5 px-5 md:flex-row justify-center shadow-[2px_0px_20px_rgba(0,0,0,0.0)]"
                    role="tablist"
                    data-te-nav-ref
                >
                    <li role="presentation">
                        <a
                            href="#tabs-home"
                            class="my-2 block rounded-2xl border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:text-white data-[te-nav-active]:bg-secondary"
                            data-te-toggle="pill"
                            data-te-target="#tabs-home"
                            role="tab"
                            aria-controls="tabs-home"
                            aria-selected="true"
                        >Books</a
                        >
                    </li>
                    <li role="presentation">
                        <a
                            href="#tabs-profile"
                            class="my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium rounded-2xl uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:text-white data-[te-nav-active]:bg-secondary"
                            data-te-toggle="pill"
                            data-te-target="#tabs-profile"
                            role="tab"
                            aria-controls="tabs-profile"
                            aria-selected="false"
                        >Chapter</a
                        >
                    </li>
                    <li role="presentation">
                        <a
                            href="#tabs-messages"
                            class="my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-10 pt-4 pb-3.5 text-xs font-medium rounded-2xl uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:text-white data-[te-nav-active]:bg-secondary"
                            data-te-toggle="pill"
                            data-te-target="#tabs-messages"
                            role="tab"
                            aria-controls="tabs-messages"
                            aria-selected="false"
                        >Topic</a
                        >
                    </li>
                </ul>
                <div class="mb-6">
                    <!-- TAB 1 = BOOKS -->
                    <div
                        class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block w-full"
                        id="tabs-home"
                        role="tabpanel"
                        aria-labelledby="tabs-home-tab"
                    >
                        <div
                            class="sm:px-5 lg:px-5 md:px-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 mt-5 gap-5"
                        >
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- TAB 2 = CHAPTER -->
                    <div
                        class="hidden mt-10 opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="tabs-profile"
                        role="tabpanel"
                        aria-labelledby="tabs-profile-tab"
                    >
                        <div
                            class="px-5 md:px-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-5 gap-5"
                        >
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- TAB 3 = TOPIC -->
                    <div
                        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="tabs-messages"
                        role="tabpanel"
                        aria-labelledby="tabs-profile-tab"
                    >
                        <div
                            class="px-5 md:px-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-5 gap-5"
                        >
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                            <a
                                href="#"
                                class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
                            >
                                <img
                                    src="../assets/images/books.png"
                                    class="rounded-full w-[40px]"
                                    alt=""
                                />
                                <div class="flex items-center justify-between w-full">
                                    <div>
                                        <h3 class="font-semibold text-lg mb-1">Jeriamah</h3>
                                        <div class="flex items-center gap-1.5">
                                            <img
                                                src="../assets/images/coins.png"
                                                class="w-[17px]"
                                                alt=""
                                            />
                                            <p class="text-xs text-accent">Lorem ipsum</p>
                                        </div>
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2.5"
                                        stroke="#442ae6"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                        ></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:px-16 2xl:px-28 mt-16">
                <a
                    class="bg-[#edeafd] flex justify-center items-center py-14 2xl:py-16 rounded-md relative font-medium px-4 text-center"
                    href="#"
                >
                    In the beginning God created the heavens and the earth.
                    <span
                        class="block py-1.5 absolute top-0 right-0 m-2 px-2 z-10 rounded-full bg-white"
                    >
                  <!-- HEART-FILLED -->
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="red"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="red"
                      class="w-6 h-6"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                    ></path>
                  </svg>
                </span>
                    <img
                        src="../assets/images/versus-dec-left.png"
                        class="absolute max-w-[90px] top-0 left-0"
                        alt=""
                    />
                    <img
                        src="../assets/images/versus-dec-right.png"
                        class="absolute max-w-[90px] bottom-0 right-0"
                        alt=""
                    />
                </a>
                <a
                    class="bg-[#edeafd] flex justify-center items-center py-14 2xl:py-16 rounded-md relative font-medium px-4 text-center"
                    href="#"
                >
                    Genesis 1:1
                    <span
                        class="block py-1.5 absolute top-0 right-0 m-2 px-2 z-10 rounded-full bg-white"
                    >
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="red"
                      class="w-6 h-6"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                    ></path>
                  </svg>
                </span>
                    <img
                        src="../assets/images/versus-dec-left.png"
                        class="absolute max-w-[90px] top-0 left-0"
                        alt=""
                    />
                    <img
                        src="../assets/images/versus-dec-right.png"
                        class="absolute max-w-[90px] bottom-0 right-0"
                        alt=""
                    />
                </a>
                <a
                    class="bg-[#edeafd] flex justify-center items-center py-14 2xl:py-16 rounded-md relative font-medium px-4 text-center"
                    href="#"
                >
                    Genesis 1:1
                    <span
                        class="block py-1.5 absolute top-0 right-0 m-2 px-2 z-10 rounded-full bg-white"
                    >
                  <!-- HEART-FILLED -->
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="red"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="red"
                      class="w-6 h-6"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                    ></path>
                  </svg>
                </span>
                    <img
                        src="../assets/images/versus-dec-left.png"
                        class="absolute max-w-[90px] top-0 left-0"
                        alt=""
                    />
                    <img
                        src="../assets/images/versus-dec-right.png"
                        class="absolute max-w-[90px] bottom-0 right-0"
                        alt=""
                    />
                </a>
                <a
                    class="bg-[#edeafd] flex justify-center items-center py-14 2xl:py-16 rounded-md relative font-medium px-4 text-center"
                    href="#"
                >
                    Genesis 1:1
                    <span
                        class="block py-1.5 absolute top-0 right-0 m-2 px-2 z-10 rounded-full bg-white"
                    >
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="red"
                      class="w-6 h-6"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                    ></path>
                  </svg>
                </span>
                    <img
                        src="../assets/images/versus-dec-left.png"
                        class="absolute max-w-[90px] top-0 left-0"
                        alt=""
                    />
                    <img
                        src="../assets/images/versus-dec-right.png"
                        class="absolute max-w-[90px] bottom-0 right-0"
                        alt=""
                    />
                </a>
            </div>
        </div>
    </div>
    @include('widgets.footer')
</div>
@endsection
