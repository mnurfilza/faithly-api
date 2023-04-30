@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    @include('widgets.head')
    <div class="container-main pb-14">
        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl relative mt-10 p-5 py-20 md:py-10"
        >
            <button
                class="bg-secondary text-white py-3 px-10 rounded-2xl absolute right-3 top-5 md:top-12 text-sm"
            >
                Preview
            </button>
            <div>
                <ul
                    class="mb-5 flex gap-0.5 max-w-[550px] rounded-xl items-center mx-auto list-none flex-col flex-wrap border-b-0 pl-0 bg-white py-0.5 px-5 md:flex-row justify-center shadow-[2px_0px_20px_rgba(0,0,0,0.1)]"
                    role="tablist"
                    data-te-nav-ref
                >
                    <li role="presentation">
                        <a
                            href="#tabs-home"
                            class="my-2 block rounded-2xl border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:text-white data-[te-nav-active]:bg-secondary"
                            data-te-toggle="pill"
                            data-te-target="#tabs-home"
                            data-te-nav-active
                            role="tab"
                            aria-controls="tabs-home"
                            aria-selected="true"
                        >Terms & Conditions</a
                        >
                    </li>
                    <li role="presentation">
                        <a
                            href="#tabs-profile"
                            class="my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-5 pt-4 pb-3.5 text-xs font-medium rounded-2xl uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:text-white data-[te-nav-active]:bg-secondary"
                            data-te-toggle="pill"
                            data-te-target="#tabs-profile"
                            role="tab"
                            aria-controls="tabs-profile"
                            aria-selected="false"
                        >Privacy Policy</a
                        >
                    </li>
                    <li role="presentation">
                        <a
                            href="#tabs-messages"
                            class="my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-16 pt-4 pb-3.5 text-xs font-medium rounded-2xl uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:text-white data-[te-nav-active]:bg-secondary"
                            data-te-toggle="pill"
                            data-te-target="#tabs-messages"
                            role="tab"
                            aria-controls="tabs-messages"
                            aria-selected="false"
                        >FAQ</a
                        >
                    </li>
                </ul>
                <div class="mb-6">
                    <!-- TAB 1 = QUESTIONS -->

                    <div
                        class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block w-full"
                        id="tabs-home"
                        role="tabpanel"
                        aria-labelledby="tabs-home-tab"
                        data-te-tab-active
                    >
                        <h3 class="font-medium text-3xl text-center mt-10 mb-10">
                            Edit Terms & Conditions
                        </h3>
                        <div class="w-full max-w-[450px] mx-auto">
                            <form>
                      <textarea
                          name=""
                          id="terms_and_cond"
                          cols="30"
                          rows="10"
                      ></textarea>
                                <button
                                    type="submit"
                                    class="text-white bg-secondary rounded-2xl py-3 w-full"
                                >
                                    Save
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- TAB 2 = WORD PUZZPLE -->
                    <div
                        class="hidden mt-10 opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="tabs-profile"
                        role="tabpanel"
                        aria-labelledby="tabs-profile-tab"
                    >
                        <h3 class="font-medium text-3xl text-center mt-10 mb-5">
                            Edit Privacy Policy
                        </h3>
                        <div class="w-full max-w-[450px] mx-auto">
                            <form>
                      <textarea
                          name=""
                          id="privacy_policy"
                          cols="30"
                          rows="10"
                      ></textarea>
                                <button
                                    type="submit"
                                    class="text-white bg-secondary rounded-2xl py-3 w-full"
                                >
                                    Save
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- TAB 3 = VERSES -->
                    <div
                        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                        id="tabs-messages"
                        role="tabpanel"
                        aria-labelledby="tabs-profile-tab"
                    >
                        <h3 class="font-medium text-3xl text-center mt-10 mb-5">
                            Edit FAQs
                        </h3>
                        <div class="w-full max-w-[450px] mx-auto">
                            <form>
                      <textarea
                          name=""
                          id="faq_md"
                          cols="30"
                          rows="10"
                      ></textarea>
                                <button
                                    type="submit"
                                    class="text-white bg-secondary rounded-2xl py-3 w-full"
                                >
                                    Save
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('widgets.footer')
</div>


@endsection
