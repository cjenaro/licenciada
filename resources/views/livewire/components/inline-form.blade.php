<?php


use function Livewire\Volt\{state};

state(['edit' => false,  'model' => fn($model) => $model, 'field' => fn($field) => $field, 'value' => fn($model, $field) => $model->{$field}, 'input_type' => 'text', 'options']);

$toggle = fn() => $this->edit = !$this->edit;

$submit = function () {
    $this->model->{$this->field} = $this->value;
    $this->model->save();
    $this->toggle('edit');
}

?>

<div class="flex justify-between">
    @if (!$edit)
    <span class="text-base inline-block px-3 py-2 border border-transparent">
        {{ $value }}
    </span>

    <button wire:click="toggle('edit')" class="text-indigo-500 dark:text-indigo-300">{{ __('patients.edit') }}</button>
    @else
    @if ($input_type == 'radio')
    <div class="flex gap-4 py-2">
        @foreach ($options as $option)
        <div class="flex gap-2 items-center">
            <x-text-input :value="$option" wire:model.defer="value" :type="$input_type" /><span>{{$option}}</span>
        </div>
        @endforeach
    </div>
    @else
    <x-text-input :value="$value" wire:model.defer="value" :type="$input_type" wire:keydown.enter="submit" />
    @endif
    <button wire:click="submit" class="text-indigo-500 dark:text-indigo-300">{{ __('patients.submit') }}</button>
    @endif
</div>
