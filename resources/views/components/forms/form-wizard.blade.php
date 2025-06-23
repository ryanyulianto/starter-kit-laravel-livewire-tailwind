@props(['total_step', 'current_step' => 1, 'wizard_title' => null, 'cancel_route' => null])
<!-- Alpine.js Form Wizard -->
<div x-data="{
    currentStep: {{ $current_step }},
    totalSteps: {{ $total_step }},
    goToStep(step) {
        if (step >= 1 && step <= this.totalSteps) {
            if (step > this.currentStep) {
                // Add validation logic here if needed before proceeding
            }
            this.currentStep = step;
            // We'll scroll the content area instead of the whole page
            document.getElementById('wizard-content-area').scrollTop = 0;
        }
    },
    isStepComplete(step) {
        // Logic to determine if a step is complete can be added here
        return step < this.currentStep;
    }
}" class="flex relative flex-col h-[85vh]">
    <!-- Header with Progress - Fixed at top -->
    <div class="sticky top-0 right-0 left-0 z-10 bg-[var(--bg-1)] border-b border-[var(--border)]">
        <div class="p-4">
            @if ($wizard_title !== null)
                <h2 class="mb-5 text-xl font-bold text-gray-900 dark:text-white">{{ $wizard_title }}</h2>
            @endif
            <!-- Progress indicator -->
            <div class="relative">
                <div class="grid overflow-y-auto relative z-10 grid-cols-2 gap-2 md:grid-cols-4 lg:grid-cols-4">
                    {{ $header }}
                </div>
            </div>
        </div>
    </div>

    <!-- Form Content Area - Scrollable -->
    <div id="wizard-content-area" class="overflow-y-auto flex-1 px-6 py-8 bg-[var(--bg-1)]">
        {{ $content }}
    </div>

    <!-- Navigation Buttons - Fixed at bottom -->
    <div class="sticky right-0 bottom-0 left-0 p-4 border-t border-gray-200 bg-[var(--bg-1)] dark:border-gray-700">
        <div class="flex justify-between items-center">
            <!-- Back Button -->
            <div>
                <x-buttons.button iconClass="ti ti-arrow-left" iconPosition="left" color="default" size="md"
                    class="cursor-pointer" x-show="currentStep > 1"
                    @click="goToStep(currentStep > 1 ? currentStep - 1 : currentStep)">
                    Sebelumnya
                </x-buttons.button>
            </div>

            <div class="flex space-x-3">
                <!-- Cancel Button -->
                @if ($cancel_route !== null)
                    <a href="{{ $cancel_route }}"
                        class="inline-flex items-center px-4 py-2.5 text-sm font-medium text-white bg-red-600 rounded-lg transition-colors hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                        Batal
                    </a>
                @endif

                <!-- Next Button -->

                <x-buttons.button iconClass="ti ti-arrow-right" iconPosition="right" color="primary" size="md"
                    class="cursor-pointer" x-show="currentStep < totalSteps" @click="goToStep(currentStep + 1)">
                    Selanjutnya
                </x-buttons.button>

                <!-- Submit Button -->
                <x-buttons.button iconClass="ti ti-check" iconPosition="right" color="success" size="md"
                    target="{{ Arr::get($attributes, 'wire:target', null) }}"
                    class="cursor-pointer" x-show="currentStep === totalSteps" type="submit"
                    @click="goToStep(currentStep + 1)">
                    Simpan Data
                </x-buttons.button>
            </div>
        </div>
    </div>
</div>