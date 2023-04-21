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
    <title>Signup | Faithly</title>
</head>

<body class="a">
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
    <div class="container z-20 max-h-full pb-20 pt-10">
        <div
            class="bg-secondary overflow-hidden shadow-[0px_72px_80px_-48px_#312872] rounded-xl flex justify-center items-center"
        >
            <!-- Signup -->
            <div
                class="w-full h-full Signup-screen transition-all flex items-center"
            >
                <!-- LEFT COLUMN -->
                <div class="w-full md:w-6/12 lg:w-5/12 bg-white h-full px-10 pb-10 pt-7 flex flex-col justify-center"
                >
                    <h2 class="2xl:text-2xl text-xl font-sec mb-5  font-semibold text-center">
                        Signup
                    </h2>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <label for="email">Name</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Type Your Name"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="name"
                                id="name1"
                                name="fullname"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 1H4C2.34315 1 1 2.34315 1 4V14C1 15.6569 2.34315 17 4 17H16C17.6569 17 19 15.6569 19 14V4C19 2.34315 17.6569 1 16 1Z" stroke="#6A5AE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z" stroke="#6A5AE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 5H15M13 9H15M5 13H15" stroke="#6A5AE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                  </span>
                        </div>
                        <label for="email">Email Address</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Your email address"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="email"
                                id="email"
                                name="email"
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
                        <label for="email">Mobile Number</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Enter mobile number"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="text"
                                id="mobile"
                                name="phone_number"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#6A5AE0" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>

                  </span>
                        </div>
                        <label for="email">Year of Birth</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Type Your age"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="text"
                                id="age1"
                                name="year_of_birth"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 0.5C11.9283 0.5 12.8185 0.868749 13.4749 1.52513C14.1313 2.1815 14.5 3.07174 14.5 4C14.5 4.92826 14.1313 5.8185 13.4749 6.47487C12.8185 7.13125 11.9283 7.5 11 7.5C10.0717 7.5 9.1815 7.13125 8.52513 6.47487C7.86875 5.8185 7.5 4.92826 7.5 4C7.5 3.07174 7.86875 2.1815 8.52513 1.52513C9.1815 0.868749 10.0717 0.5 11 0.5ZM4 3C4.56 3 5.08 3.15 5.53 3.42C5.38 4.85 5.8 6.27 6.66 7.38C6.16 8.34 5.16 9 4 9C3.20435 9 2.44129 8.68393 1.87868 8.12132C1.31607 7.55871 1 6.79565 1 6C1 5.20435 1.31607 4.44129 1.87868 3.87868C2.44129 3.31607 3.20435 3 4 3ZM18 3C18.7956 3 19.5587 3.31607 20.1213 3.87868C20.6839 4.44129 21 5.20435 21 6C21 6.79565 20.6839 7.55871 20.1213 8.12132C19.5587 8.68393 18.7956 9 18 9C16.84 9 15.84 8.34 15.34 7.38C16.2119 6.25442 16.6166 4.8362 16.47 3.42C16.92 3.15 17.44 3 18 3ZM4.5 13.25C4.5 11.18 7.41 9.5 11 9.5C14.59 9.5 17.5 11.18 17.5 13.25V15H4.5V13.25ZM-1 15V13.5C-1 12.11 0.89 10.94 3.45 10.6C2.86 11.28 2.5 12.22 2.5 13.25V15H-1ZM23 15H19.5V13.25C19.5 12.22 19.14 11.28 18.55 10.6C21.11 10.94 23 12.11 23 13.5V15Z" fill="#6A5AE0"/>
                        </svg>
                  </span>
                        </div>
                        <label for="email">Username</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Type Your Username"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="text"
                                id="Username1"
                                name="username"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 5V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H5M1 13V15C1 15.5304 1.21071 16.0391 1.58579 16.4142C1.96086 16.7893 2.46957 17 3 17H5M13 1H15C15.5304 1 16.0391 1.21071 16.4142 1.58579C16.7893 1.96086 17 2.46957 17 3V5M13 17H15C15.5304 17 16.0391 16.7893 16.4142 16.4142C16.7893 16.0391 17 15.5304 17 15V13M6 7H6.01M12 7H12.01M6.5 12C6.82588 12.3326 7.21485 12.5968 7.64413 12.7772C8.07341 12.9576 8.53436 13.0505 9 13.0505C9.46564 13.0505 9.92659 12.9576 10.3559 12.7772C10.7852 12.5968 11.1741 12.3326 11.5 12" stroke="#6A5AE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                  </span>
                            <img src="assets/images/green-tick.png" class="absolute top-[50%] translate-y-[-50%] right-6" alt="">
                        </div>
                        <label for="email">Password</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Type Your Password"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="text"
                                id="Password1"
                                name="password"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.125 1.25C12.2466 1.2498 11.3804 1.45535 10.5958 1.85019C9.81115 2.24503 9.12991 2.81818 8.60666 3.5237C8.08342 4.22922 7.73271 5.0475 7.58264 5.91296C7.43257 6.77842 7.48732 7.66701 7.7425 8.5075L1.25 15V18.75H5L11.4925 12.2575C12.2662 12.4923 13.0814 12.5576 13.8826 12.4489C14.6838 12.3402 15.4522 12.06 16.1353 11.6275C16.8184 11.195 17.4003 10.6203 17.8412 9.94256C18.2822 9.26483 18.5718 8.5 18.6904 7.70021C18.8091 6.90041 18.7539 6.08444 18.5286 5.3079C18.3033 4.53137 17.9133 3.81252 17.3851 3.20035C16.8569 2.58818 16.203 2.09708 15.4678 1.76051C14.7326 1.42394 13.9335 1.24981 13.125 1.25ZM13.125 11.25C12.6947 11.2498 12.2668 11.1862 11.855 11.0612L11.1381 10.8438L10.6088 11.3731L8.62063 13.3612L7.75875 12.5L6.875 13.3837L7.73687 14.2456L6.74563 15.2369L5.88375 14.375L5 15.2587L5.86187 16.1206L4.4825 17.5H2.5V15.5175L8.62625 9.39125L9.15625 8.86188L8.93875 8.145C8.67161 7.26437 8.68897 6.32193 8.98834 5.45173C9.28772 4.58153 9.85388 3.82789 10.6063 3.29802C11.3587 2.76814 12.259 2.48901 13.1792 2.50033C14.0994 2.51165 14.9926 2.81285 15.7317 3.36107C16.4708 3.9093 17.0183 4.67664 17.2961 5.55394C17.574 6.43124 17.5682 7.37382 17.2795 8.24761C16.9907 9.12141 16.4338 9.88191 15.688 10.4209C14.9421 10.96 14.0453 11.2501 13.125 11.25Z" fill="#6A5AE0"/>
                        <path d="M13.75 7.5C14.4404 7.5 15 6.94036 15 6.25C15 5.55964 14.4404 5 13.75 5C13.0596 5 12.5 5.55964 12.5 6.25C12.5 6.94036 13.0596 7.5 13.75 7.5Z" fill="#6A5AE0"/>
                        </svg>
                  </span>
                        </div>
                        <label for="email">Confirm Password</label>
                        <div class="relative mb-2.5">
                            <input
                                placeholder="Confirm Password"
                                class="block border placeholder:text-[#DADADA] mt-2 py-2.5 pl-16 w-full rounded-2xl"
                                type="password"
                                id="Password2"
                                name="confirm_password"
                            />
                            <span class="absolute top-[50%] translate-y-[-50%] left-6">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.125 1.25C12.2466 1.2498 11.3804 1.45535 10.5958 1.85019C9.81115 2.24503 9.12991 2.81818 8.60666 3.5237C8.08342 4.22922 7.73271 5.0475 7.58264 5.91296C7.43257 6.77842 7.48732 7.66701 7.7425 8.5075L1.25 15V18.75H5L11.4925 12.2575C12.2662 12.4923 13.0814 12.5576 13.8826 12.4489C14.6838 12.3402 15.4522 12.06 16.1353 11.6275C16.8184 11.195 17.4003 10.6203 17.8412 9.94256C18.2822 9.26483 18.5718 8.5 18.6904 7.70021C18.8091 6.90041 18.7539 6.08444 18.5286 5.3079C18.3033 4.53137 17.9133 3.81252 17.3851 3.20035C16.8569 2.58818 16.203 2.09708 15.4678 1.76051C14.7326 1.42394 13.9335 1.24981 13.125 1.25ZM13.125 11.25C12.6947 11.2498 12.2668 11.1862 11.855 11.0612L11.1381 10.8438L10.6088 11.3731L8.62063 13.3612L7.75875 12.5L6.875 13.3837L7.73687 14.2456L6.74563 15.2369L5.88375 14.375L5 15.2587L5.86187 16.1206L4.4825 17.5H2.5V15.5175L8.62625 9.39125L9.15625 8.86188L8.93875 8.145C8.67161 7.26437 8.68897 6.32193 8.98834 5.45173C9.28772 4.58153 9.85388 3.82789 10.6063 3.29802C11.3587 2.76814 12.259 2.48901 13.1792 2.50033C14.0994 2.51165 14.9926 2.81285 15.7317 3.36107C16.4708 3.9093 17.0183 4.67664 17.2961 5.55394C17.574 6.43124 17.5682 7.37382 17.2795 8.24761C16.9907 9.12141 16.4338 9.88191 15.688 10.4209C14.9421 10.96 14.0453 11.2501 13.125 11.25Z" fill="#6A5AE0"/>
                        <path d="M13.75 7.5C14.4404 7.5 15 6.94036 15 6.25C15 5.55964 14.4404 5 13.75 5C13.0596 5 12.5 5.55964 12.5 6.25C12.5 6.94036 13.0596 7.5 13.75 7.5Z" fill="#6A5AE0"/>
                        </svg>
                  </span>
                        </div>
                        <button
                            type="submit"
                            class="bg-secondary text-center mt-10 hover:bg-[#6f43ff] transition-all active:bg-[#6f43ff] font-medium text-white rounded-xl py-2.5 w-full"
                        >
                            Signup
                        </button>
                    </form>
                    <a
                        href="{{route('showLogin')}}"
                        class="text-center hover:bg-gray-50 transition-all font-medium text-dark active:bg-gray-50 rounded-xl py-2.5 w-full mt-10 mb-5"
                    >Already have an account <span class="text-secondary">Login</span></a
                    >
                    <p class="text-center">
                        By logging in or creating an account, you are agreeing to our
                        <a href="" class="text-secondary font-semibold">Terms of Use</a>
                        and
                        <a href="" class="text-secondary font-semibold"
                        >Privacy Policy</a
                        >
                    </p>
                </div>
                <!-- RIGHT COLUMN -->
                <div class="md:w-6/12 lg:w-7/12 bg-secondary h-full  md:flex hidden justify-center items-center"
                >
                    <img
                        class="w-full max-w-[400px] p-5 fade-in-left-right"
                        src="./assets/images/parent-login.png"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
    <img
        src="assets/images/oval-left.png"
        class="absolute top-0 left-0 z-0"
        alt=""
    />
    <img
        src="assets/images/oval-right.png"
        class="absolute bottom-0 z-0 right-0"
        alt=""
    />
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
