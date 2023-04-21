@extends('widgets.app')
@section('content')
    <div class="w-full lg:pl-[7.75rem]">
        @include('widgets.head')
        <div class="container-main pb-14">
            <div
                class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-16 pb-24"
            >
                <h4 class="font-medium text-2xl text-center">Subscriptions</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 mt-8 lg:px-10 2xl:px-32">
                    @foreach ($data as $item)
                        <form action="{{route('updateSubscription')}}" method="POST">
                            @csrf
                            <input
                                placeholder="$0"
                                class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl"
                                type="hidden"
                                name="id"
                                value={{$item->id}}
                            />
                            <div class="mt-5">
                                <p>Subscription Type</p>
                                <h2 class="text-secondary  my-8 font-bold text-2xl pl-7">{{$item->name}}</h2>
                                <label for="email">Monthly Amount</label>
                                <input
                                    placeholder="$0"
                                    class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl"
                                    type="number"
                                    name="monthly_amount"
                                    value={{$item->monthly_amount}}

                                />
                            </div>
                            <div class="mt-5 relative">
                                <label for="email">Yearly Amount</label>
                                <input
                                    placeholder="$0"
                                    class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl"
                                    type="number"
                                    name="yearly_amount"
                                    value={{$item->yearly_amount}}
                                />
                            </div>
                            <div class="mt-5 relative pointer-events-none">
                                <label for="email" class="text-gray-300">No. of Users</label>
                                <input
                                    disabled="true"
                                    placeholder="$0"
                                    class="block bg-white border placeholder:text-[#DADADA] mt-1.5 py-3 pl-4 w-full rounded-2xl"
                                    type="number"
                                    name="users"
                                    value={{$item->users}}
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
@endsection
