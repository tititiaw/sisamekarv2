
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            PRESENSI
        </h2>
    </x-slot>

    <x-content>
    <form method="post" action="{{ route('presensi.store') }}" 
    enctype="multipart/form-data"
    class="mt-6 space-y-6">
        @csrf
    
        
        
            <!-- Nama Siswa -->
            <div>
                <x-input-label for="name" value="Nama Siswa" />
                <x-text-input id="name" name="name" type="text"
                value="{{ old('name') }}" class="mt-1 block w-full" /> 
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
        
            <!-- NIS -->
            <div>
                <x-input-label for="nis" value="NIS" />
                <x-text-input id="nis" name="nis" type="text"
                value="{{ old('nis') }}" class="mt-1 block w-full" /> 
                <x-input-error class="mt-2" :messages="$errors->get('nis')" />
            </div>
        
            <!-- Jenis Kelamin -->
            <div>
                <x-input-label for="gender" value="Jenis Kelamin" />
                <x-select id="gender" name="gender" class="mt-1 block w-full">
                    <option value='B' {{ old('gender') == 'B' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value='G' {{ old('gender') == 'G' ? 'selected' : '' }}>Perempuan</option>
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>
        
            <!-- Kelas -->
            <div>
                <x-input-label for="kelas_id" value="Kelas" />
                <x-select id="kelas_id" name="kelas_id" class="mt-1 block w-full">
                    @foreach($kelass as $kelas)
                        <option value="{{ $kelas->id }}" {{ old('kelas_id') == $kelas->id ? 'selected' : '' }}>
                            {{ $kelas->name }}
                        </option>
                    @endforeach
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('kelas_id')" />
            </div>
        
            <!-- Tanggal Absensi -->
            <div>
                <x-input-label for="tanggal" value="Tanggal Absensi" />
                <x-text-input id="tanggal" name="tanggal" type="date"
                value="{{ old('tanggal') }}" class="mt-1 block w-full" /> 
                <x-input-error class="mt-2" :messages="$errors->get('tanggal')" />
            </div>
        
            <!-- Status Kehadiran -->
            <div>
                <x-input-label for="status_kehadiran" value="Status Kehadiran" />
                <x-select id="status_kehadiran" name="status_kehadiran" class="mt-1 block w-full">
                    <option value="Hadir" {{ old('status_kehadiran') == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                    <option value="Sakit" {{ old('status_kehadiran') == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                    <option value="Izin" {{ old('status_kehadiran') == 'Izin' ? 'selected' : '' }}>Izin</option>
                    <option value="Alpa" {{ old('status_kehadiran') == 'Alpa' ? 'selected' : '' }}>Alpa</option>
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('status_kehadiran')" />
            </div>
        
            <!-- Tombol Simpan -->
            <div class="mt-4">
                <x-primary-button>Simpan</x-primary-button>
            </div>
        </form>
        
    </x-content>
</x-app-layout>
