@prop(['header' => true])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Agustina Somerfeld</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=young-serif:400" rel="stylesheet" />

  <!-- Styles -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans">
  <div class="bg-background text-black/50 dark:bg-black/90 dark:text-white/90">
    <div class="relative w-full min-h-screen grid grid-rows-[auto_1fr_auto]">
      <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3 p-4">
        @if (Route::has('login') && $header)
        <div class="col-start-3">
          <livewire:welcome.navigation />
        </div>
        @endif
      </header>

      <main>{{ $slot }}</main>

      <footer id="contact" class="text-black grid md:grid-cols-3 bg-foreground">
        <img class="h-[200px] md:h-[500px] w-full md:w-auto object-cover" src="/images/footer-image.jpeg" alt="Food on a table." />

        <div class="flex gap-x-10 p-10 w-full flex-1 basis-[60%] col-span-2 lg:cols-span-1">
          <div class="flex flex-col gap-y-2 items-start justify-end">
            <p class="text-xl">Direccion</p>
            <p class="text-xl">Telefono: <a href="tel:+543513478259">+54 351 347-8259</a></p>
            <p class="text-xl">Whatsapp: <a href="https://wa.link/hvgb78">+54 351 347-8259</a></p>
            <p class="text-xl">Email</p>
          </div>
          <div class="flex flex-col gap-y-2 items-start justify-end">
            <p class="text-2xl font-bold mb-4">Horarios:</p>

            <p class="text-xl">Lunes: 9am - 6pm</p>
            <p class="text-xl">Martes: 9am - 6pm</p>
            <p class="text-xl">Miercoles: 9am - 6pm</p>
            <p class="text-xl">Jueves: 9am - 6pm</p>
            <p class="text-xl">Viernes: 9am - 6pm</p>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>
