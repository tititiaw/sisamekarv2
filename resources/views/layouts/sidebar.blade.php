
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
          
            <x-responsive-nav-link :href="route('kelas.index')" 
            :active="request()->routeIs('kelas.*')">
               Kelas
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('presensi.index')" 
            :active="request()->routeIs('presensi.*')">
               Presensi
            </x-responsive-nav-link>
        </div>
        