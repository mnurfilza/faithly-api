@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    @include('widgets.head')
    <div class="container-main pb-14">
        <div class="flex sm:flex-row flex-col justify-between mt-8">
          <div>
            <a href="#" class="text-white bg-secondary py-2 px-7 rounded-xl"
            >Invite</a
          >
          </div>
          <form>
            <div class="flex items-center mt-4 sm:mt-0">
              <div class="relative w-full">
                <input
                  class="border search-input w-full bg-[#c4d0fb] rounded-l-full rounded-r-lg py-1.5 px-4"
                  placeholder="Search"
                  type="text"
                />
                <img
                  src="../assets/images/white-cross.png"
                  class="absolute dismiss cursor-pointer hidden right-4 top-[50%] translate-y-[-50%]"
                  alt=""
                />
              </div>
              <img
                class="cursor-pointer relative -left-3 bg-secondary px-2 py-2.5 rounded-md"
                src="../assets/images/search-icon.png"
                alt=""
              />
            </div>
          </form>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10 mt-10 mb-8 max-w-[1100px]">
          <div
            class="flex gap-5 items-center py-5 rounded-lg pl-4 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
          >
            <img
              src="../assets/images/friends-img.png"
              class="max-w-[66px]"
              alt=""
            />
            <div class="flex flex-col">
              <p class="mt-4 text-2xl font-bold leading-3">15</p>
              <p class="mt-4 text-xs font-medium">Total Friends</p>
            </div>
          </div>
          <div
            class="flex gap-5 items-center py-5 rounded-lg pl-4 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
          >
            <div class="relative">
              <img
                src="../assets/images/friends-img.png"
                class="max-w-[66px]"
                alt=""
              />
              <svg
                class="absolute -top-2 -right-2"
                width="25"
                height="32"
                viewBox="0 0 37 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M16.6934 26.4894H20.2253V19.4255H27.2892V15.8936H20.2253V8.82979H16.6934V15.8936H9.62959V19.4255H16.6934V26.4894ZM18.4594 35.3191C16.0165 35.3191 13.7207 34.8553 11.5721 33.9276C9.42356 33.001 7.55459 31.7431 5.96523 30.1537C4.37587 28.5644 3.11792 26.6954 2.19138 24.5468C1.26366 22.3982 0.799805 20.1025 0.799805 17.6596C0.799805 15.2167 1.26366 12.9209 2.19138 10.7723C3.11792 8.62376 4.37587 6.75479 5.96523 5.16543C7.55459 3.57606 9.42356 2.31752 11.5721 1.38981C13.7207 0.463269 16.0165 0 18.4594 0C20.9023 0 23.198 0.463269 25.3466 1.38981C27.4952 2.31752 29.3642 3.57606 30.9535 5.16543C32.5429 6.75479 33.8008 8.62376 34.7274 10.7723C35.6551 12.9209 36.119 15.2167 36.119 17.6596C36.119 20.1025 35.6551 22.3982 34.7274 24.5468C33.8008 26.6954 32.5429 28.5644 30.9535 30.1537C29.3642 31.7431 27.4952 33.001 25.3466 33.9276C23.198 34.8553 20.9023 35.3191 18.4594 35.3191Z"
                  fill="#442AE6"
                />
              </svg>
            </div>
            <div class="flex flex-col">
              <p class="mt-4 text-2xl font-bold leading-3">15</p>
              <p class="mt-4 text-xs font-medium">Friend Request Received</p>
            </div>
          </div>
          <div
            class="flex gap-5 items-center py-5 rounded-lg pl-4 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
          >
            <div class="relative">
              <img
                src="../assets/images/friends-img.png"
                class="max-w-[66px]"
                alt=""
              />
              <svg
                class="absolute -top-1 -right-3 w-6"
                width="33"
                height="33"
                viewBox="0 0 33 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.5983 19.3956L30.3418 2.65823M14.0742 20.1483L17.8709 27.7416C18.7884 29.5766 19.2471 30.4941 19.825 30.7401C20.3266 30.9536 20.8999 30.915 21.3682 30.6361C21.9079 30.3147 22.2394 29.344 22.9023 27.4025L30.0759 6.39424C30.6535 4.70254 30.9423 3.8567 30.7446 3.29716C30.5727 2.81038 30.1898 2.42748 29.703 2.2555C29.1434 2.05781 28.2976 2.34663 26.6059 2.92429L5.59768 10.0978C3.65617 10.7608 2.68542 11.0923 2.36406 11.6319C2.08518 12.1003 2.04654 12.6736 2.26005 13.1751C2.50608 13.753 3.42357 14.2118 5.25856 15.1293L12.8518 18.9259C13.1542 19.0771 13.3054 19.1527 13.4364 19.2537C13.5526 19.3433 13.6569 19.4475 13.7465 19.5638C13.8474 19.6948 13.923 19.8459 14.0742 20.1483Z"
                  stroke="#442AE6"
                  stroke-width="4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="flex flex-col">
              <p class="mt-4 text-2xl font-bold leading-3">15</p>
              <p class="mt-4 text-xs font-medium">Friend Request Sent</p>
            </div>
          </div>
        </div>
        <div
          class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
          <h2 class="font-bold mb-5 text-secondary text-lg">
            Friend Requests
            <span
              class="text-[0.7rem] ml-4 rounded-full scale-90 border-2 border-secondary py-1.5 px-2.5"
              >3</span
            >
          </h2>
          <div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 gap-6">
            <div
              class="border-2 relative border-secondary rounded-2xl py-1 2xl:py-3 px-4"
            >
              <div class="flex items-center gap-2 5">
                <img src="../assets/images/avatar_1.png" alt="" />
                <div>
                  <div class="flex items-center gap-1.5">
                    <h3 class="text-black font-medium text-lg">John Doe</h3>
                    <img src="../assets/images/badge.png" alt="" />
                  </div>
                  <div class="flex items-center gap-1">
                    <img
                      src="../assets/images/coins.png"
                      class="max-w-[20px]"
                      alt=""
                    />
                    <span class="text-[0.6rem] text-accent">60 coins</span>
                  </div>
                </div>
              </div>
              <div
                class="flex items-center gap-4 absolute right-4 top-[50%] translate-y-[-50%]"
              >
                <span class="cursor-pointer">
                  <img src="../assets/images/green-stroke.png" alt="" />
                </span>
                <span class="cursor-pointer">
                  <img src="../assets/images/red-stroke.png" alt="" />
                </span>
              </div>
            </div>
            <div
              class="border-2 relative border-secondary rounded-2xl py-1 2xl:py-3 px-4"
            >
              <div class="flex items-center gap-2 5">
                <img src="../assets/images/avatar_1.png" alt="" />
                <div>
                  <div class="flex items-center gap-1.5">
                    <h3 class="text-black font-medium text-lg">John Doe</h3>
                    <img src="../assets/images/badge.png" alt="" />
                  </div>
                  <div class="flex items-center gap-1">
                    <img
                      src="../assets/images/coins.png"
                      class="max-w-[20px]"
                      alt=""
                    />
                    <span class="text-[0.6rem] text-accent">60 coins</span>
                  </div>
                </div>
              </div>
              <div
                class="flex items-center gap-4 absolute right-4 top-[50%] translate-y-[-50%]"
              >
                <span class="cursor-pointer">
                  <img src="../assets/images/green-stroke.png" alt="" />
                </span>
                <span class="cursor-pointer">
                  <img src="../assets/images/red-stroke.png" alt="" />
                </span>
              </div>
            </div>
            <div
              class="border-2 relative border-secondary rounded-2xl py-1 2xl:py-3 px-4"
            >
              <div class="flex items-center gap-2 5">
                <img src="../assets/images/avatar_1.png" alt="" />
                <div>
                  <div class="flex items-center gap-1.5">
                    <h3 class="text-black font-medium text-lg">John Doe</h3>
                    <img src="../assets/images/badge.png" alt="" />
                  </div>
                  <div class="flex items-center gap-1">
                    <img
                      src="../assets/images/coins.png"
                      class="max-w-[20px]"
                      alt=""
                    />
                    <span class="text-[0.6rem] text-accent">60 coins</span>
                  </div>
                </div>
              </div>
              <div
                class="flex items-center gap-4 absolute right-4 top-[50%] translate-y-[-50%]"
              >
                <span class="cursor-pointer">
                  <img src="../assets/images/green-stroke.png" alt="" />
                </span>
                <span class="cursor-pointer">
                  <img src="../assets/images/red-stroke.png" alt="" />
                </span>
              </div>
            </div>
          </div>
        </div>
        <div
          class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
          <div class="flex items-center justify-between">
            <h2 class="font-bold text-secondary text-lg">Friends</h2>
            <a
              href="view-all-friends.html"
              class="font-bold underline text-sm"
              >View All</a
            >
          </div>
          <div class="lg:px-16 grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-5 gap-5">
            <a
              href="#"
              class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
            >
              <img
                src="../assets/images/avatar_1.png"
                class="rounded-full w-[40px]"
                alt=""
              />
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                  <div class="flex items-center gap-1.5">
                    <img
                      src="../assets/images/coins.png"
                      class="w-[17px]"
                      alt=""
                    />
                    <p class="text-xs text-accent">60 coins</p>
                  </div>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="#442ae6"
                  class="w-4 h-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </div>
            </a>
            <a
              href="#"
              class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
            >
              <img
                src="../assets/images/avatar_3.png"
                class="rounded-full w-[40px]"
                alt=""
              />
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                  <div class="flex items-center gap-1.5">
                    <img
                      src="../assets/images/coins.png"
                      class="w-[17px]"
                      alt=""
                    />
                    <p class="text-xs text-accent">60 coins</p>
                  </div>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="#442ae6"
                  class="w-4 h-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </div>
            </a>
            <a
              href="#"
              class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
            >
              <img
                src="../assets/images/avatar_2.png"
                class="rounded-full w-[40px]"
                alt=""
              />
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                  <div class="flex items-center gap-1.5">
                    <img
                      src="../assets/images/coins.png"
                      class="w-[17px]"
                      alt=""
                    />
                    <p class="text-xs text-accent">60 coins</p>
                  </div>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="#442ae6"
                  class="w-4 h-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </div>
            </a>
            <a
              href="#"
              class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
            >
              <img
                src="../assets/images/avatar_2.png"
                class="rounded-full w-[40px]"
                alt=""
              />
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                  <div class="flex items-center gap-1.5">
                    <img
                      src="../assets/images/coins.png"
                      class="w-[17px]"
                      alt=""
                    />
                    <p class="text-xs text-accent">60 coins</p>
                  </div>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="#442ae6"
                  class="w-4 h-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </div>
            </a>
            <a
              href="#"
              class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
            >
              <img
                src="../assets/images/avatar_2.png"
                class="rounded-full w-[40px]"
                alt=""
              />
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                  <div class="flex items-center gap-1.5">
                    <img
                      src="../assets/images/coins.png"
                      class="w-[17px]"
                      alt=""
                    />
                    <p class="text-xs text-accent">60 coins</p>
                  </div>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="#442ae6"
                  class="w-4 h-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </div>
            </a>
            <a
              href="#"
              class="border-2 px-4 py-3.5 border-[#EFEEFC] rounded-3xl inline-flex items-center gap-3"
            >
              <img
                src="../assets/images/avatar_2.png"
                class="rounded-full w-[40px]"
                alt=""
              />
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">John Doe</h3>
                  <div class="flex items-center gap-1.5">
                    <img
                      src="../assets/images/coins.png"
                      class="w-[17px]"
                      alt=""
                    />
                    <p class="text-xs text-accent">60 coins</p>
                  </div>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="#442ae6"
                  class="w-4 h-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
      @include('widgets.footer')
</div>
@endsection