<x-app-layout>
    <x-slot name="header">
        <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
            <h2 class="text-xl font-semibold leading-tight">
                OPERASIONAL PRODUKSI
            </h2>
        </div>

    </x-slot>

    <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">

        <x-button href="#" variant="blue" class="items-end max-w-xs gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                <path d="M4 22h12v-2H4V8H2v12c0 1.103.897 2 2 2z"></path>
                <path
                    d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-2 9h-3v3h-2v-3h-3V9h3V6h2v3h3v2z">
                </path>
            </svg>
            <span>Tambah Data</span>
        </x-button>
        <x-button href="#" variant="danger" class="items-end max-w-xs gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
            </svg>
            <span>Cetak</span>
        </x-button>

    </div>


    <div class="py-6">

        <div class="grid items-center gap-4  border border-white">
            <table class="table text-center border border-white ">
                <thead class="thead-dark bg-white">
                    <tr class="border border-white text-black">
                        <th class="border border-white" scope="col">No</th>
                        <th class="border border-white" scope="col">Kode Transaksi</th>
                        <th class="border border-white" scope="col">Deskripsi</th>
                        <th class="border border-white" scope="col">Jumlah</th>
                        <th class="border border-white" scope="col">Updated at</th>
                        <th class="border border-white" scope="col">Creaated at</th>
                        <th class="border border-white" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($op as $key => $item)
                        <tr class="border border-white">
                            <th class="border border-white" scope="row">{{ ++$key }}</th>
                            <td class="border border-white">{{ $item->kode_transaksi }}</td>
                            <td class="border border-white">{{ $item->deskripsi }}</td>
                            <td class="border border-white">Rp.{{ $item->jumlah }}</td>
                            <td class="border border-white">{{ $item->updated_at }}</td>
                            <td class="border border-white">{{ $item->created_at }}</td>
                            <td class="border border-white">
                                <button
                                    class="bg-blue-500  max-w-xs gap-2 hover:bg-blue-700 text-white ml-1 mt-2 mb-2 py-2 px-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                                <button
                                    class="bg-green-500  max-w-xs gap-2 hover:bg-green-700 ml-1 text-white py-2 px-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </button>
                                <button
                                    class="bg-red-500  max-w-xs gap-2 hover:bg-red-700 ml-1 text-white py-2 px-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
