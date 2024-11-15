@php
$options = [
[
'label' => __('layout.patient'),
'route' => route('patient', ['patient' => $patient]),
'active' => request()->routeIs('patient'),
],
[
'label' => __('layout.add_measurement'),
'route' => route('measurement', ['patient' => $patient]),
'active' => request()->routeIs('measurement'),
],
[
'label' => __('layout.measurements'),
'route' => route('measurements', ['patient' => $patient]),
'active' => request()->routeIs('measurements'),
],
[
'label' => __('patients.add_patient'),
'route' => route('patients.new'),
'active' => request()->routeIs('patients.new'),
],
];
@endphp

@props(['patient'])
<div class="sm:hidden" x-data="{ open: false, selected: null }">
  <label id="listbox-label" class="block text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('layout.select_option') }}</label>
  <div class="relative mt-2">
    <button @click="open = !open" @keydown.escape="open = false" :aria-expanded="open" type="button" class="relative w-full cursor-default rounded-md bg-white dark:bg-gray-800 py-1.5 pl-3 pr-10 text-left text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm" aria-haspopup="listbox" aria-labelledby="listbox-label">
      <span class="block truncate">{{ __('layout.choose_option') }}</span>
      <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
        <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
          <path fill-rule="evenodd" d="M10.53 3.47a.75.75 0 0 0-1.06 0L6.22 6.72a.75.75 0 0 0 1.06 1.06L10 5.06l2.72 2.72a.75.75 0 1 0 1.06-1.06l-3.25-3.25Zm-4.31 9.81 3.25 3.25a.75.75 0 0 0 1.06 0l3.25-3.25a.75.75 0 1 0-1.06-1.06L10 14.94l-2.72-2.72a.75.75 0 0 0-1.06 1.06Z" clip-rule="evenodd" />
        </svg>
      </span>
    </button>

    <ul x-show="open" @click.outside="open = false" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white dark:bg-gray-800 py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label">
      <!-- Options -->
      @foreach ($options as $option)
      <li @click="selected = $option" class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900 dark:text-gray-100" id="listbox-option-0" role="option">
        <a wire:navigate href="{{ $option['route'] }}" class="{{$option['active'] ? 'text-indigo-400' : ''}}">{{ $option['label'] }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<div class="hidden sm:block -mb-[24px]">
  <div class="border-b border-gray-200">
    <nav class="-mb-px flex" aria-label="Tabs">
      @foreach ($options as $option)
      <x-tab-link wire:navigate href="{{ $option['route'] }}" :active="$option['active']">{{ $option['label'] }}</x-tab-link>
      @endforeach
    </nav>
  </div>
</div>
