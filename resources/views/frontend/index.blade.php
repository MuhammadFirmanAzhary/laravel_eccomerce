<x-frontend.layout>
  @section('title', 'Landing Page')

  <section id="heroSection" class="container relative max-w-screen-xl pt-10 pb-24">
      <div class="flex flex-wrap items-center justify-between w-full gap-8">
          <div class="w-full max-w-[400px] flex flex-col gap-4">
              <div class="inline-flex gap-[6px] items-center bg-lavender-pink rounded-full px-4 py-[6px] w-max">
                  <img src="{{ asset('assets/svgs/ic-champion-cup.svg') }}" alt="tickety-assets">
                  <p class="text-sm font-semibold text-dark-indigo">
                      Buy one get three tickets
                  </p>
              </div>
              <h1 class="text-[36px] md:text-[48px] text-white font-bold">
                  Empower Your
                  <span
                      class="text-dark-indigo bg-butter-yellow inline-flex items-center h-[49px] w-max">Passions</span>
                  Today
              </h1>
              <p class="text-base leading-8 md:text-lg text-iron-grey">
                  You deserve new experiences that enhance
                  the things you are truly passionate about.
              </p>
              <div class="mt-[14px]">
                  <a href="#eventSection" class="btn-secondary">
                      Explore Now
                  </a>
              </div>
          </div>

          <img src="{{ asset('assets/images/hero-image.webp') }}" class="max-w-[584px] max-h-[400px] w-full h-full"
              alt="tickety-assets">
      </div>
  </section>

  {{-- Wavy line ornament --}}
  <img src="{{ asset('assets/svgs/wavy-line-1.svg') }}" class="absolute -z-10 md:top-[160px] w-full"
  alt="tickety-assets">

  <section id="eventSection" class="container relative max-w-screen-xl py-10">
      <!-- Section Header -->
      <div class="flex justify-between items-center gap-4 mb-[50px]">
          <h5 class="text-[24px] md:text-[38px] font-bold">
              <span class="text-butter-yellow">Big</span> Events, <br>
              Coming <span class="text-butter-yellow">Soon</span>
          </h5>

          <a href="#!" class="btn-primary">
              View All
          </a>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
          <x-frontend.card-event :cover="asset('assets/images/event-1.webp')" :title="'Agus Sumardi'" :category="'Music'" :date="'26 Jun 2023'"
              :price="800" :description="'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'" :route="route('detail')" />
      </div>
  </section>

  <section id="categoriesSection" class="relative pb-[100px] overflow-hidden">
      <div class="container relative max-w-screen-xl py-10">
          <!-- Section Header -->
          <div class="flex justify-between items-center gap-4 mb-[50px]">
              <h5 class="text-[24px] md:text-[38px] font-bold">
                  <span class="text-butter-yellow">Browse</span> by <br>
                  Top <span class="text-butter-yellow">Categories</span>
              </h5>

              <a href="#!" class="btn-primary">
                  View All
              </a>
          </div>

          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-[30px] relative">
              <x-frontend.card-category name="Startup" totalEvents="189399" :icon="asset('assets/svgs/ic-chart-growth.svg')" />
              <x-frontend.card-category name="Music" totalEvents="45990" :icon="asset('assets/svgs/ic-mic.svg')" />
              <x-frontend.card-category name="Movies" totalEvents="24400" :icon="asset('assets/svgs/ic-movie.svg')" />
              <x-frontend.card-category name="Game" totalEvents="850456" :icon="asset('assets/svgs/ic-console.svg')" />
          </div>
      </div>

      <!-- Wavy line ornament -->
      <img src="{{ asset('assets/svgs/wavy-line-2.svg') }}" class="absolute -z-10 top-[250px] w-full" alt="tickety-assets">
  </section>
</x-frontend.layout>