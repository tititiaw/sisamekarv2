<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Header dengan Tanggal -->
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold">
                            Data Presensi
                        </h1>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span>{{ now()->isoFormat('dddd, D MMMM YYYY') }}</span>
                        </div>
                    </div>

                    <!-- Statistik Cards -->
                    <div class="grid gap-4 mb-6 md:grid-cols-2 lg:grid-cols-4">
                        <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm rounded-lg">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900">
                                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Siswa</div>
                                        <div class="text-lg font-semibold"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm rounded-lg">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-green-100 dark:bg-green-900">
                                        <svg class="h-6 w-6 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Hadir</div>
                                        <div class="text-lg font-semibold"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm rounded-lg">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900">
                                        <svg class="h-6 w-6 text-yellow-600 dark:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Sakit/Izin</div>
                                        <div class="text-lg font-semibold"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm rounded-lg">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-red-100 dark:bg-red-900">
                                        <svg class="h-6 w-6 text-red-600 dark:text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Alpa</div>
                                        <div class="text-lg font-semibold"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="mb-4 flex gap-2">
                        <a href="{{ route('presensi.create') }}">
                            <x-secondary-button>Tambah Data</x-secondary-button>
                        </a>  
                        <a href="{{ route('presensi.export') }}">
                            <x-secondary-button>Export Data</x-secondary-button>
                        </a>
                    </div>

                    <!-- Tabel Presensi -->
                    <!-- ... kode tabel yang sudah ada ... -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>