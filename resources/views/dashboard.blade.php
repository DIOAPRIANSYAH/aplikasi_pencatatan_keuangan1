<x-app-layout>
    <x-slot name="header">
        <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
            <h2 class="text-xl font-semibold leading-tight">
                DASHBOARD </h2>
        </div>

    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __('Selamat Datang ') }} <b>{{ Auth::user()->name }} !</b>

    </div>

</x-app-layout>
