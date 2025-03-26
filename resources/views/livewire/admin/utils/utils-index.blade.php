<div>

    <div class="p-4 bg-[var(--bg-1)] rounded-lg ">
        <h1 class="text-xl font-semibold">Button</h1>

        {{-- <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2 lg:grid-cols-4"> --}}


            {{-- <div class="min-h-screen p-8 bg-gray-50"> --}}
                <!-- Solid Buttons -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Solid Buttons</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-buttons.button>Default</x-buttons.button>
                        <x-buttons.button color="primary">Primary</x-buttons.button>
                        <x-buttons.button color="secondary">Secondary</x-buttons.button>
                        <x-buttons.button color="accent">Accent</x-buttons.button>
                        <x-buttons.button color="success">Success</x-buttons.button>
                        <x-buttons.button color="danger">Danger</x-buttons.button>
                        <x-buttons.button color="warning">Warning</x-buttons.button>
                    </div>
                </div>

                <!-- Outline Buttons -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Outline Buttons</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-buttons.button variant="outline">Default</x-buttons.button>
                        <x-buttons.button variant="outline" color="primary">Primary</x-buttons.button>
                        <x-buttons.button variant="outline" color="secondary">Secondary</x-buttons.button>
                        <x-buttons.button variant="outline" color="accent">Accent</x-buttons.button>
                        <x-buttons.button variant="outline" color="success">Success</x-buttons.button>
                        <x-buttons.button variant="outline" color="danger">Danger</x-buttons.button>
                        <x-buttons.button variant="outline" color="warning">Warning</x-buttons.button>
                    </div>
                </div>

                <!-- Soft Buttons -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Soft Buttons</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-buttons.button variant="soft">Default</x-buttons.button>
                        <x-buttons.button variant="soft" color="primary">Primary</x-buttons.button>
                        <x-buttons.button variant="soft" color="secondary">Secondary</x-buttons.button>
                        <x-buttons.button variant="soft" color="accent">Accent</x-buttons.button>
                        <x-buttons.button variant="soft" color="success">Success</x-buttons.button>
                        <x-buttons.button variant="soft" color="danger">Danger</x-buttons.button>
                        <x-buttons.button variant="soft" color="warning">Warning</x-buttons.button>
                    </div>
                </div>

                <!-- Loading States -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Loading States</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-buttons.button iconClass="ti ti-device-floppy" target="loadingButton" wire:click="loadingButton"
                            color="primary">
                            Save Changes
                        </x-buttons.button>
                        <x-buttons.button iconClass="ti ti-check" target="loadingButton" wire:click="loadingButton"
                            color="success" variant="outline">
                            Confirm Action
                        </x-buttons.button>
                        <x-buttons.button iconClass="ti ti-trash" target="loadingButton" wire:click="loadingButton"
                            color="danger" variant="soft">
                            Delete Item
                        </x-buttons.button>
                        <x-buttons.button iconClass="ti ti-send" target="loadingButton" wire:click="loadingButton"
                            color="accent">
                            Send Message
                        </x-buttons.button>
                    </div>
                </div>

                <!-- Sizes -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Button Sizes</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-5">
                        
                        <x-buttons.button size="xs" color="primary">Extra Small</x-buttons.button>
                        <x-buttons.button size="sm" color="primary">Small</x-buttons.button>
                        <x-buttons.button size="md" color="primary">Medium</x-buttons.button>
                        <x-buttons.button size="lg" color="primary">Large</x-buttons.button>
                        <x-buttons.button size="xl" color="primary">Extra Large</x-buttons.button>
                    </div>
                </div>

                <!-- With Icons -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Buttons with Icons</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-buttons.button iconClass="ti ti-plus" color="primary">Add New</x-buttons.button>
                        <x-buttons.button iconClass="ti ti-trash" color="danger">Delete</x-buttons.button>
                        <x-buttons.button iconClass="ti ti-edit" color="accent">Edit</x-buttons.button>
                        <x-buttons.button iconClass="ti ti-arrow-right" iconPosition="right" color="success">Next</x-buttons.button>
                    </div>
                </div>

                <!-- Full Width -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Full Width Buttons</h2>
                    <div class="space-y-4">
                        <x-buttons.button fullWidth color="primary" iconClass="ti ti-plus">Full Width Primary</x-buttons.button>
                        <x-buttons.button fullWidth variant="outline" color="accent" iconClass="ti ti-check">Full Width
                            Outline</x-buttons.button>
                        <x-buttons.button fullWidth variant="soft" color="success" iconClass="ti ti-arrow-right"
                            iconPosition="right">Full Width Soft</x-buttons.button>
                    </div>
                </div>

                <!-- With Shadow -->
                <div class="mb-8 space-y-4">
                    <h2 class="text-xl font-semibold">Shadow Buttons</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-buttons.button isShadow color="primary">Primary Shadow</x-buttons.button>
                        <x-buttons.button isShadow color="accent" variant="outline">Accent Shadow</x-buttons.button>
                        <x-buttons.button isShadow color="success" variant="soft">Success Shadow</x-buttons.button>
                        <x-buttons.button isShadow color="warning">Warning Shadow</x-buttons.button>
                    </div>
                </div>

                <!-- Links -->
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold">Button Links</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-buttons.button href="#" color="primary">Link Button</x-buttons.button>
                        <x-buttons.button href="#" color="accent" variant="outline">Outline Link</x-buttons.button>
                        <x-buttons.button href="#" color="success" variant="soft">Soft Link</x-buttons.button>
                        <x-buttons.button href="#" color="warning" iconClass="ti ti-external-link"
                            iconPosition="right">External Link</x-buttons.button>
                    </div>
                </div>
            {{-- </div> --}}

        {{-- </div> --}}

    </div>

</div>
