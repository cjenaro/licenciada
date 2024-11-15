<?php

use App\Models\Patient;
use App\Livewire\Forms\MeasurementForm;

use function Livewire\Volt\{form, state};

state(['p' => fn($patient) => Patient::find($patient)]);

form(MeasurementForm::class);

$save = function () {
  $this->validate();

  $this->p->measurements()->create($this->form->all());

  return $this->redirect('..');
}

?>

<form wire:submit.prevent="save" class="space-y-12 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
  <div class="border-b border-gray-300 dark:border-gray-700 pb-12">
    <h2 class="text-base font-semibold text-gray-900 dark:text-gray-100">{{ __('measurements.patient_measurements') }}</h2>
    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ __('measurements.fill_details') }}</p>

    <div class="grid gap-6 mt-10">
      <!-- Basic Measurements -->
      <div>
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('measurements.basic_measurements') }}</h3>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-4 md:grid-cols-8 mt-4">
          @foreach(['body_mass', 'stretch_stature', 'sitting_height', 'arms_span'] as $field)
          <div class="sm:col-span-2">
            <x-input-label :for="$field" :value="__('measurements.' . $field)" />
            <x-text-input wire:model="form.{{ $field }}" :id="$field" type="number" step="0.01" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('form.' . $field)" class="mt-2" />
          </div>
          @endforeach
        </div>
      </div>

      <!-- Skinfolds -->
      <div>
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('measurements.skinfolds') }}</h3>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-4 md:grid-cols-8 mt-4">
          @foreach(['triceps', 'subscapular', 'biceps', 'iliac_crest', 'supraspinale', 'abdominal', 'thigh', 'calf'] as $field)
          <div class="sm:col-span-2">
            <x-input-label :for="$field" :value="__('measurements.' . $field)" />
            <x-text-input wire:model="form.{{ $field }}" :id="$field" type="number" step="0.01" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('form.' . $field)" class="mt-2" />
          </div>
          @endforeach
        </div>
      </div>

      <!-- Girths -->
      <div>
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('measurements.girths') }}</h3>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-4 md:grid-cols-8 mt-4">
          @foreach(['arm_relaxed', 'arm_flexed_contracted', 'waist', 'hips', 'thigh_middle', 'girth_calf'] as $field)
          <div class="sm:col-span-2">
            <x-input-label :for="$field" :value="__('measurements.' . $field)" />
            <x-text-input wire:model="form.{{ $field }}" :id="$field" type="number" step="0.01" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('form.' . $field)" class="mt-2" />
          </div>
          @endforeach
        </div>
      </div>

      <!-- Breadths -->
      <div>
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('measurements.breadths') }}</h3>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-4 md:grid-cols-8 mt-4">
          @foreach(['humerus', 'bi_styloid', 'femur'] as $field)
          <div class="sm:col-span-2">
            <x-input-label :for="$field" :value="__('measurements.' . $field)" />
            <x-text-input wire:model="form.{{ $field }}" :id="$field" type="number" step="0.01" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('form.' . $field)" class="mt-2" />
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <x-primary-button class="text-sm font-semibold text-gray-900 dark:text-gray-100">{{ __('measurements.cancel') }}</x-primary-button>
    <x-primary-button type="submit" class="bg-foreground dark:bg-foreground/80 hover:bg-foreground/80 dark:hover:bg-foreground text-black dark:text-black">
      {{ __('measurements.save') }}
    </x-primary-button>
  </div>
</form>
