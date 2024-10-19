<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<section class="py-32">
  <div class="container flex flex-col items-center gap-16 lg:px-16">
    <div class="text-center">
      <p class="mb-6 text-xs font-medium uppercase tracking-wider">Tag Line</p>
      <h2 class="mb-3 text-pretty text-3xl font-semibold md:mb-4 md:text-4xl lg:mb-6 lg:max-w-3xl lg:text-5xl">
        Blog Posts
      </h2>
      <p class="mb-8 text-zinc-700 md:text-base lg:max-w-2xl lg:text-lg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Elig doloremque mollitia fugiat
        omnis! Porro facilis quo animi consequatur. Explicabo.
      </p>
      <a href="/posts">
      <button
        type="button"
        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-zinc-600 underline-offset-4 hover:underline h-10 px-4 py-2 w-full sm:w-auto">
        Explore all posts<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-arrow-right ml-2 size-4">
          <path d="M5 12h14"></path>
          <path d="m12 5 7 7-7 7"></path>
        </svg>
        <span class="sr-only">Explore all posts</span>
      </button>
      </a>
    </div>
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-8">
      <a href="#" class="flex flex-col overflow-clip rounded-xl border border-border backdrop-filter backdrop-blur-lg bg-white/30 border-white/40">
        <div>
          <img src="https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg" How alt="Wickedblocks" is exploring UI Design class="aspect-[16/9] h-full w-full object-cover object-center" />
        </div>
        <div class="px-6 py-8 md:px-8 md:py-10 lg:px-10 lg:py-12">
          <h3 class="mb-3 text-lg font-semibold md:mb-4 md:text-xl lg:mb-6">
            Understanding Component Libraries and Their Benefits
          </h3>
          <p class="mb-3 text-zinc-600 md:mb-4 lg:mb-6">
            Pellentesque eget quam ligula. Sed felis ante, consequat nec ultrices ut, ornare quis
            metus. Vivamus sit amet tortor vel enim sollicitudin hendrerit.
          </p>
          <p class="flex items-center hover:underline">
            Read more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-arrow-right ml-2 size-4">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg>
          </p>
        </div>
      </a><a href="#" class="flex flex-col overflow-clip rounded-xl border border-border backdrop-filter backdrop-blur-lg bg-white/30 border-white/40">
        <div>
          <img src="https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg" How alt="Wickedblocks" is exploring UI Design class="aspect-[16/9] h-full w-full object-cover object-center" />
        </div>
        <div class="px-6 py-8 md:px-8 md:py-10 lg:px-10 lg:py-12">
          <h3 class="mb-3 text-lg font-semibold md:mb-4 md:text-xl lg:mb-6">
            Top 5 Component Libraries for React Developers
          </h3>
          <p class="mb-3 text-zinc-600 md:mb-4 lg:mb-6">
            Pellentesque eget quam ligula. Sed felis ante, consequat nec ultrices ut, ornare quis
            metus. Vivamus sit amet tortor vel enim sollicitudin hendrerit.
          </p>
          <p class="flex items-center hover:underline">
            Read more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-arrow-right ml-2 size-4">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg>
          </p>
        </div>
      </a><a href="#" class="flex flex-col overflow-clip rounded-xl border border-border backdrop-filter backdrop-blur-lg bg-white/30 border-white/40">
        <div>
          <img src="https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg" How alt="Wickedblocks" is exploring UI Design class="aspect-[16/9] h-full w-full object-cover object-center" />
        </div>
        <div class="px-6 py-8 md:px-8 md:py-10 lg:px-10 lg:py-12">
          <h3 class="mb-3 text-lg font-semibold md:mb-4 md:text-xl lg:mb-6">
            How to Choose the Right Component Library for Your Project
          </h3>
          <p class="mb-3 text-zinc-600 md:mb-4 lg:mb-6">
            Pellentesque eget quam ligula. Sed felis ante, consequat nec ultrices ut, ornare quis
            metus. Vivamus sit amet tortor vel enim sollicitudin hendrerit.
          </p>
          <p class="flex items-center hover:underline">
            Read more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-arrow-right ml-2 size-4">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg>
          </p>
        </div>
      </a>
    </div>
  </div>
</section>
</x-layout>
