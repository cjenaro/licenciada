<?php

use function Livewire\Volt\{state, with};

state([
  'q' => ''
]);

with([
  'patients' => fn() => auth()->user()->patients()->where('name', 'LIKE', '%' . $this->q . '%')->get(),
]);
?>

<div>

  <div class="flex justify-between">
    <h3 class="text-2xl">{{ __('patients.patients') }}</h3>
    <a href="{{ route('patients.new') }}" class="px-4 py-2 bg-foreground/80 text-black rounded-lg" wire:navigate>&plus;&nbsp;&nbsp;{{ __('patients.add_patient') }}</a>
  </div>

  <x-text-input placeholder="{{ __('patients.search') }}" class="w-full rounded-lg my-4" type="search" wire:model.live="q" />


  @if(!$patients->isEmpty())
  <ul>
    @foreach($patients as $patient)
    <li class="border-b border-b-2 border-b-white/10 p-3 last:border-b-0 flex gap-x-2">{{ $patient->name }} <span>|</span> {{ $patient->email }} <a wire:navigate class="ml-auto translate-x-[-4px] hover:translate-x-0" href="{{ route('patient', ['patient' => $patient->id ]) }}">&rarr;</a></li>
    @endforeach
  </ul>
  @endif
</div>
