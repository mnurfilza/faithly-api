@extends('widgets.app')
@section('content')
    <div class="w-full lg:pl-[7.75rem]">
        <div class="container-main pb-14">
            @include('widgets.head')
            <div
                class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-16 pb-24"
            >
                <h4 class="font-medium text-2xl text-center">Discount Code</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-16 lg:px-10 2xl:px-32">
                    @foreach($data as $item)
                        <form action="" method="">
                            <input
                                placeholder="Enter Discount %"
                                class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl"
                                type="hidden"
                                name="id"
                                value={{$item->id}}
                            />
                            <div class="mt-5">
                                <p>Subscription Type</p>
                                <h2 class="text-secondary  my-8 font-bold text-2xl pl-7">{{$item->name}}</h2>
                                <label for="email">Duration Type</label>
                                <select name="coupon_type"
                                        class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl">
                                    <option value="Yearly">Yearly</option>
                                    <option value="Monthly">Monthly</option>
                                </select>
                            </div>
                            <div class="mt-5 relative">
                                <label for="email">Discount Percentage</label>
                                <input
                                    placeholder="Enter Discount %"
                                    class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl"
                                    type="number"
                                    name="disc"
                                    value={{$item->disc}}
                                />
                            </div>
                            <button
                                class="text-white bg-secondary rounded-2xl w-full py-3 mt-10"
                            >
                                Save
                            </button>
                        </form>
                    @endforeach

                </div>
            </div>
        </div>
        @include('widgets.footer')

    </div>
