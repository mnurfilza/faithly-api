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
    <title>Verification | Faithly App</title>
</head>

<body class="2xl:h-full relative">
<div
    class="bg-primary relative z-[1000] h-full 2xl:py-10 py-5 flex flex-col justify-center items-center"
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
    <div class="container relative z-20 max-h-[900px] pb-2 mt-10">
        <div
            class="bg-secondary overflow-hidden shadow-[0px_72px_80px_-48px_#312872] rounded-xl flex justify-center items-center"
        >
            <!-- VERIFICATION -->
            <div
                class="w-full h-full login-screen transition-all flex items-center"
            >
                <!-- LEFT COLUMN -->
                <div
                    class="w-full md:w-6/12 lg:w-5/12 bg-white h-full px-10 pb-10 pt-7 flex flex-col justify-center"
                >
                    <h2 class="2xl:text-2xl text-xl font-sec font-bold text-center">
                        Security
                    </h2>
                    <p class="mt-7 text-sm text-center">
                        Enter your secured passcode and year of birth to login and learn
                        more wisdom from the Bible.
                    </p>
                    <form action="" class="mt-10">
                        <div
                            class="flex flex-wrap gap-2 lg:gap-0 items-center max-w-[300px] mx-auto md:max-w-none justify-between mb-4"
                        >
                            <input
                                id="key_1"
                                class="border border-gray-300 KEYS_ text-center w-8 lg:w-12 rounded h-9"
                                type="text"
                                maxlength="1"
                            />
                            <input
                                id="key_2"
                                class="border border-gray-300 KEYS_ text-center w-8 lg:w-12 rounded h-9"
                                type="text"
                                maxlength="1"
                            />
                            <input
                                id="key_3"
                                class="border border-gray-300 KEYS_ text-center w-8 lg:w-12 rounded h-9"
                                type="text"
                                maxlength="1"
                            />
                            <input
                                id="key_4"
                                class="border border-gray-300 KEYS_ text-center w-8 lg:w-12 rounded h-9"
                                type="text"
                                maxlength="1"
                            />
                            <input
                                id="key_5"
                                class="border border-gray-300 KEYS_ text-center w-8 lg:w-12 rounded h-9"
                                type="text"
                                maxlength="1"
                            />
                            <input
                                id="key_6"
                                class="border border-gray-300 KEYS_ text-center w-8 lg:w-12 rounded h-9"
                                type="text"
                                maxlength="1"
                            />
                        </div>
                        <label>Year of Birth</label>
                        <input
                            class="block placeholder:text-[#DADADA] border border-gray-300 KEYS_ mt-2 py-2.5 px-5 w-full rounded-2xl"
                            type="date"
                            id="date-input"
                            name="date"
                        />
                        <button
                            type="submit"
                            class="bg-secondary text-center mt-20 hover:bg-[#6f43ff] transition-all active:bg-[#6f43ff] font-medium text-white rounded-xl py-2.5 w-full"
                        >
                            Login
                        </button>
                    </form>
                    <!-- <a
                      href="./signup.html"
                      class="text-center mt-4 hover:bg-gray-50 transition-all text-primary font-medium active:bg-gray-50 rounded-xl py-2.5 w-full"
                      >Forgot password?</a
                    > -->
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
                    class="md:w-6/12 lg:w-7/12 bg-secondary h-full md:flex hidden  justify-center items-center"
                >
                    <img
                        class="w-full max-w-[500px] fade-in-left-right"
                        src="assets/images/kid-studying.png"
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

<script defer>
    var inputs = Array.from(document.querySelectorAll(".KEYS_"));
    inputs?.forEach(function (input) {
        input?.addEventListener("keyup", function (event) {
            if (event?.key === "Backspace") {
                var currentIndex = inputs?.findIndex(
                    (input) => input === event?.target
                );
                setTimeout(() => inputs[currentIndex - 1]?.focus(), 70);
            } else {
                var currentIndex = inputs?.findIndex(
                    (input) => input === event?.target
                );
                setTimeout(() => inputs[currentIndex + 1]?.focus(), 70);
            }
        });
    });

    document.getElementById("date-input").addEventListener("focus", () => {
        document.getElementById("date-input").showPicker();
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
