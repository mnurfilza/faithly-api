@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    <div class="container-main pb-14">
        @include('widgets.head')

        <div
            class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] rounded-xl mt-20 p-5 pt-7 pb-16 2xl:py-20"
        >
            <h3 class="font-semibold text-2xl pb-16 text-center">
                Content Management
            </h3>
            <div class="px-5 2xl:max-w-[1100px] mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                    <div>
                        <a
                            href="notifications.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <svg
                                width="61"
                                height="60"
                                viewBox="0 0 61 60"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M45.7497 24.998C45.7497 21.0198 44.143 17.2045 41.2831 14.3914C38.4231 11.5784 34.5442 9.99805 30.4997 9.99805C26.4551 9.99805 22.5762 11.5784 19.7163 14.3914C16.8564 17.2045 15.2497 21.0198 15.2497 24.998L15.2497 44.9981L45.7497 44.9981L45.7497 24.998ZM50.833 46.6656L51.8497 47.9981C51.9913 48.1838 52.0775 48.4046 52.0987 48.6358C52.1199 48.867 52.0752 49.0994 51.9697 49.3071C51.8641 49.5147 51.7019 49.6893 51.5011 49.8114C51.3004 49.9334 51.069 49.9981 50.833 49.9981L10.1663 49.9981C9.93033 49.9981 9.69899 49.9334 9.49823 49.8114C9.29746 49.6893 9.13522 49.5147 9.02967 49.3071C8.92413 49.0994 8.87945 48.867 8.90064 48.6358C8.92184 48.4046 9.00807 48.1838 9.14967 47.9981L10.1663 46.6656L10.1663 24.998C10.1663 19.6937 12.3086 14.6066 16.1218 10.8559C19.9351 7.10518 25.1069 4.99805 30.4997 4.99805C35.8924 4.99805 41.0643 7.10518 44.8775 10.8559C48.6908 14.6066 50.833 19.6937 50.833 24.998L50.833 46.6656ZM24.1455 52.4981L36.8538 52.4981C36.8538 54.1557 36.1844 55.7454 34.9928 56.9175C33.8011 58.0896 32.1849 58.7481 30.4997 58.7481C28.8144 58.7481 27.1982 58.0896 26.0066 56.9175C24.815 55.7454 24.1455 54.1557 24.1455 52.4981Z"
                                    fill="#442AE6"
                                />
                            </svg>
                        </a>
                        <p class="font-semibold text-center mt-3">Notifications</p>
                    </div>
                    <div>
                        <a
                            href="avatars.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img src="../assets/images/user-icon.png" alt="" />
                        </a>
                        <p class="font-semibold text-center mt-3">Avatars</p>
                    </div>
                    <div>
                        <a
                            href="badges.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img src="../assets/images/badge-icon.png" alt="" />
                        </a>
                        <p class="font-semibold text-center mt-3">Badges</p>
                    </div>
                    <div>
                        <a
                            href="discount-code.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img src="../assets/images/diss-icon.png" alt="" />
                        </a>
                        <p class="font-semibold text-center mt-3">Discount Code</p>
                    </div>
                    <div>
                        <a
                            href="email.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img src="../assets/images/message-icon.png" alt="" />
                        </a>
                        <p class="font-semibold text-center mt-3">Email</p>
                    </div>
                    <div>
                        <a
                            href="guest.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img src="../assets/images/gues-icon.png" alt="" />
                        </a>
                        <p class="font-semibold text-center mt-3">Guest</p>
                    </div>
                    <div>
                        <a
                            href="audios.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img
                                class="max-w-[65px]"
                                src="../assets/images/music-icon.png"
                                alt=""
                            />
                        </a>
                        <p class="font-semibold text-center mt-3">Audios</p>
                    </div>
                    <div>
                        <a
                            href="pages-content.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img
                                class="max-w-[65px]"
                                src="../assets/images/page-contest.png"
                                alt=""
                            />
                        </a>
                        <p class="font-semibold text-center mt-3">Page Content</p>
                    </div>
                    <div>
                        <a
                            href="subscription.html"
                            class="flex px-2 h-[180px] rounded-md items-center justify-center bg-[#eceafc] border-2 border-secondary border-dashed border-separate"
                        >
                            <img src="../assets/images/subscription-icon.png" alt="" />
                        </a>
                        <p class="font-semibold text-center mt-3">Subscription</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('widgets.footer')
</div>
@endsection
