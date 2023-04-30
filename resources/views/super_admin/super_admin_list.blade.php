@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    @include('widgets.head')
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
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
            <div class="flex items-center justify-between">
                <h3 class="text-secondary font-semibold">Super Admins</h3>
                <a
                    href="{{route('add_super_admin')}}"
                    class="sm:text-sm text-xs text-white bg-secondary rounded-2xl py-2.5 px-4 sm:px-7"
                >
                    Add New Super Admin
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
                    <tr>
                        <td align="center" class="max-w-[90px]">
                            <a href="edit-super-admin.html"><img src="../assets/images/Avatar1.png" alt="" /></a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">Jonathanasdasdasd</a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">Jonathan</a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">Jonathan</a>
                        </td>
                        <td align="center"><a href="edit-super-admin.html">Child</a></td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">12312john@gmail.com</a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">+1 234567899010</a>
                        </td>
                        <td align="center" class="text-green-500 font-semibold">
                            <a href="edit-super-admin.html">Active</a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" class="max-w-[90px]">
                            <a href="edit-super-admin.html"><img src="../assets/images/Avatar1.png" alt="" /></a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">Jonathanasdasdasd</a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">Jonathan</a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">Jonathan</a>
                        </td>
                        <td align="center"><a href="edit-super-admin.html">Child</a></td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">12312john@gmail.com</a>
                        </td>
                        <td align="center" class="max-w-[90px] break-words">
                            <a href="edit-super-admin.html">+1 234567899010</a>
                        </td>
                        <td align="center" class="text-red-500 font-semibold">
                            <a href="edit-super-admin.html">Inactive</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('widgets.footer')
</div>
@endsection
