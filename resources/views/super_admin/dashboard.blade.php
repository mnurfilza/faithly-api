@extends('widgets.app')
@section('content')
    <div class="w-full lg:pl-[7.75rem]">
        <div class="flex py-3 justify-between px-4 pl-12 sticky top-0 z-40 lg:pl-4 bg-white items-center">
            <h3 class="font-bold text-lg">Dashboard</h3>
            <div class="flex items-center">
                <div class="relative">
                    <!-- DROPDOWN -->
                    <div
                        id="dropdownMenuButton1"
                        data-te-dropdown-toggle-ref
                        aria-expanded="false"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="flex cursor-pointer items-center py-1 px-3 gap-3"
                    >
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <img src="../assets/images/Avatar1.png" alt=""/>
                            </div>
                        </div>
                        <div class="flex items-center">
                  <span class="ml-2 w-2 block">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        class="h-5 w-5"
                    >
                      <path
                          fill-rule="evenodd"
                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                          clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                        </div>
                    </div>
                    <ul
                        class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding divide-y text-left text-base shadow-lg w-full [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1"
                        data-te-dropdown-menu-ref
                    >
                        <li>
                            <!-- SETTINGS -->
                            <a
                                class="text-center w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none font-medium flex items-center gap-3 justify-center divide-y disabled:bg-transparent disabled:text-neutral-400"
                                href="#"
                                data-te-dropdown-item-ref
                            >
                                <svg
                                    width="20"
                                    height="21"
                                    viewBox="0 0 20 21"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M13 10.5C13 12.1569 11.6569 13.5 10 13.5C8.34315 13.5 7 12.1569 7 10.5C7 8.84315 8.34315 7.5 10 7.5C11.6569 7.5 13 8.84315 13 10.5Z"
                                        stroke="#000"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M10.9046 1.56005C10.6988 1.5 10.4659 1.5 10 1.5C9.53412 1.5 9.30118 1.5 9.09539 1.56005C8.79417 1.64794 8.5281 1.82808 8.33463 2.07511C8.20245 2.24388 8.11594 2.46016 7.94291 2.89272C7.69419 3.51452 7.00393 3.83471 6.36857 3.623L5.79779 3.43281C5.3929 3.29785 5.19045 3.23036 4.99196 3.2188C4.70039 3.20181 4.4102 3.27032 4.15701 3.4159C3.98465 3.51501 3.83376 3.66591 3.53197 3.9677C3.21122 4.28845 3.05084 4.44882 2.94896 4.63189C2.79927 4.90084 2.73595 5.20934 2.76759 5.51551C2.78912 5.7239 2.87335 5.93449 3.04182 6.35566C3.30565 7.01523 3.05184 7.76878 2.44272 8.13433L2.16521 8.30087C1.74031 8.55581 1.52786 8.68328 1.37354 8.85878C1.23698 9.01409 1.13401 9.19596 1.07109 9.39296C1 9.61559 1 9.86581 1 10.3663C1 10.9589 1 11.2551 1.09462 11.5088C1.17823 11.7329 1.31422 11.9337 1.49124 12.0946C1.69158 12.2766 1.96395 12.3856 2.50866 12.6035C3.06534 12.8261 3.35196 13.4441 3.16236 14.0129L2.94721 14.6584C2.79819 15.1054 2.72367 15.329 2.7169 15.5486C2.70875 15.8127 2.77049 16.0742 2.89587 16.3067C3.00015 16.5002 3.16678 16.6668 3.5 17C3.83323 17.3332 3.99985 17.4998 4.19325 17.6041C4.4258 17.7295 4.68733 17.7913 4.9514 17.7831C5.17102 17.7763 5.39456 17.7018 5.84164 17.5528L6.36862 17.3771C7.00393 17.1654 7.6942 17.4855 7.94291 18.1073C8.11594 18.5398 8.20245 18.7561 8.33463 18.9249C8.5281 19.1719 8.79417 19.3521 9.09539 19.44C9.30118 19.5 9.53412 19.5 10 19.5C10.4659 19.5 10.6988 19.5 10.9046 19.44C11.2058 19.3521 11.4719 19.1719 11.6654 18.9249C11.7976 18.7561 11.8841 18.5398 12.0571 18.1073C12.3058 17.4855 12.9961 17.1654 13.6313 17.3773L14.1579 17.5529C14.605 17.7019 14.8286 17.7764 15.0482 17.7832C15.3123 17.7913 15.5738 17.7296 15.8063 17.6042C15.9997 17.4999 16.1664 17.3333 16.4996 17.0001C16.8328 16.6669 16.9994 16.5002 17.1037 16.3068C17.2291 16.0743 17.2908 15.8127 17.2827 15.5487C17.2759 15.3291 17.2014 15.1055 17.0524 14.6584L16.8374 14.0134C16.6477 13.4444 16.9344 12.8262 17.4913 12.6035C18.036 12.3856 18.3084 12.2766 18.5088 12.0946C18.6858 11.9337 18.8218 11.7329 18.9054 11.5088C19 11.2551 19 10.9589 19 10.3663C19 9.86581 19 9.61559 18.9289 9.39296C18.866 9.19596 18.763 9.01409 18.6265 8.85878C18.4721 8.68328 18.2597 8.55581 17.8348 8.30087L17.5569 8.13416C16.9478 7.76867 16.6939 7.01514 16.9578 6.35558C17.1262 5.93443 17.2105 5.72383 17.232 5.51543C17.2636 5.20926 17.2003 4.90077 17.0506 4.63181C16.9487 4.44875 16.7884 4.28837 16.4676 3.96762C16.1658 3.66584 16.0149 3.51494 15.8426 3.41583C15.5894 3.27024 15.2992 3.20174 15.0076 3.21872C14.8091 3.23029 14.6067 3.29777 14.2018 3.43273L13.6314 3.62287C12.9961 3.83464 12.3058 3.5145 12.0571 2.89272C11.8841 2.46016 11.7976 2.24388 11.6654 2.07511C11.4719 1.82808 11.2058 1.64794 10.9046 1.56005Z"
                                        stroke="#000"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                                Settings
                            </a>
                        </li>
                        <li>
                            <!-- LOGOUT -->
                            <button
                                class="text-center w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none font-medium flex items-center gap-3 justify-center divide-y disabled:bg-transparent disabled:text-neutral-400"
                                data-te-dropdown-item-ref
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                                    />
                                </svg>

                                Logout
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-main pb-14">
            <div class="flex justify-end mt-8">
                <div class="flex items-center gap-2">
                    <button class="bg-secondary block py-1.5 px-4 rounded-full">
                        <svg
                            width="24"
                            height="25"
                            viewBox="0 0 24 25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M22 3.5H2L10 12.96V19.5L14 21.5V12.96L22 3.5Z"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </button>
                    <button
                        class="bg-secondary flex items-center text-white gap-1 py-1.5 px-4 rounded-full"
                    >
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M11 5H21"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            <path
                                d="M11 9H18"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            <path
                                d="M11 13H15"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            <path
                                d="M3 17L6 20L9 17"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            <path
                                d="M6 18V4"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                        <span>Sort: Chronological</span>
                    </button>
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-10 mt-10 mb-8 max-w-[1100px]">
                <div
                    class="flex gap-5 items-center py-10 rounded-lg pl-5 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
                >
                    <img
                        src="../assets/images/user-light.png"
                        class="max-w-[66px]"
                        alt=""
                    />
                    <div class="flex flex-col">
                        <p class="mt-4 text-3xl font-bold leading-3">{{$childTotal}}</p>
                        <p class="mt-4 font-medium text-sm">Total Children</p>
                    </div>
                </div>
                <div
                    class="flex gap-5 items-center py-10 rounded-lg pl-5 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
                >
                    <div class="relative">
                        <img
                            src="../assets/images/group-questions.png"
                            class="max-w-[66px]"
                            alt=""
                        />
                    </div>
                    <div class="flex flex-col">
                        <p class="mt-4 text-3xl font-bold leading-3">400</p>
                        <p class="mt-4 text-sm font-medium">Total Question</p>
                    </div>
                </div>
                <div
                    class="flex gap-5 items-center py-10 rounded-lg pl-5 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
                >
                    <div class="relative">
                        <img
                            src="../assets/images/hand-shake.png"
                            class="max-w-[66px]"
                            alt=""
                        />
                    </div>
                    <div class="flex flex-col">
                        <p class="mt-4 text-3xl font-bold leading-3">$400</p>
                        <p class="mt-4 text-sm font-medium">Total Donation Sent</p>
                    </div>
                </div>
            </div>
            <div
                class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
            >
                <div class="flex items-center justify-between">
                    <h3 class="text-secondary font-semibold">
                        Super Admin
                    </h3>
                    <a
                        href="{{route('super_admin_list')}}"
                        class="font-semibold"
                    >
                        View All
                    </a>
                </div>
                <div class="overflow-x-scroll custom-table hide-sb">
                    <table class="w-full min-w-[800px] custom-table mt-4">
                        <thead>
                        <tr>
                            <th>Profile Picture</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                            <th>Role Type</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $item)
                            <tr>
                                <td align="center" class="max-w-[90px]">
                                    <a href="edit-super-admin.html"><img src="../assets/images/Avatar1.png" alt=""/></a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-super-admin.html">{{$item->fullname}}</a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-super-admin.html">{{$item->fullname}}</a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-super-admin.html">{{$item->fullname}}</a>
                                </td>
                                <td align="center"><a href="#">{{$item->role_type}}</a></td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-super-admin.html">{{$item->email}}</a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-super-admin.html">{{$item->phone_number}}</a>
                                </td>
                                <td align="center" class="text-green-500 font-semibold">
                                    <a href="edit-super-admin.html">{{$item->status}}</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
            >
                <div class="flex items-center justify-between">
                    <h3 class="text-secondary font-semibold">
                        Users
                    </h3>
                    <a
                        href="{{route('users')}}"
                        class="font-semibold"
                    >
                        View All
                    </a>
                </div>
                <div class="overflow-x-scroll custom-table hide-sb">
                    <table class="w-full min-w-[800px] custom-table mt-4">
                        <thead>
                        <tr>
                            <th>Profile Picture</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                            <th>Role Type</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $item)
                            <tr>
                                <td align="center" class="max-w-[90px]">
                                    <a href="edit-users.html"><img src="../assets/images/Avatar1.png" alt=""/></a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-users.html">{{$item->fullname}}</a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-users.html">{{$item->fullname}}</a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-users.html">{{$item->fullname}}</a>
                                </td>
                                <td align="center"><a href="edit-users.html">{{$item->role_type}}</a></td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-users.html">{{$item->email}}</a>
                                </td>
                                <td align="center" class="max-w-[90px] break-words">
                                    <a href="edit-users.html">{{$item->phone_number}}</a>
                                </td>
                                <td align="center" class="text-green-500 font-semibold">
                                    <a href="edit-users.html">{{$item->status}}</a>
                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('widgets.footer')
    </div>
@endsection
