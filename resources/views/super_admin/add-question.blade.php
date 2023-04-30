@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    @include('widgets.head')
    <div class="container-main pb-14">
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-16 pb-10"
        >
            <h4 class="font-medium text-2xl text-center">Add New Question</h4>
            <div class="w-full max-w-[380px] mx-auto mt-16">
                <form>
                    <div class="mt-5">
                        <label for="email">Choose Testiments</label>
                        <select class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl" name="" id="">
                            <option value="genesis">Genesis</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="email">Choose Book No</label>
                        <select class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl" name="" id="">
                            <option value="genesis">Genesis</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="email">Choose Level No</label>
                        <select class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl" name="" id="">
                            <option value="genesis">Genesis</option>
                        </select>
                    </div>
                    <button class="text-white bg-secondary rounded-2xl w-full py-3 mt-16">Save</button>
                </form>
            </div>
        </div>
    </div>
    @include('widgets.footer')
</div>

@endsection
