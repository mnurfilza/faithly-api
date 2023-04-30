@extends('widgets.app')
@section('content')
    <div class="w-full lg:pl-[7.75rem]">
        @include('widgets.head')
        <div class="container-main pb-14">
            <div
                class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-16 pb-10"
            >
                <h4 class="font-medium text-2xl text-center">Edit Child</h4>
                <div class="flex lg:flex-row flex-col  pt-20 items-center justify-center gap-10">
                    <div>
                        <div class="flex flex-col items-center relative">
                            <img src="../assets/images/Avatar-large.png" alt=""/>
                            <p class="text-lg font-medium mt-6">John Doe (user)</p>
                            <input type="file" class="w-full h-full absolute opacity-0" name="" id="">
                        </div>
                        <div
                            class="bg-secondary mt-8 divide-x divide-white py-3 px-5 flex items-center justify-center rounded-xl text-white">
                  <span class="flex flex-col items-center px-6">
                    <p class="text-3xl font-semibold mb-1">50</p>
                    <p class="text-[0.65rem] text-center">
                      Question <br>
                      Answered
                    </p>
                  </span>
                            <span class="flex flex-col items-center px-6">
                    <p class="text-3xl font-semibold mb-1">2nd</p>
                    <p class="text-[0.65rem] text-center">
                      Level <br>
                      Achieved
                    </p>
                  </span>
                        </div>
                    </div>
                    <form
                        class="w-full max-w-[700px] pb-14 2xl:py-28 flex flex-col items-center"
                    >
                        <div class="flex sm:flex-row flex-col gap-3 w-full mt-3 sm:mt-6">
                            <div class="w-full">
                                <p
                                    class="text-[#474A56] mb-1 font-semibold w-full text-start"
                                >
                                    Choose Role
                                </p>
                                <select
                                    class="block bg-white border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                                    name=""
                                    id=""
                                >
                                    <option value="1">Admin</option>
                                    <option value="1">Super Admin</option>
                                    <option value="1">Child</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <p
                                    class="text-[#474A56] mb-1 font-semibold w-full text-start"
                                >
                                    Phone Number
                                </p>
                                <input
                                    placeholder="Enter phone number"
                                    class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                                    type="number"
                                />
                            </div>
                        </div>
                        <div class="flex sm:flex-row flex-col gap-3 w-full mt-3 sm:mt-6">
                            <div class="w-full">
                                <p
                                    class="text-[#474A56] mb-1 font-semibold w-full text-start"
                                >
                                    Name
                                </p>
                                <input
                                    placeholder="Enter Name"
                                    class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                                    type="text"
                                />
                            </div>
                            <div class="w-full">
                                <p
                                    class="text-[#474A56] mb-1 font-semibold w-full text-start"
                                >
                                    Username
                                </p>
                                <input
                                    placeholder="Enter username"
                                    class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                                    type="text"
                                />
                            </div>
                        </div>
                        <div class="flex sm:flex-row flex-col gap-3 w-full mt-3 sm:mt-6">
                            <div class="w-full">
                                <p
                                    class="text-[#474A56] mb-1 font-semibold w-full text-start"
                                >
                                    Email Address
                                </p>
                                <input
                                    placeholder="Enter email"
                                    class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                                    type="email"
                                />
                            </div>
                            <div class="w-full">
                                <p
                                    class="text-[#474A56] mb-1 font-semibold w-full text-start"
                                >
                                    Passcode
                                </p>
                                <input
                                    placeholder="Enter phone number"
                                    class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                                    type="password"
                                />
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex items-center mt-6">
                                <label class="block w-full">
                                    <input type="checkbox" class="mr-2"/>
                                    Add Content
                                </label>
                                <label class="block w-full">
                                    <input type="checkbox" class="mr-2"/>
                                    Add Users
                                </label>
                            </div>
                            <div class="flex items-center mt-3">
                                <label class="block w-full">
                                    <input type="checkbox" class="mr-2"/>
                                    Add Questions
                                </label>
                                <label class="block w-full">
                                    <input type="checkbox" class="mr-2"/>
                                    Add Groups
                                </label>
                            </div>
                        </div>
                        <button class="text-red-500 mt-10 w-full max-w-[250px] py-2">Delete User</button>
                        <button
                            type="button"
                            class="lg:text-sm bg-secondary 2xl:text-base mt-4 text-white rounded-2xl block py-3 w-full max-w-[250px] mx-auto text-center"
                        >
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @include('widgets.footer')

    </div>
@endsection
