{{-- resources/views/components/dynamic-form.blade.php --}}
<div x-data="{ 
        items: {{ json_encode($items ?: [[]]) }},
        min: {{ $min }},
        add() {
            this.items.push({});
            this.updateWireModel();
        },
        remove(index) {
            if (this.items.length <= this.min) return;
            this.items.splice(index, 1);
            this.updateWireModel();
        },
        updateWireModel() {
            $wire.set('{{ $wireModel }}', this.items);
        }
    }" x-init="$watch('items', () => updateWireModel())">
    <template x-for="(item, index) in items" :key="index">
        <div class="p-4 mb-4 border rounded-md bg-gray-50">
            <div class="flex justify-between mb-3">
                <h4 class="font-medium">{{ $itemTitle }} #<span x-text="index + 1"></span></h4>
                <button type="button" x-show="items.length > min" @click="remove(index)"
                    class="text-red-600 hover:text-red-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div {{ $attributes->merge(['class' => '']) }}>
                {{ $slot }}
            </div>
        </div>
    </template>

    <button type="button" @click="add()"
        class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd" />
        </svg>
        {{ $buttonText }}
    </button>
</div>