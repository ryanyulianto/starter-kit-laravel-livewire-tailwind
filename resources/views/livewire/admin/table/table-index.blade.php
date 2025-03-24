<div>



    <h1 class="text-2xl font-semibold text-gray-600">Component Table</h1>

    <div class="mt-4 bg-white rounded-lg">
        <div class="flex items-center justify-between p-4">
            <h1 class="font-semibold text-gray-600 ">Daftar Karyawan</h1>
            <div class="w-full max-w-xs">
                <x-forms.search />
            </div>
        </div>
        <x-tables.table>
            <x-slot:thead>
                <tr>
                    <x-tables.th class="!w-5 !text-center">
                        No
                    </x-tables.th>
                    <x-tables.th>
                        Nama Karyawan
                    </x-tables.th>
                    <x-tables.th>
                        Jabatan
                    </x-tables.th>
                    <x-tables.th>
                        Divisi
                    </x-tables.th>
                    <x-tables.th>
                        No. Telpn
                    </x-tables.th>
                    <x-tables.th>
                        Aksi
                    </x-tables.th>

                </tr>
            </x-slot:thead>
            <x-slot:tbody>
                @foreach ($this->datas as $item)
                    <tr>
                        <x-tables.td class="!text-center">
                            {{ ($this->datas->currentPage() - 1) * $this->datas->perPage() + $loop->iteration }}
                        </x-tables.td>
                        <x-tables.td>
                            {{ $item?->name }}
                        </x-tables.td>
                        <x-tables.td>
                            {{ $item?->jabatan }}
                        </x-tables.td>
                        <x-tables.td>
                            {{ $item?->divisi }}
                        </x-tables.td>
                        <x-tables.td>
                            {{ $item?->no_telpn }}
                        </x-tables.td>
                        <x-tables.td>
                            sdsd
                        </x-tables.td>
                    </tr>
                @endforeach
            </x-slot:tbody>
        </x-tables.table>

        <div class="flex justify-end p-4">
            {{ $this->datas->links('vendor.pagination.default-pagination') }}
        </div>
    </div>
</div>
