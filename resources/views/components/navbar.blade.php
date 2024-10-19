{{-- navbar --}}
<div class="fixed top-0 left-0 right-0 z-50 px-4" x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
     :class="{ 'shadow-md bg-white': scrolled, 'bg-transparent': !scrolled }">
  <div class="container mx-auto">
    <nav aria-label="Main" class="flex items-center justify-between py-4">
      <div class="flex items-center">
        <a href="/">
          <span class="text-xl font-bold">Daffafznnn blog</span>
        </a>
      </div>
      <div class="hidden lg:flex items-center space-x-4">
        <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        <button class="h-10 rounded-md border border-input bg-background px-4 py-2 text-sm font-medium text-black hover:bg-accent">
          Log in
        </button>
      </div>
      <div class="flex items-center mr-2 lg:hidden">
        <button @click="open = !open" class="text-gray-800 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-menu">
            <line x1="4" x2="20" y1="12" y2="12"></line>
            <line x1="4" x2="20" y1="6" y2="6"></line>
            <line x1="4" x2="20" y1="18" y2="18"></line>
          </svg>
        </button>
      </div>
    </nav>
    <!-- Menu Hamburger -->
    <div x-show="open" @click.outside="open = false" class="lg:hidden">
      <div class="absolute left-0 right-0 z-10 bg-white rounded-md shadow-lg">
        <ul class="flex flex-col p-4 space-y-2">
          <li>
            <a href="/posts" class="block px-4 py-2 text-sm hover:bg-accent {{ request()->is('blog') ? 'hidden' : 'block' }}">Blog</a>
          </li>
          <li>
            <a href="/about" class="block px-4 py-2 text-sm hover:bg-accent {{ request()->is('about') ? 'hidden' : 'block' }}">About</a>
          </li>
          <li>
            <a href="/contact" class="block px-4 py-2 text-sm hover:bg-accent {{ request()->is('contact') ? 'hidden' : 'block' }}">Contact</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-accent">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
{{-- end navbar --}}
