<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Presensi
        </h2>
    </x-slot>

    <div class="container mx-auto p-6 space-y-8">
        @include('dashboard.partials.presensi-header')
        @include('dashboard.partials.presensi-stats')
        @include('dashboard.partials.presensi-actions')
        @include('dashboard.partials.presensi-table')
    </div>
</x-app-layout>