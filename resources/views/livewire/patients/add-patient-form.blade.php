<?php

use App\Livewire\Forms\PatientForm;

use function Livewire\Volt\{form, state};

form(PatientForm::class);

$add_user = function () {
  $this->validate();

  auth()->user()->patients()->create($this->form->all());

  return $this->redirect('/dashboard');
}

?>

<div>
  <form wire:submit="add_user">
    <div>
      <x-input-label for="name" :value="__('patients.name')" />
      <x-text-input wire:model="form.name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
    </div>

    <div class="mt-2">
      <x-input-label for="email" :value="__('patients.email')" />
      <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="email" />
      <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
    </div>


    <div class="mt-2">
      <x-input-label for="phone_number" :value="__('patients.phone_number')" />
      <x-text-input wire:model="form.phone_number" id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" required autofocus autocomplete="phone_number" />
      <x-input-error :messages="$errors->get('form.phone_number')" class="mt-2" />
    </div>

    <div class="mt-2">
      <x-input-label :value="__('patients.gender')" />

      <div class="flex">
        <x-text-input wire:model="form.gender" id="gender_m" value="M" class="block mt-1 w-4" type="radio" name="gender" required autofocus autocomplete="gender" />
        <x-input-label class="ml-2 mr-4" for="gender_m" value="M" />
        <x-text-input wire:model="form.gender" id="gender_f" value="F" class="block mt-1 w-4" type="radio" name="gender" required autofocus autocomplete="gender" />
        <x-input-label class="ml-2" for="gender_f" value="F" />
      </div>
      <x-input-error :messages="$errors->get('form.gender')" class="mt-2" />
    </div>

    <div class="mt-2">
      <x-input-label for="date_of_birth" :value="__('patients.date_of_birth')" />
      <x-text-input wire:model="form.date_of_birth" id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" required autofocus autocomplete="date_of_birth" />
      <x-input-error :messages="$errors->get('form.date_of_birth')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
      <x-primary-button class="ms-3">
        {{ __('patients.create') }}
      </x-primary-button>
    </div>
  </form>
</div>
