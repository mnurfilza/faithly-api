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
            <div class="flex items-center mt-3 sm:mt-0">
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
            class="flex gap-5 items-center py-5 rounded-xl pl-4 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
          >
            <img
              src="../assets/images/group-user.png"
              class="max-w-[100px]"
              alt=""
            />
            <div class="flex flex-col">
              <p class="mt-4 text-3xl font-bold leading-3">10</p>
              <p class="mt-4 text-xs font-semibold">Total Users</p>
            </div>
          </div>
          <div
            class="flex gap-5 items-center py-5 rounded-xl pl-4 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
          >
            <img
              src="../assets/images/group-tq.png"
              class="max-w-[100px]"
              alt=""
            />
            <div class="flex flex-col">
              <p class="mt-4 text-3xl font-bold leading-3">400</p>
              <p class="mt-4 text-xs font-semibold">
                Total Questions Answered
              </p>
            </div>
          </div>
          <div
            class="flex gap-5 items-center py-5 rounded-xl pl-4 pr-8 shadow-[0px_4px_15px_rgba(9,67,111,0.15)]"
          >
            <img
              src="../assets/images/group-tt.png"
              class="max-w-[100px]"
              alt=""
            />
            <div class="flex flex-col">
              <p class="mt-4 text-3xl font-bold leading-3">10</p>
              <p class="mt-4 text-xs font-semibold">Total Tasks</p>
            </div>
          </div>
        </div>
        <div
          class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
          <div class="flex items-center justify-between">
            <h2 class="font-bold text-secondary text-lg">Group users</h2>
            <a
              href="view-all-friends.html"
              class="font-bold underline text-sm"
              >View All</a
            >
          </div>
          <div class="lg:px-16 grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-5 gap-5">
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
                <span
                  class="block rounded-full py-2 px-5 text-xs bg-[#36d228] text-white"
                  >Group Leader</span
                >
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
        <div
          class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
          <div class="flex items-center justify-between">
            <h2 class="font-bold text-secondary text-lg">Group Tasks</h2>
            <a
              href="view-all-friends.html"
              class="font-bold underline text-sm"
              >View All</a
            >
          </div>
          <div class="lg:px-16 grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-5 gap-5">
            <a
              href="task-detail.html"
              class="px-4 py-3.5 bg-[#efeefc] justify-between rounded-3xl inline-flex items-center gap-3"
            >
              <p class="font-semibold">Task Number 01</p>
              <img
                class="max-w-[50px]"
                src="../assets/images/where-to-find-help.png"
                alt=""
              />
            </a>
            <a
              href="task-detail.html"
              class="px-4 py-3.5 bg-[#efeefc] justify-between rounded-3xl inline-flex items-center gap-3"
            >
              <p class="font-semibold">Task Number 01</p>
              <img
                class="max-w-[50px]"
                src="../assets/images/where-to-find-help.png"
                alt=""
              />
            </a>
            <a
              href="task-detail.html"
              class="px-4 py-3.5 bg-[#efeefc] justify-between rounded-3xl inline-flex items-center gap-3"
            >
              <p class="font-semibold">Task Number 01</p>
              <img
                class="max-w-[50px]"
                src="../assets/images/where-to-find-help.png"
                alt=""
              />
            </a>
            <a
              href="task-detail.html"
              class="px-4 py-3.5 bg-[#efeefc] justify-between rounded-3xl inline-flex items-center gap-3"
            >
              <p class="font-semibold">Task Number 01</p>
              <img
                class="max-w-[50px]"
                src="../assets/images/where-to-find-help.png"
                alt=""
              />
            </a>
            <a
              href="task-detail.html"
              class="px-4 py-3.5 bg-[#efeefc] justify-between rounded-3xl inline-flex items-center gap-3"
            >
              <p class="font-semibold">Task Number 01</p>
              <img
                class="max-w-[50px]"
                src="../assets/images/where-to-find-help.png"
                alt=""
              />
            </a>
            <a
              href="task-detail.html"
              class="px-4 py-3.5 bg-[#efeefc] justify-between rounded-3xl inline-flex items-center gap-3"
            >
              <p class="font-semibold">Task Number 01</p>
              <img
                class="max-w-[50px]"
                src="../assets/images/where-to-find-help.png"
                alt=""
              />
            </a>
          </div>
        </div>
        <div
          class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] my-7 rounded-lg p-5"
        >
          <div class="flex items-center justify-between">
            <h2 class="font-bold text-secondary text-lg">Group Questions</h2>
          </div>
          <div class="lg:px-16 grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-5 gap-5">
            <a
              href="#"
              class="px-4 py-3.5 border-secondary border-2 rounded-3xl inline-flex items-center gap-3"
            >
              <div
                class="bg-[#def4ff] py-1.5 px-3.5 rounded-full text-sm text-secondary"
              >
                1
              </div>
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">Question No 1</h3>
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
              class="px-4 py-3.5 border-secondary border-2 rounded-3xl inline-flex items-center gap-3"
            >
              <div
                class="bg-[#def4ff] py-1.5 px-3.5 rounded-full text-sm text-secondary"
              >
                1
              </div>
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">Question No 1</h3>
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
              class="px-4 py-3.5 border-secondary border-2 rounded-3xl inline-flex items-center gap-3"
            >
              <div
                class="bg-[#def4ff] py-1.5 px-3.5 rounded-full text-sm text-secondary"
              >
                1
              </div>
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">Question No 1</h3>
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
              class="px-4 py-3.5 border-secondary border-2 rounded-3xl inline-flex items-center gap-3"
            >
              <div
                class="bg-[#def4ff] py-1.5 px-3.5 rounded-full text-sm text-secondary"
              >
                1
              </div>
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">Question No 1</h3>
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
              class="px-4 py-3.5 border-secondary border-2 rounded-3xl inline-flex items-center gap-3"
            >
              <div
                class="bg-[#def4ff] py-1.5 px-3.5 rounded-full text-sm text-secondary"
              >
                1
              </div>
              <div class="flex items-center justify-between w-full">
                <div>
                  <h3 class="font-semibold text-lg mb-1">Question No 1</h3>
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