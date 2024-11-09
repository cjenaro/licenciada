<?php

use App\Models\Patient;

use function Livewire\Volt\{state};

state(['p' => fn($patient) => Patient::find($patient)]);

?>

<div>
  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg dark:text-white/90 p-6">
    <div class="px-4 py-6 sm:px-6">
      <h3 class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">Patient Information</h3>
      <p class="mt-1 max-w-2xl text-sm/6 text-gray-500 dark:text-gray-300">Personal details and application.</p>
    </div>
    <div class="border-t border-gray-100 dark:border-gray-600">
      <dl class="divide-y divide-gray-100 dark:divide-gray-600">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('patients.name') }}</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $p->name }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('patients.email') }}</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $p->email }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('patients.date_of_birth') }}</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $p->date_of_birth }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('patients.phone_number') }}</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $p->phone_number }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-900 dark:text-gray-100">{{__('patients.gender')}}</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $p->gender }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm/6 font-medium text-gray-900 dark:text-gray-100">{{__('patients.attachments')}}</dt>
          <dd class="mt-2 text-sm text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">
            <ul role="list" class="divide-y divide-gray-100 dark:divide-gray-600 rounded-md border border-gray-200 dark:border-gray-600">
              <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                <div class="flex w-0 flex-1 items-center">
                  <svg class="h-5 w-5 shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />
                  </svg>
                  <div class="ml-4 flex min-w-0 flex-1 gap-2">
                    <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                    <span class="shrink-0 text-gray-400">2.4mb</span>
                  </div>
                </div>
                <div class="ml-4 shrink-0">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">{{ __('patients.download') }}</a>
                </div>
              </li>
              <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                <div class="flex w-0 flex-1 items-center">
                  <svg class="h-5 w-5 shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />
                  </svg>
                  <div class="ml-4 flex min-w-0 flex-1 gap-2">
                    <span class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                    <span class="shrink-0 text-gray-400">4.5mb</span>
                  </div>
                </div>
                <div class="ml-4 shrink-0">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">{{ __('patients.download') }}</a>
                </div>
              </li>
            </ul>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</div>
