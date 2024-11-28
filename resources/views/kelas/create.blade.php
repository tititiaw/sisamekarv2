
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            KELAS
        </h2>
    </x-slot>

    <x-content>
    <form method="post" action="{{ route('kelas.store') }}" class="mt-6 space-y-6">
        @csrf
    
        <div>
            <x-input-label for="name" value="Nama Kelas" />
            <x-text-input id="name" name="name" type="text"
            value="{{ old('name') }}" class="mt-1 block w-full" /> 
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <x-primary-button>Simpan</x-primary-button>
        </form>
    </x-content>
</x-app-layout>
