@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    <div class="container-main pb-14">
        @include('widgets.head')
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] rounded-xl mt-20 p-5 py-16 2xl:py-44 flex flex-col items-center justify-center"
        >
            <div
                class="bg-secondary divide-x divide-white py-3 px-5 flex items-center rounded-xl text-white"
            >
              <span class="flex flex-col items-center px-3">
                <p class="text-3xl font-semibold mb-1">1hr</p>
                <p class="text-[0.65rem] text-center max-w-[80px]">
                  Spent in Broad Spectrum
                </p>
              </span>
                <span class="flex flex-col items-center px-3">
                <p class="text-3xl font-semibold mb-1">12</p>
                <p class="text-[0.65rem] text-center max-w-[80px]">
                  Regular Refs Requested
                </p>
              </span>
                <span class="flex flex-col items-center px-3">
                <p class="text-3xl font-semibold mb-1">20</p>
                <p class="text-[0.65rem] text-center max-w-[80px]">
                  Answer Refs Reguested
                </p>
              </span>
            </div>
            <div class="max-w-[300px] py-20">
                <canvas id="myChart"></canvas>
            </div>
            <button
                class="bg-secondary max-w-[270px] text-sm text-center mt-10 hover:bg-[#6f43ff] transition-all active:bg-[#6f43ff] text-white rounded-2xl py-3 w-full"
            >
                Generate New Puzzle
            </button>
        </div>
    </div>
    @include('widgets.footer')

</div>
@endsection
