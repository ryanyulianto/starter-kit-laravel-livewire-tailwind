<div>

    <div>

        <div class="mt-4">
            <x-forms.form-wizard total_step="2">
                <x-slot:header>
                    <x-forms.wizard-step-header step="1" title="Step 1" />
                    <x-forms.wizard-step-header step="2" title="Step 2" />
                </x-slot:header>

                <x-slot:content>
                    <x-forms.wizard-content step="1">
                        <div class="space-y-3">
                            <h2 class="text-lg font-semibold">Form Prestasi</h2>
                            <!-- The Livewire property must be an array -->

                            <x-ts-upload multiple wire:model="image" />
                            @foreach ($inputs as $index => $input)
                                <div class="flex items-end gap-2">
                                    <div class="w-full">
                                        <x-ts-input wire:model="inputs.{{ $index }}.name">
                                            <x-slot:label>
                                                <span>Name</span>
                                            </x-slot:label>
                                        </x-ts-input>
                                    </div>
                                    <div class="max-w-sm">
                                        <x-ts-input wire:model="inputs.{{ $index }}.year" type="number">
                                            <x-slot:label>
                                                <span>Tahun</span>
                                            </x-slot:label>
                                        </x-ts-input>
                                    </div>

                                    <x-buttons.button iconClass="ti ti-trash text-xl" variant="soft" color="danger"
                                        wire:click="removeInput({{ $index }})"
                                        target="removeInput({{ $index }})" :isScale="false" />
                                </div>
                            @endforeach
                            <div class="grid grid-cols-2 gap-2 max-w-sm">
                                <x-buttons.button iconClass="ti ti-plus" color="primary" wire:click="addInput"
                                    target="addInput">
                                    Tambah Prestasi
                                </x-buttons.button>
                                <x-buttons.button iconClass="ti ti-plus" color="primary" wire:click="showToast"
                                    target="showToast">
                                    Tampilkan Toast
                                </x-buttons.button>
                            </div>

                        </div>

                    </x-forms.wizard-content>
                    <x-forms.wizard-content step="2">
                        Ini Page 2
                    </x-forms.wizard-content>
                </x-slot:content>
            </x-forms.form-wizard>
        </div>
    </div>
</div>
