<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ env("APP_NAME", "Laravel") }}</title>

        @vite("resources/css/app.css")

        {{-- Icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css" />

        {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

        {{-- Swiper CSS1 JS1 --}}
        <link rel="stylesheet" href="{{ asset("css/swiper-bundle.min.css") }}" />
    </head>
    <body class="bg-gray-100">
        <header class="sticky top-0 z-30 h-[90px] bg-white shadow-xl">
            <div class="container mx-auto flex h-full items-center justify-between">
                {{-- Logi --}}
                <a href="#">
                    <img src="{{ asset("images/logo.svg") }}" />
                </a>

                {{-- nav --}}
                <nav>
                    {{-- nav mobild trigger --}}
                    <div class="cursor-pointer lg:hidden" id="nav_trigger_btn">
                        <i class="ri-menu-4-line text-4xl text-primary"></i>
                    </div>
                    <ul class="fixed inset-x-0 top-[90px] flex h-0 w-full flex-col gap-4 overflow-hidden border-t bg-white p-0 transition-all duration-300 lg:relative lg:top-0 lg:h-full lg:flex-row lg:border-none lg:p-0" id="nav_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Our Work</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        {{-- Page Wrapper --}}
        <main class="mx-auto max-w-[1920px] overflow-hidden bg-white">
            {{-- Grid Img --}}
            {{-- <div class="xl:bg-grid xl:bg-center xl:bg-repeat-y fixed inset-0 z-10"></div> --}}
            {{-- Hero --}}
            <section class="hero relative z-20 h-[640px] bg-hero bg-fixed bg-center bg-no-repeat lg:bg-cover xl:h-[840px] xl:rounded-bl-[290px]">
                <div class="container mx-auto flex h-full items-center justify-center xl:justify-start">
                    <div class="hero__text flex w-[567px] flex-col items-center text-center lg:items-start xl:text-left">
                        <h1 class="h1 mb-8">Let Your Home Be Unique</h1>
                        <p class="mb-8">There are many variations of the passages of lorem Ipsum from available,variations of the passages.</p>
                        <button class="btn btn-primary mx-auto xl:mx-0">
                            Get free estimation
                            <i class="ri-arrow-right-line text-accent"></i>
                        </button>
                    </div>
                </div>
            </section>

            {{-- Steps --}}
            <section class="steps relative z-20 mt-[80px] xl:mt-[200px]">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-12 xl:grid-cols-3">
                        {{-- Step 1 --}}
                        <div class="steps__step text-center">
                            <div class="mb-4">
                                <i class="ri-compasses-2-line text-5xl text-accent"></i>
                            </div>
                            <h3 class="h3 mb-5">Project Planning</h3>
                            <p class="mx-auto mb-5 max-w-md">There are many variations of the passages of lorem Ipsum from available, majority.</p>
                            <a href="#" class="flex justify-center gap-2 font-medium">
                                Read More
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        {{-- Step 2 --}}
                        <div class="steps__step text-center">
                            <div class="mb-4">
                                <i class="ri-magic-line text-5xl text-accent"></i>
                            </div>
                            <h3 class="h3 mb-5">Gaining Materials</h3>
                            <p class="mx-auto mb-5 max-w-md">There are many variations of the passages of lorem Ipsum from available, majority.</p>
                            <a href="#" class="flex justify-center gap-2 font-medium">
                                Read More
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        {{-- Step 3 --}}
                        <div class="steps__step text-center">
                            <div class="mb-4">
                                <i class="ri-tools-line text-5xl text-accent"></i>
                            </div>
                            <h3 class="h3 mb-5">Project Execution</h3>
                            <p class="mx-auto mb-5 max-w-md">There are many variations of the passages of lorem Ipsum from available, majority.</p>
                            <a href="#" class="flex justify-center gap-2 font-medium">
                                Read More
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- About --}}
            <section class="about rleative z-20 mt-[80px] xl:mt-[200px]">
                <div class="container mx-auto xl:px-0">
                    <div class="flex flex-col items-center justify-between gap-8 text-center xl:flex-row xl:gap-[74px] xl:text-left">
                        {{-- Text --}}
                        <div class="about__text order-2 flex max-w-xl flex-1 flex-col items-center gap-8 xl:order-none xl:max-w-[410px] xl:items-start">
                            <h2 class="h2">We Create The Art Of Stylish Living Stylishly</h2>
                            <p>It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using that it has a more-or-less normal.</p>
                            {{-- Phone --}}
                            <div class="flex items-center justify-center gap-4 xl:justify-start">
                                <div class="flex h-[93px] w-[93px] items-center justify-center rounded-full bg-accent/15">
                                    <i class="ri-phone-fill text-4xl text-accent"></i>
                                </div>
                                <div class="text-left">
                                    <div class="text-2xl font-bold">09777557034</div>
                                    <div>Call Us Anytime</div>
                                </div>
                            </div>
                            <button class="btn btn-primary">
                                Get free estimation
                                <i class="ri-arrow-right-line text-accent"></i>
                            </button>
                        </div>

                        {{-- Image --}}
                        <div class="about__img order-1 mx-auto max-w-[453px] xl:order-none xl:mx-0 xl:max-w-none">
                            <img src="{{ asset("images/about/img.png") }}" />
                        </div>
                    </div>
                </div>
            </section>

            {{-- Testimonial --}}
            <section class="testimonial relative z-20 mt-[80px] xl:mt-[200px]">
                <div class="testimonial__bg container mx-auto rounded-[70px] bg-accent-secondary px-6">
                    <div class="flex flex-col items-center pb-[110px] pt-[88px]">
                        <h2 class="testimonial__title h2 mb-9 text-center">What clients say</h2>
                    </div>
                    {{-- Slider --}}
                    <div class="w-full">
                        <div class="testimonial__slider swiper h-[400px]">
                            <div class="swiper-wrapper">
                                {{-- Slide1 --}}
                                <div class="swiper-slide">
                                    {{-- Item --}}
                                    <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[450px] flex-col justify-center rounded-[30px] bg-white p-9">
                                        <div class="mb-6 flex gap-4">
                                            <img src="{{ asset("images/testimonial/01.png") }}" />
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                                    </div>
                                </div>

                                {{-- Slide1 --}}
                                <div class="swiper-slide">
                                    {{-- Item --}}
                                    <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[370px] flex-col justify-center rounded-[30px] bg-white p-9">
                                        <div class="mb-6 flex gap-4">
                                            <img src="{{ asset("images/testimonial/01.png") }}" />
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                                    </div>
                                </div>

                                {{-- Slide1 --}}
                                <div class="swiper-slide">
                                    {{-- Item --}}
                                    <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[370px] flex-col justify-center rounded-[30px] bg-white p-9">
                                        <div class="mb-6 flex gap-4">
                                            <img src="{{ asset("images/testimonial/01.png") }}" />
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                                    </div>
                                </div>

                                {{-- Slide4 --}}
                                <div class="swiper-slide">
                                    {{-- Item --}}
                                    <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[370px] flex-col justify-center rounded-[30px] bg-white p-9">
                                        <div class="mb-6 flex gap-4">
                                            <img src="{{ asset("images/testimonial/01.png") }}" />
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Swiper pagination --}}
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Brands --}}
            <section class="brands relative z-20 mt-[80px] xl:mt-[150px]">
                <div class="container mx-auto">
                    <div class="flex flex-col items-center justify-between gap-12 xl:flex-row">
                        <img class="brands__img" src="{{ asset("images/brands/01.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/02.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/03.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/04.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/05.svg") }}" />
                    </div>
                </div>
            </section>

            {{-- Work --}}
            <section class="work relative z-20 mt-[80px] xl:mt-[150px]">
                <div class="container mx-auto xl:px-0">
                    <div class="mb-24 text-center">
                        <h2 class="work__title h2 mb-4">Follow Our Projects</h2>
                        <p class="work__subtitle mx-auto max-w-3xl">It is a long established fact that a reader will be distracted by the of readable content of page lookings at its layouts points.</p>
                    </div>
                    {{-- Grid --}}
                    <div class="work__grid grid grid-cols-1 gap-x-[104px] gap-y-[56px] xl:grid-cols-2">
                        {{-- Item --}}
                        <div class="mx-auto h-full w-full max-w-[548px]">
                            <img class="mb-6" src="{{ asset("images/work/02.png") }}" />
                            <div class="flex w-full items-center justify-between">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="h-[70px] w-[70px] rounded-full bg-accent-secondary hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line pl-1 text-3xl text-primary"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="mx-auto h-full w-full max-w-[548px]">
                            <img class="mb-6" src="{{ asset("images/work/01.png") }}" />
                            <div class="flex w-full items-center justify-between">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="h-[70px] w-[70px] rounded-full bg-accent-secondary hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line pl-1 text-3xl text-primary"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="mx-auto h-full w-full max-w-[548px]">
                            <img class="mb-6" src="{{ asset("images/work/04.png") }}" />
                            <div class="flex w-full items-center justify-between">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="h-[70px] w-[70px] rounded-full bg-accent-secondary hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line pl-1 text-3xl text-primary"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="mx-auto h-full w-full max-w-[548px]">
                            <img class="mb-6" src="{{ asset("images/work/03.png") }}" />
                            <div class="flex w-full items-center justify-between">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="h-[70px] w-[70px] rounded-full bg-accent-secondary hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line pl-1 text-3xl text-primary"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Stats --}}
            <section class="stats relative z-20 mt-[80px] bg-accent-secondary py-[80px] xl:mt-[150px] xl:py-[150px]">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-12 xl:grid-cols-4">
                        <div class="stats__item text-center xl:border-r xl:border-accent">
                            <h3 class="h1 font-primary text-accent">12</h3>
                            <p>Years Of Experience</p>
                        </div>

                        <div class="stats__item text-center xl:border-r xl:border-accent">
                            <h3 class="h1 font-primary text-accent">85</h3>
                            <p>Projects Completed</p>
                        </div>

                        <div class="stats__item text-center xl:border-r xl:border-accent">
                            <h3 class="h1 font-primary text-accent">15</h3>
                            <p>Active Projects</p>
                        </div>

                        <div class="stats__item text-center">
                            <h3 class="h1 font-primary text-accent">95</h3>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- News --}}
            <section class="news relative z-20 mt-[80px] xl:mt-[150px]">
                <div class="container mx-auto px-0">
                    <div class="mx-auto mb-[52px] max-w-[810px] text-center">
                        <h2 class="news__title h2 mb-3">Articles & News</h2>
                        <p class="news__subtitle">It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.</p>
                    </div>
                    <div class="news__grid grid grid-cols-1 gap-[27px] xl:grid-cols-3">
                        <div class="news__item group mx-auto h-[520px] w-full max-w-[382px] cursor-pointer rounded-[62px] border border-primary/20 p-[20px] transition-all hover:bg-accent-secondary xl:mx-0">
                            <img class="mb-5" src="{{ asset("images/news/01.png") }}" />
                            <div class="flex flex-col gap-[30px]">
                                <h3 class="h3">Let’s Get Solution For Building Construction Work</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-base">22 June,2024</p>
                                    <button class="h-[52px] w-[52px] rounded-full bg-accent-secondary transition-all group-hover:bg-white">
                                        <i class="ri-arrow-right-s-line pl-1 text-3xl text-primary"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="news__item group mx-auto h-[520px] w-full max-w-[382px] cursor-pointer rounded-[62px] border border-primary/20 p-[20px] transition-all hover:bg-accent-secondary xl:mx-0">
                            <img class="mb-5" src="{{ asset("images/news/02.png") }}" />
                            <div class="flex flex-col gap-[30px]">
                                <h3 class="h3">Let’s Get Solution For Building Construction Work</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-base">22 June,2024</p>
                                    <button class="h-[52px] w-[52px] rounded-full bg-accent-secondary transition-all group-hover:bg-white">
                                        <i class="ri-arrow-right-s-line pl-1 text-3xl text-primary"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="news__item group mx-auto h-[520px] w-full max-w-[382px] cursor-pointer rounded-[62px] border border-primary/20 p-[20px] transition-all hover:bg-accent-secondary xl:mx-0">
                            <img class="mb-5" src="{{ asset("images/news/03.png") }}" />
                            <div class="flex flex-col gap-[30px]">
                                <h3 class="h3">Let’s Get Solution For Building Construction Work</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-base">22 June,2024</p>
                                    <button class="h-[52px] w-[52px] rounded-full bg-accent-secondary transition-all group-hover:bg-white">
                                        <i class="ri-arrow-right-s-line pl-1 text-3xl text-primary"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Contacts --}}
            <section class="contact relative z-20 mt-[80px] xl:mt-[150px]">
                <div class="contact__container container mx-auto bg-primary py-[80px] sm:rounded-[70px]">
                    <div class="contact__text mx-auto max-w-[640px] text-center">
                        <h2 class="h2 mb-4 text-white">Do you want to join Interno?</h2>
                        <p class="mx-auto mb-8 max-w-sm text-white xl:max-w-none">It is a long established fact will be distracted.</p>
                        <button class="btn btn-accent mx-auto">
                            Connect with us
                            <i class="ri-arrow-right-line text-primary"></i>
                        </button>
                    </div>
                </div>
            </section>

            {{-- Footer --}}
            <footer class="footer relative z-20 mt-[80px] xl:mt-[150px]">
                <div class="container mx-auto px-0">
                    <div class="flex flex-col xl:mb-[150px] xl:flex-row xl:gap-[100px]">
                        <div class="footer__item mx-auto mb-8 w-full max-w-[400px] text-center xl:text-left">
                            {{-- Logo --}}
                            <a href="#" class="mb-8 flex justify-center xl:justify-start">
                                <img src="{{ asset("images/logo.svg") }}" />
                            </a>
                            <p class="mb-8 text-xl">It is a long established fact that a reader will be distracted lookings.</p>
                            {{-- Socials --}}
                            <ul class="flex justify-center gap-[54px] text-primary xl:justify-start">
                                <li>
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-linkedin-fill"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-instagram-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-1 flex-col gap-12 text-center xl:flex-row xl:justify-end xl:gap-[100px] xl:text-left">
                            <div class="footer__item">
                                <h3 class="h3 mb-3">Pages</h3>
                                <ul class="flex flex-col gap-4">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Our Work</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <div class="footer__item">
                                <h3 class="h3 mb-3">Services</h3>
                                <ul class="flex flex-col gap-4">
                                    <li><a href="#">Kitchen</a></li>
                                    <li><a href="#">Living Area</a></li>
                                    <li><a href="#">Bathroom</a></li>
                                    <li><a href="#">Bedroom</a></li>
                                </ul>
                            </div>

                            <div class="footer__item mx-auto max-w-[260px] xl:mx-0">
                                <h3 class="h3 mb-3">Contact</h3>
                                <div class="flex flex-col gap-6 text-[20px]">
                                    <p>55 East Birchwood Ave. Brooklyn, New York 11201</p>
                                    <p>contact@interno.com</p>
                                    <p>(123) 456 - 7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            {{-- Copy right --}}
            <p class="footer__copyright bg-white py-10 text-center text-lg xl:border-t">Copyright &copy; Interno 2024. All rights reserved.</p>
        </main>
    </body>

    {{-- Scroll Reveal --}}
    <script src="{{ asset("js/scrollreveal.min.js") }}"></script>

    {{-- Swiper CSS1 JS1 --}}
    <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset("js/main.js") }}"></script>
</html>
