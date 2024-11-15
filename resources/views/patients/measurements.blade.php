<x-app-layout>
  <x-slot name="header">
    <x-patient-navigation :patient="$patient" />
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ __('Measurements for') }} {{ $patient->name }}</h1>
    
    @if($measurements->isEmpty())
        <p class="mt-4 text-gray-700 dark:text-gray-300">{{ __('No measurements available for this patient.') }}</p>
    @else
        <div class="overflow-x-auto mt-6">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('Date') }}</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('Body Mass (kg)') }}</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('Stretch Stature (cm)') }}</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('Sitting Height (cm)') }}</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('Arms Span (cm)') }}</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($measurements as $measurement)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{ $measurement->created_at->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{ $measurement->body_mass }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{ $measurement->stretch_stature }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{ $measurement->sitting_height }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{ $measurement->arms_span }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                <a href="" class="text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a>
                                <form action="" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">{{ __('Delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    </div>
  </div>
</x-app-layout>
