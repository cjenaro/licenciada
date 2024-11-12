@props(['patient'])
<div class="sm:hidden">
  <label for="tabs" class="sr-only">Select a tab</label>
  <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
  <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    <option>{{ __('layout.patient') }}</option>
    <option>{{ __('layout.add_measurement' ) }}</option>
    <option selected>{{ __('layout.somwehere') }}</option>
    <option>{{ __('patients.add_patient') }}</option>
  </select>
</div>
<div class="hidden sm:block">
  <div class="border-b border-gray-200">
    <nav class="-mb-px flex" aria-label="Tabs">
      <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
      <x-tab-link wire:navigate href="{{ route('patient', ['patient' => $patient ]) }}" :active="request()->routeIs('patient')">{{ __('layout.patient') }}</x-tab-link>
      <x-tab-link wire:navigate href="{{ route('patient', ['patient' => $patient ]) }}" :active="request()->routeIs('measurement')">{{ __('layout.add_measurement') }}</x-tab-link>
      <x-tab-link wire:navigate href="{{ route('patient', ['patient' => $patient ]) }}" :active="false">{{ __('layout.somwehere') }}</x-tab-link>
      <x-tab-link wire:navigate href="{{ route('patients.new' )}}" :actibe="request()->routeIs('patients.new')">{{ __('patients.add_patient') }}</x-tab-link>
    </nav>
  </div>
</div>

