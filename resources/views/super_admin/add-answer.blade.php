@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    <div class="container-main pb-14">
        @include('widgets.head')

        <div class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-16 pb-10"  >
            <h4 class="font-medium text-2xl text-center">Add New Question</h4>
            <div class="w-full max-w-[380px] mx-auto mt-16">
                <form>
                    <div class="flex items-center justify-between mb-5">
                        <p>1</p>
                        <p>2</p>
                        <p>3</p>
                        <p>4</p>
                        <p>5</p>
                        <p>6</p>
                        <p>7</p>
                        <p>8</p>
                    </div>
                    <label class="font-medium">Add Question</label>
                    <input
                        placeholder="Enter Your Question"
                        class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl"
                        type="text"
                    />
                    <div
                        class="mt-4 rounded-full border py-1 5 px-4 inline-flex items-center gap-1"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="#442ae6"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                        <span class="text-secondary text-sm">10 Sec</span>
                    </div>
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div
                            class="border-2 rounded-md bg-[#f0effc] border-dashed border-secondary py-10 px-8 flex flex-col gap-5 items-center justify-center"
                        >
                            <img
                                class="w-5"
                                src="../assets/images/add-icon.png"
                                alt=""
                            />
                            <p>Add Answer</p>
                        </div>
                        <div
                            class="border-2 rounded-md bg-[#f0effc] border-dashed border-secondary py-10 px-8 flex flex-col gap-5 items-center justify-center"
                        >
                            <img
                                class="w-5"
                                src="../assets/images/add-icon.png"
                                alt=""
                            />
                            <p>Add Answer</p>
                        </div>
                        <div
                            class="border-2 rounded-md bg-[#f0effc] border-dashed border-secondary py-10 px-8 flex flex-col gap-5 items-center justify-center"
                        >
                            <img
                                class="w-5"
                                src="../assets/images/add-icon.png"
                                alt=""
                            />
                            <p>Add Answer</p>
                        </div>
                        <div
                            class="border-2 rounded-md bg-[#f0effc] border-dashed border-secondary py-10 px-8 flex flex-col gap-5 items-center justify-center"
                        >
                            <img
                                class="w-5"
                                src="../assets/images/add-icon.png"
                                alt=""
                            />
                            <p>Add Answer</p>
                        </div>
                    </div>
                    <button
                        class="text-white bg-secondary rounded-2xl w-full py-3 mt-16"
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
