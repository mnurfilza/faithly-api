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
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/output.css" />
    <title>Payment | Faithly</title>
  </head>

  <body class="">
    <div
      class="bg-primary relative h-full 2xl:py-10 py-5 flex flex-col justify-center items-center pb-32"
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
        <img src="./assets/images/Faithly-logo.png" />
        <img src="./assets/images/info.png" />
      </div>
      <div class="container-main z-20 max-h-full pb-2 mt-10 mb-10">
        <div
          class="bg-secondary mb-16 overflow-hidden shadow-[0px_72px_80px_-48px_#312872] rounded-xl flex justify-center items-center"
        >
          <div
            class="w-full h-auto bg-white Signup-screen transition-all flex flex-col"
          >
            <h2 class="text-accent text-center font-medium text-xl pt-10">
              Contribute @ Faithly
            </h2>
            <p class="mt-3 text-[#242323] text-center text-sm px-3">
              Your support helps us share God's truth and hope in Christ Jesus.
              Thank You!”
            </p>
            <div
              class="flex items-center justify-center gap-5 w-full mt-8 pb-10"
            >
              <p class="underline text-xs sm:text-sm md:text-base">
                Billing Cycle:
              </p>
              <div class="flex gap-3 items-center">
                <p class="text-xs sm:text-sm md:text-base">Monthly</p>
                <label class="switch">
                  <input class="slider-input" type="checkbox"  />
                  <span class="slider round"></span>
                </label>
                <p class="text-xs sm:text-sm md:text-base">
                  Yearly <br />
                  (SAVE 10%)
                </p>
              </div>
            </div>
            <div class="card">
              <div class="monthly" >
               
                @include('monthly_payment', array('monthly'=>$monthly))
              </div>

              <div class="yearly" hidden>
                @include('yearly_payment',array('yearly'=>$yearly))
              </div>
            </div>
            
            <p class="text-center text-sm mt-2 mb-8 px-3">
              By logging in or creating an account, you are agreeing to our <br>
              <a href="" class="text-secondary font-semibold">Terms of Use</a>
              and
              <a href="" class="text-secondary font-semibold"
                >Privacy Policy</a
              >
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets//images/oval-left.png"
        class="absolute top-0 left-0 z-0"
        alt=""
      />
      <img
        src="./assets//images/oval-right.png"
        class="absolute bottom-0 z-0 right-0"
        alt=""
      />
    </div>

    <script>
      const quantityInput = document.getElementById("quantity");
      const incrementButton = document.getElementById("increment");
      const decrementButton = document.getElementById("decrement");

      const quantityInputOrg = document.getElementById("quantityOrg");
      const incrementButtonOrg = document.getElementById("incrementOrg");
      const decrementButtonOrg = document.getElementById("decrementOrg");

      const sliderInput = document.querySelector(".slider-input");

      const yearlyComponent = document.querySelector('.yearly');
      const monthlyComponent = document.querySelector('.monthly');

      //change plan subscription
      sliderInput.addEventListener('change',()=>{

        if (!sliderInput.checked) {
          yearlyComponent.setAttribute("hidden", true);
          monthlyComponent.removeAttribute("hidden");
        }else{
          console.log('change');
          monthlyComponent.setAttribute("hidden", true);
          yearlyComponent.removeAttribute("hidden");
        }

      })
      // ADD USER
      incrementButton.addEventListener("click", () => {
        const currentValue = parseInt(quantityInput.value);
        const newValue = currentValue + 1;
        quantityInput.value =
          newValue > 0 && newValue <= 2 ? newValue : currentValue;
      });

      decrementButton.addEventListener("click", () => {
        const currentValue = parseInt(quantityInput.value);
        const newValue = currentValue - 1;
        quantityInput.value =
          newValue > 0 && newValue <= 2 ? newValue : currentValue;
      });
      // ADD USER

      incrementButtonOrg.addEventListener("click", () => {
        const currentValue = parseInt(quantityInputOrg.value);
        const newValue = currentValue + 1;
        quantityInputOrg.value =
          newValue > 0 && newValue <= 5 ? newValue : currentValue;
      });

      decrementButtonOrg.addEventListener("click", () => {
        const currentValue = parseInt(quantityInputOrg.value);
        const newValue = currentValue - 1;
        quantityInputOrg.value =
          newValue > 0 && newValue <= 5 ? newValue : currentValue;
      });
      quantityInput.disabled = true;
      quantityInputOrg.disabled = true;
    </script>
    <script src="js/aside.js"></script>
  </body>
</html>
