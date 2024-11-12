<x-layout :header="false">

  <section class="flex flex-col md:flex-row bg-foreground container mx-auto rounded-lg overflow-hidden">
    <div class="p-10 flex-1 basis-[65%] self-end">
      <p class="mb-2 text-black/90">Licenciada en Nutricion</p>
      <h1 class="text-6xl font-title text-black">Agustina Somerfeld</h1>
      <a href="#contact" class="p-4 uppercase font-bold bg-background rounded-lg text-lg mt-8 text-black block w-fit">Contactame</a>
    </div>
    <img class="h-[200px] w-full md:h-[500px] md:w-auto object-cover" src="/images/hero-image.jpeg" alt="Food in the bg" />
  </section>

  <section class="px-10 py-20 container mx-auto flex flex-col md:flex-row gap-6">
    <div class="md:w-2/4 flex justify-center flex-col">
      <h2 class="font-title text-4xl">A comer lechuga</h2>
      <p class="my-4 text-xl">Mucha lechuguita</p>
      <p>Write a paragraph that talks about your company here. You can talk about your company's background, history, mission, vision, or philosophy. Anything that will introduce your brand's persona to your clients.</p>
    </div>
    <img class="rounded-full h-[400px] w-auto object-cover mx-auto" src="/images/img-2.jpeg" alt="pancakes" />
  </section>

  <section class="px-10 py-20 container mx-auto flex flex-col text-center justify-center">
    <h2 class="font-title text-4xl">Resultados</h2>
    <p class="my-4 text-xl">Lo que dice la gente</p>
    <ul class="flex gap-6 items-center justify-center mt-6">
      <li class="bg-foreground rounded-lg p-6 text-black">
        <p class="italic">&quot;Me sirvio mucho el plan de alimentacion...&quot;</p />
        <p class="font-bold">Jenaro Calvino</p />
      </li>
      <li class="bg-foreground rounded-lg p-6 text-black">
        <p class="italic">&quot;Me sirvio mucho el plan de alimentacion...&quot;</p />
        <p class="font-bold">Jenaro Calvino</p />
      </li>
      <li class="bg-foreground rounded-lg p-6 text-black">
        <p class="italic">&quot;Me sirvio mucho el plan de alimentacion...&quot;</p />
        <p class="font-bold">Jenaro Calvino</p />
      </li>
    </ul>
  </section>
</x-layout>
