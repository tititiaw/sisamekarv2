<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Data Rombel
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('kelas.create') }}">
                        <x-secondary-button>Tambah</x-secondary-botton>
                    </a>
                <x-table>
                    <x-slot:thead>
                        <tr>
                            <th class="p-3">No</th>
                            <th class="p-3">Nama Kelas</th>
                            <th class="p-3">Aksi</th>
                        </tr>
                    </x-slot:thead>
                    @foreach($kelass as $kelas)
                    <tr class="border-b">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $kelas->name }}</td>
                        <td class="p-3">
                        <a href="{{ route('kelas.edit',$kelas->id) }}">
                        <x-secondary-button class="mb-2">Edit</x-secondary-botton>
                    </a>
                    <form method="post" action="{{ route('kelas.destroy', $kelas->id )}}" 
                    class="ms-2 inline">
                    @csrf
                     @method('DELETE')
            
                    

                    <x-primary-button>Hapus</x-primary-button>
                 </form>
                        </td>

                    </tr>
                    @endforeach
                </x-table>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
