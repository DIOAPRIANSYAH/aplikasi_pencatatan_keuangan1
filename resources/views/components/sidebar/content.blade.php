<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Produksi" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'buttons',
    )">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="PIC" href="{{ route('pages.produksi.pic') }}" :active="request()->routeIs('pages.produksi.pic')" />
        <x-sidebar.sublink title="Operasional" href="{{ route('pages.produksi.operasional') }}" :active="request()->routeIs('pages.produksi.operasional')" />
        <x-sidebar.sublink title="Pemasukan" href="{{ route('pages.produksi.pemasukan') }}" :active="request()->routeIs('pages.produksi.pemasukan')" />
        <x-sidebar.sublink title="Pengeluaran" href="{{ route('pages.produksi.pengeluaran') }}" :active="request()->routeIs('pages.produksi.pengeluaran')" />
        <x-sidebar.sublink title="Laporan" href="{{ route('pages.produksi.laporan') }}" :active="request()->routeIs('pages.produksi.laporan')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Distribusi" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'buttons',
    )">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="PIC" href="{{ route('pages.distribusi.pic') }}" :active="request()->routeIs('pages.distribusi.pic')" />
        <x-sidebar.sublink title="Operasional" href="{{ route('pages.distribusi.operasional') }}" :active="request()->routeIs('pages.distribusi.operasional')" />
        <x-sidebar.sublink title="Pemasukan" href="{{ route('pages.distribusi.pemasukan') }}" :active="request()->routeIs('pages.distribusi.pemasukan')" />
        <x-sidebar.sublink title="Pengeluaran" href="{{ route('pages.distribusi.pengeluaran') }}" :active="request()->routeIs('pages.distribusi.pengeluaran')" />
        <x-sidebar.sublink title="Laporan" href="{{ route('buttons.text-icon') }}" :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Delivery" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'buttons',
    )">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="PIC" href="{{ route('pages.delivery.pic') }}" :active="request()->routeIs('pages.delivery.pic')" />
        <x-sidebar.sublink title="Operasional" href="{{ route('pages.delivery.operasional') }}" :active="request()->routeIs('pages.delivery.operasional')" />
        <x-sidebar.sublink title="Pemasukan" href="{{ route('pages.delivery.pemasukan') }}" :active="request()->routeIs('pages.delivery.pemasukan')" />
        <x-sidebar.sublink title="Pengeluaran" href="{{ route('pages.delivery.pengeluaran') }}" :active="request()->routeIs('pages.delivery.pengeluaran')" />
        <x-sidebar.sublink title="Laporan" href="{{ route('buttons.text-icon') }}" :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown>


</x-perfect-scrollbar>
