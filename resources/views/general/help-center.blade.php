@extends('widgets.app')
@section('content')
<div class="w-full lg:pl-[7.75rem]">
    @include('widgets.head')
    <div class="container-main pb-14">
        <div
          class="shadow-[0px_4px_15px_rgba(9,67,111,0.15)] bg-white rounded-xl mt-20 p-5 py-10"
        >
          <div class="flex md:flex-row flex-col items-start sm:pl-4 gap-8">
            <div class="md:w-5/12 lg:w-4/12">
              <h2 class="font-bold text-xl mb-2">FAQ's</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed
                do eiusmod tempor incididunt dolor sit amet.
              </p>
              <!-- FAQS -->
              <div id="accordionExample">
                <!-- ACCORDION 1 -->
                <div
                  class="bg-white shadow-[0px_6px_30px_20px_rgba(0,0,0,0.03)] rounded-xl mt-3"
                >
                  <h2 class="mb-0" id="headingOne">
                    <button
                      class="group accordion-button relative flex items-center w-full py-4 px-5 text-base text-left bg-white border-0 rounded-xl transition focus:outline-none text-[#616161] collapsed"
                      type="button"
                      data-te-collapse-init
                      data-te-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      Accordion Item #1
                      <span
                        class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                          />
                        </svg>
                      </span>
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="!visible"
                    data-te-collapse-item
                    data-te-collapse-show
                    aria-labelledby="headingOne"
                    data-te-parent="#accordionExample"
                  >
                    <div class="py-4 px-5">
                      <strong
                        >This is the first item's accordion body.</strong
                      >
                      It is shown by default, until the collapse plugin adds
                      the appropriate classes that we use to style each
                      element. These classes control the overall appearance,
                      as well as the showing and hiding via CSS transitions.
                      You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just
                      about any HTML can go within the
                      <code>.accordion-body</code>, though the transition does
                      limit overflow.
                    </div>
                  </div>
                </div>
                <!-- ACCORDION 2 -->
                <div
                  class="bg-white shadow-[0px_6px_30px_20px_rgba(0,0,0,0.03)] rounded-xl mt-3"
                >
                  <h2 class="mb-0" id="headingTwo">
                    <button
                      class="group accordion-button relative flex items-center w-full py-4 px-5 text-base text-left bg-white border-0 rounded-xl transition focus:outline-none text-[#616161] collapsed"
                      type="button"
                      data-te-collapse-init
                      data-te-collapse-collapsed
                      data-te-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Accordion Item #2
                      <span
                        class="ml-auto -mr-1 h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                          />
                        </svg>
                      </span>
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="!visible hidden"
                    data-te-collapse-item
                    aria-labelledby="headingTwo"
                    data-te-parent="#accordionExample"
                  >
                    <div class="py-4 px-5">
                      <strong
                        >This is the second item's accordion body.</strong
                      >
                      It is hidden by default, until the collapse plugin adds
                      the appropriate classes that we use to style each
                      element. These classes control the overall appearance,
                      as well as the showing and hiding via CSS transitions.
                      You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just
                      about any HTML can go within the
                      <code>.accordion-body</code>, though the transition does
                      limit overflow.
                    </div>
                  </div>
                </div>
                <!-- ACCORDION 3 -->
                <div
                  class="bg-white shadow-[0px_6px_30px_20px_rgba(0,0,0,0.03)] rounded-xl mt-3"
                >
                  <h2 class="mb-0" id="headingThree">
                    <button
                      class="group accordion-button relative flex items-center w-full py-4 px-5 text-base text-left bg-white border-0 rounded-xl transition focus:outline-none text-[#616161] collapsed"
                      type="button"
                      data-te-collapse-init
                      data-te-collapse-collapsed
                      data-te-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      Accordion Item #2
                      <span
                        class="ml-auto -mr-1 h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                          />
                        </svg>
                      </span>
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="!visible hidden"
                    data-te-collapse-item
                    aria-labelledby="headingThree"
                    data-te-parent="#accordionExample"
                  >
                    <div class="py-4 px-5">
                      <strong
                        >This is the second item's accordion body.</strong
                      >
                      It is hidden by default, until the collapse plugin adds
                      the appropriate classes that we use to style each
                      element. These classes control the overall appearance,
                      as well as the showing and hiding via CSS transitions.
                      You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just
                      about any HTML can go within the
                      <code>.accordion-body</code>, though the transition does
                      limit overflow.
                    </div>
                  </div>
                </div>
                <!-- ACCORDION 4 -->
                <div
                  class="bg-white shadow-[0px_6px_30px_20px_rgba(0,0,0,0.03)] rounded-xl mt-3"
                >
                  <h2 class="mb-0" id="headingFour">
                    <button
                      class="group accordion-button relative flex items-center w-full py-4 px-5 text-base text-left bg-white border-0 rounded-xl transition focus:outline-none text-[#616161] collapsed"
                      type="button"
                      data-te-collapse-init
                      data-te-collapse-collapsed
                      data-te-target="#collapseFour"
                      aria-expanded="false"
                      aria-controls="collapseFour"
                    >
                      Accordion Item #2
                      <span
                        class="ml-auto -mr-1 h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                          />
                        </svg>
                      </span>
                    </button>
                  </h2>
                  <div
                    id="collapseFour"
                    class="!visible hidden"
                    data-te-collapse-item
                    aria-labelledby="headingFour"
                    data-te-parent="#accordionExample"
                  >
                    <div class="py-4 px-5">
                      <strong
                        >This is the second item's accordion body.</strong
                      >
                      It is hidden by default, until the collapse plugin adds
                      the appropriate classes that we use to style each
                      element. These classes control the overall appearance,
                      as well as the showing and hiding via CSS transitions.
                      You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just
                      about any HTML can go within the
                      <code>.accordion-body</code>, though the transition does
                      limit overflow.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="md:w-7/12 lg:w-8/12 text-justify">
              <h2 class="font-bold text-xl mb-2">How to Play</h2>
              <p class="mb-3 mt-1">
                Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed
                do eiusmod tempor incididunt dolor sit amet.Lorem ipsum dolor
                sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                incididunt dolor sit amet.Lorem ipsum dolor sit amet,
                consectetur adip iscing elit, sed do eiusmod tempor incididunt
                dolor sit amet.Lorem ipsum dolor sit amet, consectetur adip
                iscing elit, sed do eiusmod tempor incididunt dolor sit
                amet.Lorem ipsum dolor sit amet, consectetur adip iscing elit,
                sed do eiusmod tempor incididunt dolor sit amet.
              </p>
              <p class="mb-3 mt-1">
                Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed
                do eiusmod tempor incididunt dolor sit amet.Lorem ipsum dolor
                sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                incididunt dolor sit amet.Lorem ipsum dolor sit amet,
                consectetur adip iscing elit, sed do eiusmod tempor incididunt
                dolor sit amet.Lorem ipsum dolor sit amet, consectetur adip
                iscing elit, sed do eiusmod tempor incididunt dolor sit
                amet.Lorem ipsum dolor sit amet, consectetur adip iscing elit,
                sed do eiusmod tempor incididunt dolor sit amet.
              </p>
              <p class="mb-3 mt-1">
                Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed
                do eiusmod tempor incididunt dolor sit amet.Lorem ipsum dolor
                sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                incididunt dolor sit amet.Lorem ipsum dolor sit amet,
                consectetur adip iscing elit, sed do eiusmod tempor incididunt
                dolor sit amet.Lorem ipsum dolor sit amet, consectetur adip
                iscing elit, sed do eiusmod tempor incididunt dolor sit
                amet.Lorem ipsum dolor sit amet, consectetur adip iscing elit,
                sed do eiusmod tempor incididunt dolor sit amet.
              </p>
            </div>
          </div>
          <form class="lg:pl-10 flex flex-col items-center">
            <h3 class="font-medium text-lg mt-5 mb-4 self-start">
              Give Feedback
            </h3>
            <textarea
              class="border border-gray-300 rounded-3xl w-full placeholder:text-gray-400 p-5"
              placeholder="Type Feedback"
              name=""
              id=""
              cols="30"
              rows="7"
            ></textarea>
            <button
              type="submit"
              class="bg-secondary py-2.5 w-full max-w-[350px] rounded-2xl text-white mt-5"
            >
              Send
            </button>
          </form>
        </div>
      </div>
      @include('widgets.footer')
</div>
@endsection