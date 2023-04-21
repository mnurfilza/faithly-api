<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&family=Rubik:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>



    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/output.css" />

    <title>Login | Faithly</title>
</head>

<body>

<div
    class="bg-primary relative h-full 2xl:py-10 py-5 flex flex-col justify-center items-center"
>


    <!-- TOP BAR -->
    <div
        class="flex container relative z-20 items-center justify-between w-full"
    >
        <a href="#" class="bg-secondary p-2.5 rounded-full">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
            >
                <path
                    d="M6.875 14.8885L0.275 8.28846C0.175 8.18846 0.104 8.08013 0.0619998 7.96346C0.0206665 7.84679 0 7.72179 0 7.58846C0 7.45513 0.0206665 7.33013 0.0619998 7.21346C0.104 7.09679 0.175 6.98846 0.275 6.88846L6.875 0.288461C7.05833 0.105128 7.28733 0.00912821 7.562 0.00046154C7.83733 -0.00753846 8.075 0.0884612 8.275 0.288461C8.475 0.471795 8.57933 0.700795 8.588 0.975461C8.596 1.25079 8.5 1.48846 8.3 1.68846L3.4 6.58846H14.575C14.8583 6.58846 15.096 6.68413 15.288 6.87546C15.4793 7.06746 15.575 7.30513 15.575 7.58846C15.575 7.87179 15.4793 8.10913 15.288 8.30046C15.096 8.49246 14.8583 8.58846 14.575 8.58846H3.4L8.3 13.4885C8.48333 13.6718 8.57933 13.9051 8.588 14.1885C8.596 14.4718 8.5 14.7051 8.3 14.8885C8.11667 15.0885 7.88333 15.1885 7.6 15.1885C7.31667 15.1885 7.075 15.0885 6.875 14.8885Z"
                    fill="#fff"
                />
            </svg>
        </a>
        <img src="assets/images/Faithly-logo.png" />
        <img src="assets/images/info.png" />
    </div>
    <div class="container z-20 max-h-[900px] pb-2 mt-10">
        <div
            class="bg-secondary overflow-hidden shadow-[0px_72px_80px_-48px_#312872] rounded-xl flex justify-center items-center"
        >
            <!-- LOGIN -->
            <div
                class="w-full h-full login-screen transition-all flex items-center"
            >
                <!-- LEFT COLUMN -->
                <div
                    class="w-full md:w-6/12 lg:w-5/12 bg-white h-full px-10 pb-10 pt-7 flex flex-col justify-center"
                >
                    <h2 class="2xl:text-2xl text-xl font-sec font-bold self-start">
                        Login
                    </h2>
                    <div class="w-full">
                        <button
                            class="bg-white border hover:bg-gray-50 transition-all active:bg-gray-50 w-full rounded-2xl justify-center py-2.5 mt-5 flex items-center gap-3"
                        >
                            <img src="assets/images/Google_Logo.png" alt="" />
                            <span class="font-semibold text-sm md:text-base">Login with Google</span>
                        </button>
                        <button
                            class="bg-white border hover:bg-gray-50 transition-all active:bg-gray-50 w-full rounded-2xl justify-center py-2.5 mt-3 flex items-center gap-3"
                        >
                            <img src="assets/images/Facebook_Logo.png" alt="" />
                            <span class="font-semibold text-sm md:text-base">Login with Facebook</span>
                        </button>
                    </div>
                    <span class="text-center my-9">OR</span>

                    <form action="/login" method="POST">
                        {{ csrf_field() }}

                        <label for="email">Email Address</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Your email address"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="email"
                                id="username"
                                name="username"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="16"
                        viewBox="0 0 20 16"
                        fill="none"
                    >
                      <path
                          d="M20 2C20 0.9 19.1 0 18 0H2C0.9 0 0 0.9 0 2V14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2ZM18 2L10 7L2 2H18ZM18 14H2V4L10 9L18 4V14Z"
                          fill="#6A5AE0"
                      />
                    </svg>
                  </span>
                        </div>
                        <label for="password">Password</label>
                        <div class="relative">
                            <input
                                placeholder="Your Password"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="password"
                                id="password"
                                name="password"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="21"
                        viewBox="0 0 16 21"
                        fill="none"
                    >
                      <path
                          d="M2.49935 20.1666C1.99518 20.1666 1.56374 19.9873 1.20502 19.6285C0.845682 19.2692 0.666016 18.8375 0.666016 18.3333V9.16663C0.666016 8.66246 0.845682 8.23071 1.20502 7.87138C1.56374 7.51265 1.99518 7.33329 2.49935 7.33329H3.41602V5.49996C3.41602 4.2319 3.86304 3.15085 4.7571 2.25679C5.65054 1.36335 6.73129 0.916626 7.99935 0.916626C9.2674 0.916626 10.3485 1.36335 11.2425 2.25679C12.136 3.15085 12.5827 4.2319 12.5827 5.49996V7.33329H13.4993C14.0035 7.33329 14.4353 7.51265 14.7946 7.87138C15.1533 8.23071 15.3327 8.66246 15.3327 9.16663V18.3333C15.3327 18.8375 15.1533 19.2692 14.7946 19.6285C14.4353 19.9873 14.0035 20.1666 13.4993 20.1666H2.49935ZM2.49935 18.3333H13.4993V9.16663H2.49935V18.3333ZM7.99935 15.5833C8.50352 15.5833 8.93527 15.4039 9.2946 15.0452C9.65332 14.6859 9.83268 14.2541 9.83268 13.75C9.83268 13.2458 9.65332 12.814 9.2946 12.4547C8.93527 12.096 8.50352 11.9166 7.99935 11.9166C7.49518 11.9166 7.06374 12.096 6.70502 12.4547C6.34568 12.814 6.16602 13.2458 6.16602 13.75C6.16602 14.2541 6.34568 14.6859 6.70502 15.0452C7.06374 15.4039 7.49518 15.5833 7.99935 15.5833ZM5.24935 7.33329H10.7493V5.49996C10.7493 4.73607 10.482 4.08676 9.94727 3.55204C9.41254 3.01732 8.76324 2.74996 7.99935 2.74996C7.23546 2.74996 6.58615 3.01732 6.05143 3.55204C5.51671 4.08676 5.24935 4.73607 5.24935 5.49996V7.33329ZM2.49935 18.3333V9.16663V18.3333Z"
                          fill="#6A5AE0"
                      />
                    </svg>
                  </span>
                            <span
                                class="toggle-pw cursor-pointer absolute top-[50%] translate-y-[-50%] right-3 p-2"
                            >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="10"
                        viewBox="0 0 16 10"
                        fill="none"
                    >
                      <path
                          d="M7.99935 1.33333C9.22517 1.32926 10.4273 1.67119 11.4674 2.31982C12.5076 2.96845 13.3436 3.89744 13.8793 5C12.7793 7.24667 10.5327 8.66667 7.99935 8.66667C5.46602 8.66667 3.21935 7.24667 2.11935 5C2.65509 3.89744 3.4911 2.96845 4.53127 2.31982C5.57143 1.67119 6.77353 1.32926 7.99935 1.33333ZM7.99935 0C4.66602 0 1.81935 2.07333 0.666016 5C1.81935 7.92667 4.66602 10 7.99935 10C11.3327 10 14.1793 7.92667 15.3327 5C14.1793 2.07333 11.3327 0 7.99935 0ZM7.99935 3.33333C8.44138 3.33333 8.8653 3.50893 9.17786 3.82149C9.49042 4.13405 9.66602 4.55797 9.66602 5C9.66602 5.44203 9.49042 5.86595 9.17786 6.17851C8.8653 6.49107 8.44138 6.66667 7.99935 6.66667C7.55732 6.66667 7.1334 6.49107 6.82084 6.17851C6.50828 5.86595 6.33268 5.44203 6.33268 5C6.33268 4.55797 6.50828 4.13405 6.82084 3.82149C7.1334 3.50893 7.55732 3.33333 7.99935 3.33333ZM7.99935 2C6.34602 2 4.99935 3.34667 4.99935 5C4.99935 6.65333 6.34602 8 7.99935 8C9.65268 8 10.9993 6.65333 10.9993 5C10.9993 3.34667 9.65268 2 7.99935 2Z"
                          fill="#9e94eb"
                      />
                    </svg>
                  </span>
                        </div>
                        <button
                            type="submit"
                            class="bg-secondary text-center mt-10 hover:bg-[#6f43ff] transition-all active:bg-[#6f43ff] font-medium text-white rounded-xl py-2.5 w-full"
                        >
                            Login
                        </button>
                    </form>
                    <a
                        href="{{url('showRegister')}}"
                        class="text-center mt-4 hover:bg-gray-50 transition-all font-medium text-secondary active:bg-gray-50 rounded-xl py-2.5 w-full"
                    >Forgot password?</a
                    >
                    <p class="text-center mt-12">
                        By logging in or creating an account, you are agreeing to our
                        <a href="" class="text-secondary font-semibold">Terms of Use</a>
                        and
                        <a href="" class="text-secondary font-semibold"
                        >Privacy Policy</a
                        >
                    </p>
                </div>
                <!-- RIGHT COLUMN -->
                <div
                    class="md:w-6/12 lg:w-7/12 bg-secondary h-full md:flex hidden justify-center items-center"
                >
                    <img
                        class="w-full max-w-[500px] p-6 fade-in-left-right"
                        src="assets/images/parent-login.png"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
    <img
        src="assets//images/oval-left.png"
        class="absolute top-0 left-0 z-0"
        alt=""
    />
    <img
        src="assets//images/oval-right.png"
        class="absolute bottom-0 z-0 right-0"
        alt=""
    />
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script defer>
    const togglePw = document.querySelector(".toggle-pw");
    const pwInput = document.querySelector("#password");

    togglePw.addEventListener("click", () => {
        pwInput.type === "password"
            ? (pwInput.type = "text")
            : (pwInput.type = "password");
    });
</script>
@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>
        toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.error('{{\Illuminate\Support\Facades\Session::get('error')}}');
    </script>
    @php
        \Illuminate\Support\Facades\Session::forget('error')
    @endphp
@endif
<script src="js/aside.js"></script>
</body>
</html>
