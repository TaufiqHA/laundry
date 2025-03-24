<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cleany</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <!-- navbar start -->
    <div class="navbar fixed bg-base-100 shadow-sm z-10">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16"
              />
            </svg>
          </div>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow"
          >
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#testimony">TESTIMONY</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
        <a href="#home" class="btn btn-ghost text-2xl text-teal-500">Cleany</a>
      </div>
      <div id="desk_menu" class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 gap-3 font-semibold text-lg">
          <li>
            <a href="#home">Home</a>
          </li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#testimony">Testimony</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <a
          href="#services"
          class="btn btn-md bg-teal-500 text-white rounded-full"
        >
          Book Now
        </a>
      </div>
    </div>
    <!-- navbar end -->

    <!-- hero section start -->
    <section id="home" class="min-h-screen flex justify-center items-center">
      <div
        class="container flex flex-col lg:flex-row justify-center items-center gap-50"
      >
        <div class="flex flex-col gap-7 px-5">
          <h2 class="text-3xl lg:text-[90px] font-bold">
            Professional <span class="block">Laundry Service</span>
          </h2>
          <p class="lg:w-xl text-md lg:text-lg font-semibold text-gray-500">
            Experiense the freshness of perfecly cleaned clothes with our
            premium laundry service
          </p>
          <a href="#services"
            class="btn btn-lg w-xs mx-auto lg:mx-0 font-semibold bg-teal-500 rounded-full text-white mt-5"
          >
            Book Now
          </a>
        </div>
        <div class="hidden lg:block">
          <img src="img/laundry animation.png" alt="laundry animation" />
        </div>
      </div>
    </section>
    <!-- hero section end -->

    <!-- about section start -->
    <section id="about" class="py-20">
      <div class="container mx-auto">
        <div class="w-full flex flex-col justify-center items-center gap-4">
          <h2 class="text-2xl font-bold lg:text-4xl">About Us</h2>
          <p class="text-sm lg:text-lg mb-5 font-semibold text-gray-500">
            Providing quality laundry services since 2020
          </p>
        </div>
        <div class="flex flex-col lg:flex-row p-4 gap-5">
          <div
            class="card bg-transparent shadow-md shadow-gray-300 text-black w-80 lg:w-full mx-auto"
          >
            <div class="card-body items-center text-center">
              <i data-feather="star"></i>
              <h2 class="card-title">Quality Services</h2>
              <p>Premium cleaning with attention to detail</p>
            </div>
          </div>
          <div
            class="card bg-transparent shadow-md shadow-gray-300 text-black w-80 lg:w-full mx-auto"
          >
            <div class="card-body items-center text-center">
              <i data-feather="clock"></i>
              <h2 class="card-title">Fast Turnaround</h2>
              <p>24-hour service for your convenience</p>
            </div>
          </div>
          <div
            class="card bg-transparent shadow-md shadow-gray-300 text-black w-80 lg:w-full mx-auto"
          >
            <div class="card-body items-center text-center">
              <i data-feather="feather"></i>
              <h2 class="card-title">Eco-Freandly</h2>
              <p>Sustainable cleaning solutions</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- services section start -->
    <section id="services" class="py-20 mt-20">
      <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center gap-5">
          <h2 class="text-2xl lg:text-4xl font-bold">Our Services</h2>
          <p class="text-sm lg:text-lg font-semibold text-gray-500 mb-5">
            Comprehensive laundry solutions for all you needs
          </p>
        </div>
        <div
          class="mt-10 flex flex-col items-center lg:flex-row lg:justify-around gap-5 lg:gap-3"
        >
          <div class="card w-full bg-base-100 shadow-md">
            <div class="card-body">
              <span class="badge badge-xs badge-warning">Most Popular</span>
              <div class="flex justify-between">
                <h2 class="text-xl font-bold">Wash & Fold</h2>
                <span class="text-lg">From $2.50/lb</span>
              </div>
              <p>Regular laundry service with perfect folding</p>
              <div class="mt-6">
                <button class="btn bg-teal-400 btn-block">Booking</button>
              </div>
            </div>
          </div>
          <div class="card w-full bg-base-100 shadow-md">
            <div class="card-body">
              <div class="flex justify-between">
                <h2 class="text-xl font-bold">Dry Cleaning</h2>
                <span class="text-lg">From $6/item</span>
              </div>
              <p>Professional care for delicate graments</p>
              <div class="mt-6">
                <button class="btn bg-teal-400 btn-block">Booking</button>
              </div>
            </div>
          </div>
          <div class="card w-full bg-base-100 shadow-md">
            <div class="card-body">
              <div class="flex justify-between">
                <h2 class="text-xl font-bold">Home Textiles</h2>
                <span class="text-lg">From $15/item</span>
              </div>
              <p>Cleaning for curtains, rugs and more</p>
              <div class="mt-6">
                <button class="btn bg-teal-400 btn-block">Booking</button>
              </div>
            </div>
          </div>
          <div class="card w-full bg-base-100 shadow-md">
            <div class="card-body">
              <div class="flex justify-between">
                <h2 class="text-xl font-bold">Ironing</h2>
                <span class="text-lg">From $3/item</span>
              </div>
              <p>Professional pressing services</p>
              <div class="mt-6">
                <button class="btn bg-teal-400 btn-block">Booking</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- services section end -->

    <!-- testimony section start -->
    <section class="py-20 mt-20" id="testimony">
      <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center gap-5">
          <h2 class="text-2xl lg:text-4xl font-bold">What Our Customers Say</h2>
          <p class="text-sm lg:text-lg font-semibold text-gray-500 mb-5">
            Real freedback from satisfied clients
          </p>
        </div>
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-0 lg:justify-around">
          <div
            class="max-w-xs lg:max-w-lg mx-auto py-2 lg:py-3 px-3 lg:px-4 mt-10 shadow-lg"
          >
            <!-- header -->
            <div class="flex items-center gap-5">
              <div class="avatar">
                <div class="w-13 lg:w-20 rounded-full">
                  <img
                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                  />
                </div>
              </div>
              <div>
                <h2 class="text-md font-semibold">Sarah Johson</h2>
                <p>Regular Customer</p>
              </div>
            </div>
            <!-- body -->
            <div class="max-w-xs mt-5">
              <p class="text-sm lg:text-md text-gray-500">
                "The best laundry service i've ever used. My clothes always come
                back perfectly clean and neatly folded"
              </p>
            </div>
          </div>
          <div
            class="max-w-xs lg:max-w-lg mx-auto py-2 lg:py-3 px-3 lg:px-4 mt-10 shadow-lg"
          >
            <!-- header -->
            <div class="flex items-center gap-5">
              <div class="avatar">
                <div class="w-13 lg:w-20 rounded-full">
                  <img
                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                  />
                </div>
              </div>
              <div>
                <h2 class="text-md font-semibold">Michael Chen</h2>
                <p>Business Professional</p>
              </div>
            </div>
            <!-- body -->
            <div class="max-w-xs mt-5">
              <p class="text-sm lg:text-md text-gray-500">
                "Their dry cleaning service is exceptional. My suits always look
                impeccable after they handle them."
              </p>
            </div>
          </div>
          <div
            class="max-w-xs lg:max-w-lg mx-auto py-2 lg:py-3 px-3 lg:px-4 mt-10 shadow-lg"
          >
            <!-- header -->
            <div class="flex items-center gap-5">
              <div class="avatar">
                <div class="w-13 lg:w-20 rounded-full">
                  <img
                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                  />
                </div>
              </div>
              <div>
                <h2 class="text-md font-semibold">Emma Davis</h2>
                <p>Homeowner</p>
              </div>
            </div>
            <!-- body -->
            <div class="max-w-xs mt-5">
              <p class="text-sm lg:text-md text-gray-500">
                "I love their Eco-Freandly apporach and the convenient pickup
                and delivery service. Hughly recomended."
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- testimony section end -->

    <!-- contact section start -->
    <section id="contact" class="py-20 mt-20">
      <div class="container mx-auto">
        <!-- header start -->
        <div class="flex flex-col gap-5 justify-center items-center">
          <h2 class="text-2xl font-bold lg:text-4xl">Contact us</h2>
          <p class="text-md lg:text-lg font-semibold text-gray-500 mb-5">
            Get in touch with our friendly team
          </p>
        </div>
        <!-- header end -->
        <!-- body start -->
        <div class="flex flex-col lg:flex-row gap-5 lg:justify-center mt-5">
          <div>
            <fieldset
              class="fieldset mx-auto w-xs lg:w-2xl bg-gray-100 border border-base-300 p-4 lg:p-7 rounded-box"
            >
              <label class="fieldset-label lg:text-lg">Name</label>
              <input
                type="text"
                class="input lg:w-full rounded-md mb-2"
                placeholder="Name"
              />

              <label class="fieldset-label lg:text-lg">Eamil</label>
              <input
                type="email"
                class="input lg:w-full rounded-md mb-2"
                placeholder="Eamil"
              />

              <label class="fieldset-label lg:text-lg">Message</label>
              <textarea
                class="textarea lg:w-full rounded-md"
                placeholder="Message"
              ></textarea>

              <button class="btn bg-teal-400 text-white mt-4">
                Send Message
              </button>
            </fieldset>
          </div>
          <div>
            <fieldset
              class="fieldset mx-auto w-xs lg:w-2xl h-full bg-gray-100 border border-base-300 p-4 lg:p-7 rounded-box gap-5"
            >
              <div>
                <h2 class="text-xl font-bold">Location</h2>
                <div class="flex gap-2 items-center">
                  <i data-feather="map-pin" class="w-4"></i>
                  <p
                    class="text-md font-semibold text-gray-500 lg:text-lg lg:font-normal"
                  >
                    123 Laundry Street, City, State 12345
                  </p>
                </div>
              </div>
              <div>
                <h2 class="text-xl font-bold">Contact Info</h2>
                <div class="flex gap-2 items-center">
                  <i data-feather="phone" class="w-4"></i>
                  <p
                    class="text-md font-semibold text-gray-500 lg:text-lg lg:font-normal"
                  >
                    (555) 123-4567
                  </p>
                </div>
                <div class="flex gap-2 items-center">
                  <i data-feather="mail" class="w-4"></i>
                  <p
                    class="text-md font-semibold text-gray-500 lg:text-lg lg:font-normal"
                  >
                    info@cleany.com
                  </p>
                </div>
              </div>
              <div>
                <h2 class="text-xl font-bold mb-2">Business Hours</h2>
                <p
                  class="text-md font-semibold text-gray-500 lg:text-lg lg:font-normal mb-2"
                >
                  Monday - Friday : 7:00 AM - 9:00 PM
                </p>
                <p
                  class="text-md font-semibold text-gray-500 lg:text-lg lg:font-nomral mb-2"
                >
                  Saturday : 8:00 AM - 7:00 PM
                </p>
                <p
                  class="text-md font-semibold text-gray-500 lg:text-lg lg:font-normal mb-2"
                >
                  Sunday : 9:00 AM - 5:00 PM
                </p>
              </div>
            </fieldset>
          </div>
        </div>
        <!-- body end -->
      </div>
    </section>
    <!-- contact section end -->

    <!-- footer section start -->
    <footer
      class="footer footer-horizontal footer-center bg-teal-500 text-primary-content p-10"
    >
      <aside>
        <svg
          width="50"
          height="50"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          fill-rule="evenodd"
          clip-rule="evenodd"
          class="inline-block fill-current"
        >
          <path
            d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"
          ></path>
        </svg>
        <p class="font-bold">
          Cleany
          <br />
          Experiense the freshness of perfecly cleaned clothes with our premium
          laundry service
        </p>
        <p>Copyright © {new Date().getFullYear()} - All right reserved</p>
      </aside>
      <nav>
        <div class="grid grid-flow-col gap-4">
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
              ></path>
            </svg>
          </a>
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path
                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
              ></path>
            </svg>
          </a>
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path
                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
              ></path>
            </svg>
          </a>
        </div>
      </nav>
    </footer>
    <!-- footer section end -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
