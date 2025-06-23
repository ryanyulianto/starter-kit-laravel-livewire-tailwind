<div>


    <x-ts-modal id="test-modal" size="2xl" z-index="z-50" center scrollable>
        <x-slot:title>
            TallStackUi
        </x-slot:title>
        <x-ts-select.styled :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
        ['label' => 'LIVT1', 'value' => 3],
        ['label' => 'LIVT2', 'value' => 4],
        ['label' => 'LIVT4', 'value' => 5],
    ]" searchable />
        <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore fugit quas ipsam possimus ut.
            Consequatur perferendis soluta, eligendi, voluptate itaque minus aliquid suscipit dolorem qui quaerat ipsum
            sunt debitis necessitatibus?</p>
    </x-ts-modal>

    <h1 class="text-2xl font-semibold text-[var(--fg-2)]">Component Table</h1>
    <div class="flex justify-end">
        <x-buttons.button iconClass="ti ti-plus" variant="solid" color="primary" x-on:click="$modalOpen('test-modal')">
            Tambah Data
        </x-buttons.button>
    </div>





    <div class="mt-4 bg-[var(--bg-1)] rounded-lg border border-[var(--border)]">
        <div class="flex items-center justify-between p-4">
            <h1 class="font-semibold ">Daftar Karyawan</h1>
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
                @foreach ($this->datas as $key => $item)
                    <tr wire:key="{{ $key }}">
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
                            {{ formatPhoneNumber($item?->no_telpn) }}
                        </x-tables.td>
                        <x-tables.td>
                            .
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