<x-app-layout>
  <x-slot name="header">
    <x-patient-navigation :patient="$patient" />
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <livewire:patients.measurement :patient="$patient" />
    </div>
  </div>
</x-app-layout>
