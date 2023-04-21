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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/output.css" />
    <title>Choose a role</title>
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
        <span></span>
    </div>
    <div class="container z-20 max-h-[900px] pb-2 mt-10">
        <div
            class="bg-white overflow-hidden shadow-[0px_72px_80px_-48px_#312872] rounded-xl flex justify-center items-center"
        >
            <div
                class="w-full h-full login-screen transition-all flex py-16 px-10 flex-col items-center justify-center"
            >
                <h2 class="text-xl font-medium text001833]">Choose a Role</h2>
                <p class="mt-3 text-xs">this "Choose Role" is for "LOGIN</p>
                <div class="flex sm:flex-row flex-col gap-5 mt-20">
                    <a
                        href="{{route('loginChild')}}"
                        class="py-10 flex flex-col items-center justify-center rounded-lg text-center px-14 shadow-[0px_4px_10px_5px_rgba(0,0,0,0.05)]"
                    >
                        <img src="assets/images/child.png" alt="" />
                        <h3 class="text-xl font-medium text001833]">Child</h3>
                        <p class="text-xs">(Under 18)</p>
                    </a>
                    <a
                        href="{{route('showLogin')}}"
                        class="py-10 flex flex-col items-center justify-center rounded-lg text-center px-14 shadow-[0px_4px_10px_5px_rgba(0,0,0,0.05)]"
                    >
                        <img src="assets/images/parents.png" alt="" />
                        <h3 class="text-xl font-medium text001833] mt-3">Adult</h3>
                        <p class="text-xs">(18+)</p>
                    </a>
                </div>
                <a
                    href="{{route('showRegister')}}"
                    class="text-xl text-center font-medium mt-20 w-full max-w-[400px] bg-secondary text-white rounded-xl py-2.5"
                >Signup</a
                >
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
<script src="js/aside.js"></script>
</body>
</html>
