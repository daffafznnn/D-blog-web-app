<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<x-header>{{ $title }}</x-header>
<section>
  <div class="container mx-auto px-4 flex w-full flex-col items-center pb-8 pt-4 md:flex-row md:pb-10 md:pt-8 lg:pb-16">
    <aside
      class="top-20 mb-8 w-full self-start pt-8 md:sticky md:mr-8 md:w-fit md:min-w-[16rem] md:flex-1 lg:mr-32 lg:max-w-[18rem] lg:shrink-0 2xl:w-full">
      <div class="mb-8 flex w-full max-w-fit shrink-0 flex-col md:mb-10">
        <div class="hidden w-full md:mt-1 md:block">
          <div class="flex w-full items-center space-x-6">
            <a href="#" class="hover:-tranzinc-y-0.5"><img src="/images/placeholders/logos/instagram-icon.svg"
                alt="Instagram" class="size-5 text-zinc-600" /></a><a href="#" class="hover:-tranzinc-y-0.5"><img
                src="/images/placeholders/logos/linkedin-icon.svg" alt="LinkedIn" class="size-5 text-zinc-600" /></a><a
              href="#" class="hover:-tranzinc-y-0.5"><img src="/images/placeholders/logos/producthunt-icon.svg"
                alt="Product Hunt" class="size-5 text-zinc-600" /></a><a href="#" class="hover:-tranzinc-y-0.5"><img
                src="/images/placeholders/logos/twitter-icon.svg" alt="Twitter" class="size-5 text-zinc-600" /></a>
          </div>
        </div>
      </div>
      <div class="flex flex-col rounded-xl border border-border bg-zinc-100 py-6 md:py-8">
        <div class="md:mb-4.5 mb-6 px-6 font-medium leading-5">About Case Study</div>
        <div class="mb-5 px-6 last:mb-0">
          <div class="mb-2 text-xs font-semibold">Company</div>
          <div class="overflow-hidden text-xs text-zinc-600 md:text-sm">
            Suspendisse vel euismod sem. Sed sollicitudin augue eu facilisis scelerisque. Nullam
            pharetra tortor ut massa accumsan egestas.
          </div>
        </div>
        <div class="mb-5 px-6 last:mb-0">
          <div class="mb-2 text-xs font-semibold">Industry</div>
          <div class="overflow-hidden text-xs text-zinc-600 md:text-sm">
            Suspendisse volutpat
          </div>
        </div>
        <div class="mb-5 border-t border-border px-6 pt-5 last:mb-0">
          <div class="mb-2 text-xs font-semibold">Location</div>
          <div class="overflow-hidden text-xs text-zinc-600 md:text-sm">
            London, United Kingdom
          </div>
        </div>
        <div class="mb-5 px-6 last:mb-0">
          <div class="mb-2 text-xs font-semibold">Company size</div>
          <div class="overflow-hidden text-xs text-zinc-600 md:text-sm">11-50</div>
        </div>
        <div class="mb-5 px-6 last:mb-0">
          <div class="mb-2 text-xs font-semibold">Website</div>
          <div class="overflow-hidden text-xs text-zinc-600 md:text-sm">
            <a href="#" class="underline hover:text-foreground">https://example.com/</a>
          </div>
        </div>
        <div class="mb-5 px-6 last:mb-0">
          <div class="mb-2 text-xs font-semibold">Topics</div>
          <div class="overflow-hidden text-xs text-zinc-600 md:text-sm">
            Sed sollicitudin augue eu facilisis scelerisque
          </div>
        </div>
      </div>
    </aside>
    <article class="prose prose-sm mx-auto pt-8">
      <h1>{{ $post['title'] }}</h1>
      <h2>{{ $post['subtitle'] }}</h2>
      <img src="{{ $post['img'] }}" alt="{{ $post['title'] }}" class="w-full h-auto rounded-lg mb-4" />
      <p>
        {{ $post['body'] }}
      </p>
    </article>
  </div>
</section>

</x-layout>
