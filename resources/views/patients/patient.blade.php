<x-app-layout>
  <x-slot name="header">
    <div class="flex items-end justify-between">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('layout.patient') }}
      </h2>

      <a href="{{ route('patients.new' )}}" class="px-4 py-2 bg-foreground/80 text-black rounded-lg hover:bg-foreground/90">&plus;&nbsp;&nbsp;{{ __('patients.add_patient') }}</a>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <livewire:patient :patient="$patient" />
    </div>
  </div>
</x-app-layout>
