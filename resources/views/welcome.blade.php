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
        <header class="sticky top-0 h-[90px] shadow-xl z-30 bg-white">
            <div class="container mx-auto flex justify-between h-full items-center">
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
                    <ul class="fixed w-full h-0 p-0 bg-white overflow-hidden border-t top-[90px] inset-x-0 flex flex-col gap-4 lg:relative lg:flex-row lg:p-0 lg:top-0 lg:border-none lg:h-full transition-all duration-300" id="nav_menu">
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
        <main class="max-w-[1920px] mx-auto bg-white overflow-hidden">
            {{-- Grid Img --}}
            {{-- <div class="xl:bg-grid xl:bg-center xl:bg-repeat-y fixed inset-0 z-10"></div> --}}
            {{-- Hero --}}
            <section class="hero h-[640px] xl:h-[840px] bg-center lg:bg-cover bg-hero bg-no-repeat bg-fixed xl:rounded-bl-[290px] relative z-20"> 
                <div class="container mx-auto h-full flex items-center justify-center xl:justify-start">
                    <div class="hero__text w-[567px] flex flex-col items-center text-center xl:text-left lg:items-start">
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
            <section class="steps mt-[80px] xl:mt-[200px] relative z-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-12 xl:grid-cols-3">
                        {{-- Step 1 --}}
                        <div class="steps__step text-center">
                            <div class="mb-4">
                                <i class="ri-compasses-2-line text-5xl text-accent"></i>  
                            </div>
                            <h3 class="h3 mb-5">Project Planning</h3>
                            <p class="mb-5 max-w-md mx-auto">There are many variations of the passages of lorem Ipsum from available, majority.</p>
                            <a href="#" class="font-medium flex justify-center gap-2">
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
                            <p class="mb-5 max-w-md mx-auto">There are many variations of the passages of lorem Ipsum from available, majority.</p>
                            <a href="#" class="font-medium flex justify-center gap-2">
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
                            <p class="mb-5 max-w-md mx-auto">There are many variations of the passages of lorem Ipsum from available, majority.</p>
                            <a href="#" class="font-medium flex justify-center gap-2">
                                Read More
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- About --}}
            <section class="about mt-[80px] xl:mt-[200px] rleative z-20">
                <div class="container mx-auto xl:px-0">
                    <div class="flex flex-col text-center xl:text-left xl:flex-row justify-between items-center gap-8 xl:gap-[74px]">
                        {{-- Text --}}
                        <div class="about__text flex-1 order-2 xl:order-none max-w-xl xl:max-w-[410px] flex flex-col items-center xl:items-start gap-8">
                            <h2 class="h2">We Create The Art Of Stylish Living Stylishly</h2>
                            <p>
                                It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using that it has a more-or-less normal.
                            </p>
                            {{-- Phone --}}
                            <div class="flex items-center justify-center xl:justify-start gap-4">
                                <div class="bg-accent/15 w-[93px] h-[93px] rounded-full flex justify-center items-center">
                                    <i class="ri-phone-fill text-accent text-4xl"></i>
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
                        <div class="about__img order-1 xl:order-none max-w-[453px] mx-auto xl:max-w-none xl:mx-0">
                            <img src="{{ asset("images/about/img.png") }}" />
                        </div>
                    </div>
                </div>
            </section>

            {{-- Testimonial --}}
            <section class="testimonial mt-[80px] xl:mt-[200px] relative z-20">
                <div class="testimonial__bg container mx-auto bg-accent-secondary rounded-[70px] px-6">
                    <div class="flex flex-col items-center pt-[88px] pb-[110px]">
                        <h2 class="testimonial__title h2 mb-9 text-center">What clients say</h2>
                    </div>
                    {{-- Slider --}}
                    <div class="w-full">
                        <div class="testimonial__slider swiper h-[400px]">
                            <div class="swiper-wrapper">
                                {{-- Slide1 --}}
                                <div class="swiper-slide">

                                    {{-- Item --}}
                                    <div class="testimonial__item w-full max-w-[450px] h-[340px] bg-white rounded-[30px] flex flex-col justify-center p-9 mx-auto">
                                        <div class="flex gap-4 mb-6">
                                            <img src="{{ asset("images/testimonial/01.png") }}"/>
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy  text of the typesetting industry. Ipsum has been.</p>
                                    </div>
                                </div>

                                {{-- Slide1 --}}
                                <div class="swiper-slide">

                                    {{-- Item --}}
                                    <div class="testimonial__item w-full max-w-[370px] h-[340px] bg-white rounded-[30px] flex flex-col justify-center p-9 mx-auto">
                                        <div class="flex gap-4 mb-6">
                                            <img src="{{ asset("images/testimonial/01.png") }}"/>
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy  text of the typesetting industry. Ipsum has been.</p>
                                    </div>
                                </div>

                                {{-- Slide1 --}}
                                <div class="swiper-slide">

                                    {{-- Item --}}
                                    <div class="testimonial__item w-full max-w-[370px] h-[340px] bg-white rounded-[30px] flex flex-col justify-center p-9 mx-auto">
                                        <div class="flex gap-4 mb-6">
                                            <img src="{{ asset("images/testimonial/01.png") }}"/>
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy  text of the typesetting industry. Ipsum has been.</p>
                                    </div>
                                </div>

                                {{-- Slide4 --}}
                                <div class="swiper-slide">

                                    {{-- Item --}}
                                    <div class="testimonial__item w-full max-w-[370px] h-[340px] bg-white rounded-[30px] flex flex-col justify-center p-9 mx-auto">
                                        <div class="flex gap-4 mb-6">
                                            <img src="{{ asset("images/testimonial/01.png") }}"/>
                                            <div>
                                                <h3 class="h3">Nattasha Mith</h3>
                                                <div>Greenville, USA</div>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy  text of the typesetting industry. Ipsum has been.</p>
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
            <section class="brands mt-[80px] xl:mt-[150px] relative z-20">
                <div class="container mx-auto">
                    <div class="flex flex-col xl:flex-row justify-between items-center gap-12">
                        <img class="brands__img" src="{{ asset("images/brands/01.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/02.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/03.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/04.svg") }}" />
                        <img class="brands__img" src="{{ asset("images/brands/05.svg") }}" />
                    </div>
                </div>
            </section>

            {{-- Work --}}
            <section class="work mt-[80px] xl:mt-[150px] relative z-20">
                <div class="container mx-auto xl:px-0">
                    <div class="text-center mb-24">
                        <h2 class="work__title h2 mb-4">Follow Our Projects</h2>
                        <p class="work__subtitle max-w-3xl mx-auto">
                            It is a long established fact that a reader will be distracted by the of readable content of page lookings at its layouts points.
                        </p>
                    </div>
                    {{-- Grid --}}
                    <div class="work__grid grid grid-cols-1 xl:grid-cols-2 gap-x-[104px] gap-y-[56px]">
                        {{-- Item --}}
                        <div class="w-full max-w-[548px] h-full mx-auto">
                            <img class="mb-6" src="{{ asset("images/work/02.png") }}"/>
                            <div class="flex justify-between items-center w-full">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="bg-accent-secondary w-[70px] h-[70px] rounded-full hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="w-full max-w-[548px] h-full mx-auto">
                            <img class="mb-6" src="{{ asset("images/work/01.png") }}"/>
                            <div class="flex justify-between items-center w-full">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="bg-accent-secondary w-[70px] h-[70px] rounded-full hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="w-full max-w-[548px] h-full mx-auto">
                            <img class="mb-6" src="{{ asset("images/work/04.png") }}"/>
                            <div class="flex justify-between items-center w-full">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="bg-accent-secondary w-[70px] h-[70px] rounded-full hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Item --}}
                        <div class="w-full max-w-[548px] h-full mx-auto">
                            <img class="mb-6" src="{{ asset("images/work/03.png") }}"/>
                            <div class="flex justify-between items-center w-full">
                                <div>
                                    <h3 class="h3">Modern Kitchen</h3>
                                    <p>Decor/Architecture</p>
                                </div>
                                <button class="bg-accent-secondary w-[70px] h-[70px] rounded-full hover:bg-accent/20">
                                    <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Stats --}}
            <section class="stats mt-[80px] xl:mt-[150px] relative z-20 bg-accent-secondary py-[80px] xl:py-[150px]">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 xl:grid-cols-4 gap-12">
                        <div class="stats__item text-center xl:border-accent xl:border-r">
                            <h3 class="h1 font-primary text-accent">12</h3>
                            <p>Years Of Experience</p>
                        </div>

                        <div class="stats__item text-center xl:border-accent xl:border-r">
                            <h3 class="h1 font-primary text-accent">85</h3>
                            <p>Projects Completed</p>
                        </div>

                        <div class="stats__item text-center xl:border-accent xl:border-r">
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
            <section class="news mt-[80px] xl:mt-[150px] relative z-20">
                <div class="container mx-auto px-0">
                    <div class="max-w-[810px] mx-auto text-center mb-[52px]">
                        <h2 class="news__title h2 mb-3">Articles & News</h2>
                        <p class="news__subtitle">
                            It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.
                        </p>

                    </div>
                    <div class="news__grid grid grid-cols-1 xl:grid-cols-3 gap-[27px]">
                        <div class="news__item w-full max-w-[382px] h-[520px] border border-primary/20 rounded-[62px] p-[20px] hover:bg-accent-secondary transition-all group cursor-pointer mx-auto xl:mx-0">
                            <img class="mb-5" src="{{ asset("images/news/01.png") }}"/>
                            <div class="flex flex-col gap-[30px]">
                                <h3 class="h3">Let’s Get Solution For Building Construction Work</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-base">22 June,2024</p>
                                    <button class="bg-accent-secondary w-[52px] h-[52px] rounded-full group-hover:bg-white transition-all">
                                        <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="news__item w-full max-w-[382px] h-[520px] border border-primary/20 rounded-[62px] p-[20px] hover:bg-accent-secondary transition-all group cursor-pointer mx-auto xl:mx-0">
                            <img class="mb-5" src="{{ asset("images/news/02.png") }}"/>
                            <div class="flex flex-col gap-[30px]">
                                <h3 class="h3">Let’s Get Solution For Building Construction Work</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-base">22 June,2024</p>
                                    <button class="bg-accent-secondary w-[52px] h-[52px] rounded-full group-hover:bg-white transition-all">
                                        <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="news__item w-full max-w-[382px] h-[520px] border border-primary/20 rounded-[62px] p-[20px] hover:bg-accent-secondary transition-all group cursor-pointer mx-auto xl:mx-0">
                            <img class="mb-5" src="{{ asset("images/news/03.png") }}"/>
                            <div class="flex flex-col gap-[30px]">
                                <h3 class="h3">Let’s Get Solution For Building Construction Work</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-base">22 June,2024</p>
                                    <button class="bg-accent-secondary w-[52px] h-[52px] rounded-full group-hover:bg-white transition-all">
                                        <i class="ri-arrow-right-s-line text-3xl text-primary pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Contacts --}}
            <section class="contact mt-[80px] xl:mt-[150px] relative z-20">
                <div class="contact__container container mx-auto bg-primary sm:rounded-[70px] py-[80px]">
                    <div class="contact__text max-w-[640px] mx-auto text-center">
                        <h2 class="h2 text-white mb-4">Do you want to join Interno?</h2>
                        <p class="text-white mb-8 max-w-sm xl:max-w-none mx-auto">It is a long established fact will be distracted.</p>
                        <button class="btn btn-accent mx-auto">Connect with us <i class="ri-arrow-right-line text-primary"></i></button>
                    </div>
                </div>
            </section>

            {{-- Footer --}}
            <footer class="footer mt-[80px] xl:mt-[150px] relative z-20">
                <div class="container mx-auto px-0">
                    <div class="flex flex-col xl:flex-row xl:gap-[100px] xl:mb-[150px]">
                        <div class="footer__item w-full max-w-[400px] mx-auto mb-8 text-center xl:text-left">
                            {{-- Logo --}}
                            <a href="#" class="flex justify-center xl:justify-start mb-8">
                                <img src="{{ asset("images/logo.svg") }}"/>
                            </a>
                            <p class="mb-8 text-xl">
                                It is a long established fact that a reader will be distracted lookings.
                            </p>
                            {{-- Socials --}}
                            <ul class="text-primary flex gap-[54px] justify-center xl:justify-start">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-fill"></i></a></li>
                            </ul>
                        </div>
                        <div class="flex-1 flex flex-col xl:flex-row text-center xl:text-left gap-12 xl:gap-[100px] xl:justify-end">
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

                            <div class="footer__item max-w-[260px] mx-auto xl:mx-0">
                                <h3 class="h3 mb-3">
                                    Contact
                                </h3>
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
            <p class="footer__copyright text-center text-lg py-10 bg-white xl:border-t">Copyright &copy; Interno 2024. All rights reserved.</p>
        </main>
    </body>

    {{-- Scroll Reveal --}}
    <script src="{{ asset("js/scrollreveal.min.js") }}"></script>

    {{-- Swiper CSS1 JS1 --}}
    <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset("js/main.js") }}"></script>
</html>
