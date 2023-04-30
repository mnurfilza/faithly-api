@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    <div class="container-main pb-14">
        @include('widgets.head')
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg px-5 pt-14 pb-28"
        >
            <h3 class="font-semibold text-2xl text-center mb-20">
                Add Question Type
            </h3>
            <div class="w-full max-w-[700px] mx-auto">
                <div class="flex md:flex-row flex-col gap-2 items-center justify-between">
                    <div class="max-w-[240px] w-full">
                        <a
                            href="{{route('add-answer')}}"
                            class="flex px-2 h-[240px] aspect-auto rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img
                                class="w-full max-w-[150px] p-2"
                                src="../assets/images/add-question.png"
                                alt=""
                            />
                        </a>
                        <p class="font-semibold text-center mt-3">Question</p>
                    </div>
                    <span class="mt-10 md:mt-0">OR</span>
                    <div class="max-w-[240px] w-full">
                        <a
                            href="#"
                            class="flex px-2 h-[240px] aspect-auto rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img
                                class="w-full max-w-[150px] p-2"
                                src="../assets/images/puzzle-icon.png"
                                alt=""
                            />
                        </a>
                        <p class="font-semibold text-center mt-3">Word Puzzle</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('widgets.footer')
</div>
@endsection
