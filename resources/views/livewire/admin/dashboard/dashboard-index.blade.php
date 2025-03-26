<div>

    <div class="">
        {{-- <h1>Form Wizard</h1> --}}
        <div class="mt-4">
            <x-forms.form-wizard total_step="2">
                <x-slot:header>
                    <x-forms.wizard-step-header step="1" title="Step 1" />
                    <x-forms.wizard-step-header step="2" title="Step 2" />
                </x-slot:header>

                <x-slot:content>
                    <x-forms.wizard-content step="1">
                    
                    </x-forms.wizard-content>
                    <x-forms.wizard-content step="2">
                        Ini Page 2
                    </x-forms.wizard-content>
                </x-slot:content>
            </x-forms.form-wizard>
        </div>
    </div>
</div>