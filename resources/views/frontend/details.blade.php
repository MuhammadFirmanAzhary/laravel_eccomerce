<x-frontend.layout>
    @section('title', 'Details')
    <section class="container relative max-w-screen-xl pt-10 overflow-hidden">
        <div class="flex items-center flex-wrap mb-[38px] justify-between gap-5">
            <!-- Page Header -->
            <div class="flex flex-col gap-4 max-w-[430px]">
                <div class="inline-flex gap-[6px] items-center bg-butter-yellow rounded-full px-4 py-[6px] w-max">
                    <img src="{{ asset('assets/svgs/ic-champion-cup.svg') }}" alt="tickety-assets">
                    <p class="text-sm font-semibold text-dark-indigo">
                        Popular Event
                    </p>
                </div>

                <h1 class="text-5xl font-bold leading-normal">
                    Design 101: Product Manager
                </h1>
                <p class="text-lg text-iron-grey">
                    Learn how to facilitate design sprint today
                </p>
            </div>

            <!-- Rating Star -->
            <div>
                <p class="mb-2 text-lg font-semibold text-iron-grey md:text-end">
                    18,309 people
                </p>
                <div class="flex items-center gap-[2px]">
                    <img src="{{ asset('assets/svgs/ic-star.svg') }}" alt="tickety-assets">
                    <img src="{{ asset('assets/svgs/ic-star.svg') }}" alt="tickety-assets">
                    <img src="{{ asset('assets/svgs/ic-star.svg') }}" alt="tickety-assets">
                    <img src="{{ asset('assets/svgs/ic-star.svg') }}" alt="tickety-assets">
                    <img src="{{ asset('assets/svgs/ic-star.svg') }}" alt="tickety-assets">
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="container relative max-w-screen-xl">
            <div id="galleryCarousel">
                <img src="{{ asset('assets/images/gallery-1.webp') }}" class="w-[433px] h-[310px] rounded-2xl mr-[30px]"
                    alt="tickety-assets">
                <img src="{{ asset('assets/images/gallery-2.webp') }}" class="w-[433px] h-[310px] rounded-2xl mr-[30px]"
                    alt="tickety-assets">
                <img src="{{ asset('assets/images/gallery-3.webp') }}" class="w-[433px] h-[310px] rounded-2xl mr-[30px]"
                    alt="tickety-assets">
                <img src="{{ asset('assets/images/gallery-1.webp') }}" class="w-[433px] h-[310px] rounded-2xl mr-[30px]"
                    alt="tickety-assets">
                <img src="{{ asset('assets/images/gallery-2.webp') }}" class="w-[433px] h-[310px] rounded-2xl mr-[30px]"
                    alt="tickety-assets">
                <img src="{{ asset('assets/images/gallery-1.webp') }}" class="w-[433px] h-[310px] rounded-2xl mr-[30px]"
                    alt="tickety-assets">
            </div>
            <!-- Prev Button -->
            <div class="absolute hidden -translate-y-1/2 top-1/2 right-4 lg:right-[200px] cursor-pointer"
                id="carouselRightButton">
                <img src="{{ asset('assets/svgs/ic-right-rounded.svg') }}" alt="tickety-assets">
            </div>
            <!-- Next Button -->
            <div class="absolute -translate-y-1/2 cursor-pointer top-1/2 lg:left-20" id="carouselLeftButton">
                <img src=" {{ asset('assets/svgs/ic-left-rounded.svg') }}" alt="tickety-assets">
            </div>
        </div>
    </section>
    <!-- Wavy line ornament -->
    <img src="{{ asset('assets/svgs/wavy-line-3.svg') }}" class="absolute w-full -z-10 top-[380px]"
        alt="tickety-assets">

    <section id="eventDescription" class="container max-w-screen-xl pt-[70px] relative pb-[156px]">
        <div class="flex flex-wrap items-start justify-between gap-y-[30px]">
            <div>
                <h5 class="text-[24px] md:text-[38px] font-bold">
                    What <span class="text-butter-yellow">This</span> <br>
                    <span class="text-butter-yellow">Event</span> About?
                </h5>
                <p class="text-iron-grey text-lg leading-8 max-w-[640px] mt-4 mb-[30px]">
                    Advance your skills as a beginning programmer with Python—one of
                    the most versatile and widely used programming languages! In this
                    course, you will build on your understanding of fundamental Python
                    and learn some more advanced skills, including how to work with files
                    on your computer's disk, how to retrieve data using a web API, and how
                    to use Object-Oriented Programming (OOP) to create your own.
                </p>

                <div class="max-w-[500px]">
                    <div class="grid md:grid-cols-2 gap-x-[50px] gap-y-[30px]">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('assets/svgs/ic-location.svg') }}" alt="tickety-assets">
                            <div>
                                <p class="text-pastel-purple text-sm mb-[2px]">
                                    Location
                                </p>
                                <p class="text-base font-semibold">
                                    Stadium Jaksel
                                    Parabellum
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('assets/svgs/ic-circles.svg') }}" alt="tickety-assets">
                            <div>
                                <p class="text-pastel-purple text-sm mb-[2px]">
                                    Type
                                </p>
                                <p class="text-base font-semibold">
                                    Online Event
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('assets/svgs/ic-calendar.svg') }}" alt="tickety-assets">
                            <div>
                                <p class="text-pastel-purple text-sm mb-[2px]">
                                    Date
                                </p>
                                <p class="text-base font-semibold">
                                    12 June, 2023
                                    18.00 PM
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('assets/svgs/ic-watch.svg') }}" alt="tickety-assets">
                            <div>
                                <p class="text-pastel-purple text-sm mb-[2px]">
                                    Duration
                                </p>
                                <p class="text-base font-semibold">
                                    17hrs
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="" method=""
                class="bg-primary p-5 rounded-2xl flex flex-col gap-5 max-w-[380px] w-full md:-mt-[120px] z-10 relative">
                <p class="text-xl font-semibold">
                    Let's get your tickets
                </p>
                <!-- Entry -->
                <div class="px-5 py-6 bg-bluish-purple rounded-2xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="mb-1 text-base font-semibold">
                                Entry
                            </p>
                            <p class="text-[22px] font-semibold text-secondary">
                                $12,000
                            </p>
                        </div>
                        <div class="inline-flex items-center justify-between max-w-[150px]">
                            <button type="button" class="minusButton">
                                <img src="{{ asset('assets/svgs/ic-minus.svg') }}" alt="tickety-assets">
                            </button>
                            <input type="number" name="entry_ticket" id="entry_ticket"
                                class="text-center bg-transparent focus:outline-none" value="12" min="1" max="100">
                            <button type="button" class="plusButton">
                                <img src="{{ asset('assets/svgs/ic-plus.svg') }}" alt="tickety-assets">
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pro -->
                <div class="px-5 py-6 bg-bluish-purple rounded-2xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="mb-1 text-base font-semibold">
                                Pro
                            </p>
                            <p class="text-[22px] font-semibold text-secondary">
                                $50,000
                            </p>
                        </div>
                        <div class="inline-flex items-center justify-between max-w-[150px]">
                            <button type="button" class="minusButton">
                                <img src="{{ asset('assets/svgs/ic-minus.svg') }}" alt="tickety-assets">
                            </button>
                            <input type="number" name="pro_ticket" id="pro_ticket"
                                class="text-center bg-transparent focus:outline-none" value="44" min="1" max="100">
                            <button type="button" class="plusButton">
                                <img src="{{ asset('assets/svgs/ic-plus.svg') }}" alt="tickety-assets">
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Enterprise -->
                <div class="px-5 py-6 bg-bluish-purple rounded-2xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="mb-1 text-base font-semibold">
                                Enterprise
                            </p>
                            <p class="text-[22px] font-semibold text-secondary">
                                $250,000
                            </p>
                        </div>
                        <div class="inline-flex items-center justify-between max-w-[150px]">
                            <button type="button" class="minusButton" data-target="test">
                                <img src="{{ asset('assets/svgs/ic-minus.svg') }}" alt="tickety-assets">
                            </button>
                            <input type="number" name="enterprise_ticket" id="enterprise_ticket"
                                class="text-center bg-transparent focus:outline-none" value="664" min="1" max="100">
                            <button type="button" class="plusButton">
                                <img src="{{ asset('assets/svgs/ic-plus.svg') }}" alt="tickety-assets">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="inline-flex items-center justify-between">
                    <p class="text-base font-semibold">
                        17 tickets
                    </p>
                    <p class="text-[22px] font-semibold text-secondary">
                        $899,000
                    </p>
                </div>
                <a href="{{ url('/checkout') }}" class="btn-secondary">
                    Book Tickets Now
                </a>
                <!-- <button type="submit" class="btn-secondary">
                    Book Tickets Now
                </button> -->
            </form>
        </div>
    </section>
    
    @push('css')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @endpush

    @push('js')
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Carousel -->
    <script>
        $carousel = $('#galleryCarousel')
        let flickityPrevButton = $('#galleryCarousel .flickity-prev-next-button.previous')
        let flickityNextButton = $('#galleryCarousel .flickity-prev-next-button.next')
        let rightButton = $('#carouselRightButton')
        let leftButton = $('#carouselLeftButton')
        let flktyPrevNextButtons = $(window).width() > 991 ? true : false

        $carousel.flickity({
            cellAlign: 'center',
            contain: true,
            pageDots: false,
            imagesLoaded: true,
            groupCells: false,
            prevNextButtons: false
        })

        if ($(window).width() > 991) {
            $('#galleryCarousel .flickity-viewport').css({
                overflow: 'visible'
            })
        }

        $carousel.on('change.flickity', function (event, index) {
            let len = $('#galleryCarousel .flickity-slider').children().length
            // console.log(len, index)
            
            if (index === len-1) {
                leftButton.addClass('hidden')
            }

            if (index > 0) {
                rightButton.removeClass('hidden')
            }  else {
                rightButton.addClass('hidden')
                leftButton.removeClass('hidden')
            }
        });

        leftButton.on('click', function(e) {
            $carousel.flickity('next')
        })

        rightButton.on('click', function(e) {
            $carousel.flickity('previous')
        })
    </script>

    <!-- Input ticket increment -->
    <script>
        $(() => {
            $('.minusButton').on('click', function () {
                let inputElement = $(this).siblings('input[type=number]')
                let currentValue = inputElement.val()
                if (currentValue != 0) {
                    inputElement.val(--currentValue)
                }
            })

            $('.plusButton').on('click', function () {
                let inputElement = $(this).siblings('input[type=number]')
                let currentValue = inputElement.val()
                inputElement.val(++currentValue)
            })
        })
    </script>
    @endpush
</x-frontend.layout>