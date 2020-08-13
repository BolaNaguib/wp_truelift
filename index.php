<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>

</head>

<body>
    <div>
        <nav class="bg-secondary py-4">
            <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/">
                                <span class="text-4xl font-black text-gray-800">TRUELIFT</span>
                                <!-- <img src="//cdn.shopify.com/s/files/1/0055/1426/4679/files/logo.png?v=1554287495" alt="autima-theme" itemprop="logo" class="img-responsive logo"> -->
                            </a>
                        </div>

                    </div>
                    <div class="hidden md:block">
                        <a class="bg-main text-white hover:bg-black transition duration-300 ease-in-out hover:text-secondary rounded shadow py-2 px-4" href="#">Contact Us</a>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!--
      Mobile menu, toggle classes based on menu state.

      Open: "block", closed: "hidden"
    -->
            <div class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 sm:px-3">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>
                    <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Team</a>
                    <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Projects</a>
                    <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Calendar</a>
                    <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Reports</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="mt-1 text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                    </div>
                    <div class="mt-3 px-2">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Your Profile</a>
                        <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Settings</a>
                        <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    <!-- Icons Section -->
    <div class="container mx-auto mt-12 px-2">
        <div class="grid border rounded px-4 py-8 gap-4 lg:grid-cols-4 divide-y lg:divide-x lg:divide-y-0 divide-gray-200">
            <a href="#" class="-m-3 p-3 flex items-center space-x-4 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="h-8 text-secondary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-shipping-fast fa-w-20">
                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z" class=""></path>
                </svg>
                <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                        Free Shipping
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                        Free shipping on all US order
                    </p>
                </div>
            </a>
            <a href="#" class="-m-3 p-3 flex items-center space-x-4 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="h-8 text-secondary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="redo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-redo fa-w-16">
                    <path fill="currentColor" d="M500.33 0h-47.41a12 12 0 0 0-12 12.57l4 82.76A247.42 247.42 0 0 0 256 8C119.34 8 7.9 119.53 8 256.19 8.1 393.07 119.1 504 256 504a247.1 247.1 0 0 0 166.18-63.91 12 12 0 0 0 .48-17.43l-34-34a12 12 0 0 0-16.38-.55A176 176 0 1 1 402.1 157.8l-101.53-4.87a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12h200.33a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12z" class=""></path>
                </svg>
                <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                        Support 24/7
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                        Contact us 24 hours a day


                    </p>
                </div>
            </a>
            <a href="#" class="-m-3 p-3 flex items-center space-x-4 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="h-8 text-secondary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="money-bill-wave" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-money-bill-wave fa-w-20">
                    <path fill="currentColor" d="M621.16 54.46C582.37 38.19 543.55 32 504.75 32c-123.17-.01-246.33 62.34-369.5 62.34-30.89 0-61.76-3.92-92.65-13.72-3.47-1.1-6.95-1.62-10.35-1.62C15.04 79 0 92.32 0 110.81v317.26c0 12.63 7.23 24.6 18.84 29.46C57.63 473.81 96.45 480 135.25 480c123.17 0 246.34-62.35 369.51-62.35 30.89 0 61.76 3.92 92.65 13.72 3.47 1.1 6.95 1.62 10.35 1.62 17.21 0 32.25-13.32 32.25-31.81V83.93c-.01-12.64-7.24-24.6-18.85-29.47zM48 132.22c20.12 5.04 41.12 7.57 62.72 8.93C104.84 170.54 79 192.69 48 192.69v-60.47zm0 285v-47.78c34.37 0 62.18 27.27 63.71 61.4-22.53-1.81-43.59-6.31-63.71-13.62zM320 352c-44.19 0-80-42.99-80-96 0-53.02 35.82-96 80-96s80 42.98 80 96c0 53.03-35.83 96-80 96zm272 27.78c-17.52-4.39-35.71-6.85-54.32-8.44 5.87-26.08 27.5-45.88 54.32-49.28v57.72zm0-236.11c-30.89-3.91-54.86-29.7-55.81-61.55 19.54 2.17 38.09 6.23 55.81 12.66v48.89z" class=""></path>
                </svg>
                <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">

                        100% Money Back
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                        You have 30 days to Return
                    </p>
                </div>
            </a>
            <a href="#" class="-m-3 p-3 flex items-center space-x-4 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="h-8 text-secondary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="life-ring" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-life-ring fa-w-16">
                    <path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm173.696 119.559l-63.399 63.399c-10.987-18.559-26.67-34.252-45.255-45.255l63.399-63.399a218.396 218.396 0 0 1 45.255 45.255zM256 352c-53.019 0-96-42.981-96-96s42.981-96 96-96 96 42.981 96 96-42.981 96-96 96zM127.559 82.304l63.399 63.399c-18.559 10.987-34.252 26.67-45.255 45.255l-63.399-63.399a218.372 218.372 0 0 1 45.255-45.255zM82.304 384.441l63.399-63.399c10.987 18.559 26.67 34.252 45.255 45.255l-63.399 63.399a218.396 218.396 0 0 1-45.255-45.255zm302.137 45.255l-63.399-63.399c18.559-10.987 34.252-26.67 45.255-45.255l63.399 63.399a218.403 218.403 0 0 1-45.255 45.255z" class=""></path>
                </svg>
                <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                        Payment Secure
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                        We ensure secure payment
                    </p>
                </div>
            </a>
        </div>
    </div>


    <!-- Testimonials Section -->
    <div class="container mx-auto mt-12 px-2">
        <h2 class="title-border relative mb-8">
            <span class="bg-white pr-4 font-semibold">WHAT OUR CLIENTS SAY</span>
        </h2>
        <div class="grid lg:grid-cols-3 gap-6">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="rounded border p-4 text-center">
                    <img class="inline-block" src="https://mrfixitdoors.com/wp-content/uploads/2020/03/mrfixit-logo-1_05a45e6ca140b9922ae2c5958bcacd25.png" alt="" title="mrfixit-logo-1_05a45e6ca140b9922ae2c5958bcacd25">
                    <h4 class="pt-2 pb-4 text-lg font-semibold">Great Store</h4>
                    <a class="text-base pb-2 block" href="#">
                        Sed vel urna at dui iaculis gravida. Maecenas pretium, velit vitae placerat faucibus, velit quam facilisis elit, sit amet lacinia est est id ligula. Duis feugi.
                    </a>
                    <p class="text-sm text-gray-600">
                        Max Verstappen
                    </p>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- footer section -->
    <footer class="container mx-auto mt-12 px-2">
        <div class="grid lg:grid-cols-4 gap-6  divide-y lg:divide-x lg:divide-y-0 divide-gray-200">
            <div class="text-sm text-gray-600">
                <span class="text-4xl font-black text-gray-800 mb-2 block">TRUELIFT</span>
                <p class="mb-2">
                    We are a team of designers and developers that create high quality premium Shopify themes.
                </p>
                <span class="text-lg font-bold text-gray-800">Address:</span>
                <p class="mb-2">169-C, Technohub, Dubai</p>
            </div>

            <div class="text-sm text-gray-600 lg:pl-4">
                <span class="text-lg font-bold text-gray-800 mb-2 block" style="line-height: 3;">Main Menu</span>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>

                </ul>

            </div>
            <div class="text-sm text-gray-600 lg:pl-4">
                <span class="text-lg font-bold text-gray-800 mb-2 block" style="line-height: 3;">Main Menu</span>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>

                </ul>

            </div>
            <div class="text-sm text-gray-600 lg:pl-4">
                <span class="text-lg font-bold text-gray-800 mb-2 block" style="line-height: 3;">Reach US</span>


                <span class="text-lg font-bold text-gray-800">Call Us:</span>
                <p class="mb-2">(012) 800 456 789</p>
                <span class="text-lg font-bold text-gray-800">Mail us:</span>
                <p class="mb-2">support@masstechnologist.com</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>

</body>

</html>