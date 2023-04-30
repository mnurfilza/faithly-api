@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    @include('widgets.head')

    <div class="container-main pb-14">
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-16 pb-10"
        >
            <h4 class="font-medium text-2xl text-center">
                Add New Child
            </h4>
            <div class="flex lg:flex-row  pt-20 flex-col items-center justify-center gap-10">
                <div
                    class="flex flex-col items-center justify-center bg-[#f8f8ff] border border-dashed px-5 py-[44px] border-[#384eb7] rounded-full relative cursor-pointer"
                >
                    <img
                        class="w-full max-w-[70px] mb-6"
                        src="../assets/images/upload-icon.png"
                        alt=""
                    />
                    <p class="font-medium">
                        Drag & drop files or
                        <span class="text-secondary underline cursor-pointer"
                        >Browse</span
                        >
                    </p>
                    <p class="text-xs text-gray-500 mt-3">
                        Supported formates: JPEG, PNG,
                    </p>
                    <input
                        type="file"
                        class="opacity-0 absolute w-full h-full top-0 left-0"
                    />
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
                                <input type="checkbox" class="mr-2" />
                                Notifications
                            </label>
                            <label class="block w-full">
                                <input type="checkbox" class="mr-2" />
                                Invites
                            </label>
                        </div>
                        <div class="flex items-center mt-3">
                            <label class="block w-full">
                                <input type="checkbox" class="mr-2" />
                                Add Tasks
                            </label>
                        </div>
                    </div>
                    <button
                        type="button"
                        class="lg:text-sm bg-secondary 2xl:text-base mt-16 text-white rounded-2xl block py-3 w-full max-w-[250px] mx-auto text-center"
                    >
                        Add New Child
                    </button>
                </form>
            </div>
        </div>
    </div>
    @include('widgets.footer')
</div>
@endsection
