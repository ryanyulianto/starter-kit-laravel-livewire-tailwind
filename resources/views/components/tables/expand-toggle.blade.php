@props(['index' => 0])
<td class="px-4 py-3 w-10 text-center text-gray-500">
    <button 
        class="inline-flex justify-center items-center w-8 h-8 text-blue-800 rounded-full transition-colors hover:bg-blue-100"
        @click="expanded[{{ $index }}] = !expanded[{{ $index }}]">
        <i class="text-lg" :class="{'ti ti-chevron-up': expanded[{{ $index }}], 'ti ti-chevron-down': !expanded[{{ $index }}]}"></i>
    </button>
</td>