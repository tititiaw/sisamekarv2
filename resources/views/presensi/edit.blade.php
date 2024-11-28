<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Presensi
        </h2>
    </x-slot>

    <x-content>
        <form method="post" action="{{ route('presensi.update', $presensi->id) }}" 
            enctype="multipart/form-data"
            class="mt-6 space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <x-input-label for="name" value="Nama Siswa" />
                <x-text-input id="name" name="name" type="text"
                    value="{{ old('name', $presensi->name) }}" class="mt-1 block w-full" /> 
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="nis" value="NIS" />
                <x-text-input id="nis" name="nis" type="text"
                    value="{{ old('nis', $presensi->nis) }}" class="mt-1 block w-full" /> 
                <x-input-error class="mt-2" :messages="$errors->get('nis')" />
            </div>

            <div>
                <x-input-label for="gender" value="Jenis Kelamin" />
                <x-select id="gender" name="gender" class="mt-1 block w-full">
                    <option value="B" {{ old('gender', $presensi->gender) == 'B' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="G" {{ old('gender', $presensi->gender) == 'G' ? 'selected' : '' }}>Perempuan</option>
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>

            <div>
                <x-input-label for="kelas_id" value="Kelas" />
                <x-select id="kelas_id" name="kelas_id" class="mt-1 block w-full">
                    @foreach($kelass as $kelas)
                        <option value="{{ $kelas->id }}" 
                            {{ old('kelas_id', $presensi->kelas_id) == $kelas->id ? 'selected' : '' }}>
                            {{ $kelas->name }}
                        </option>
                    @endforeach
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('kelas_id')" />
            </div>

            <div>
                <x-input-label for="tanggal" value="Tanggal Absensi" />
                <x-text-input id="tanggal" name="tanggal" type="date"
                    value="{{ old('tanggal', $presensi->tanggal) }}" class="mt-1 block w-full" /> 
                <x-input-error class="mt-2" :messages="$errors->get('tanggal')" />
            </div>

            <div>
                <x-input-label for="status_kehadiran" value="Status Kehadiran" />
                <x-select id="status_kehadiran" name="status_kehadiran" class="mt-1 block w-full">
                    @foreach(['Hadir', 'Sakit', 'Izin', 'Alpa'] as $status)
                        <option value="{{ $status }}" 
                            {{ old('status_kehadiran', $presensi->status_kehadiran) == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('status_kehadiran')" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>Simpan</x-primary-button>
                <a href="{{ route('presensi.index') }}" class="text-gray-600 hover:text-gray-900">
                    Batal
                </a>
            </div>
        </form>
    </x-content>
</x-app-layout>