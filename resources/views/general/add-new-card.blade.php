@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    <div class="container-main pb-14">
        @include('widgets.head')
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-10"
        >
            <p class="text-secondary font-semibold text-start w-full">
                Add new card
            </p>
            <form
                class="w-full max-w-[500px] mx-auto pt-20 pb-14 2xl:py-28 flex flex-col items-center"
            >
                <p class="text-[#474A56] mb-1 font-semibold w-full text-start">
                    16 digits number
                </p>
                <input
                    placeholder="16-digit-number"
                    class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                    type="name"
                    id="name1"
                    name="name1"
                />
                <div class="flex md:flex-row flex-col gap-3 w-full mt-3 md:mt-6">
                    <div class="w-full">
                        <p
                            class="text-[#474A56] mb-1 font-semibold w-full text-start"
                        >
                            Expiration Date
                        </p>
                        <input
                            placeholder="--"
                            class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                            type="date"
                            id="name1"
                            name="name1"
                        />
                    </div>
                    <div class="w-full">
                        <p
                            class="text-[#474A56] mb-1 font-semibold w-full text-start"
                        >
                            CVV/CVC
                        </p>
                        <input
                            placeholder="--"
                            class="block border placeholder:text-[#DADADA] py-2.5 pl-5 w-full rounded-2xl"
                            type="password"
                            id="name1"
                            name="name1"
                        />
                    </div>
                </div>
                <label class="w-full select-none flex items-center gap-5 mt-6">
                    <input type="checkbox" />
                    <span class="text-[#474A56] mb-1"
                    >Save this payment method</span
                    >
                </label>
            </form>
            <a
                href="add-new-card.html"
                class="lg:text-sm bg-secondary 2xl:text-base text-white rounded-2xl block py-3 w-full max-w-[200px] mx-auto text-center"
            >
                Add
            </a>
        </div>
    </div>
    @include('widgets.footer')
</div>
@endsection
