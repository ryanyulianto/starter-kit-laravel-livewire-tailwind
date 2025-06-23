@props(['index' => 0])
<td class="px-4 py-3 w-10 text-center text-[var(--fg-2)]"  @click="expanded[{{ $index }}] = !expanded[{{ $index }}]">
    <button 
        class="inline-flex justify-center items-center w-8 h-8 text-[var(--fg-2)] rounded-full transition-colors "
       >
        <i class="text-lg" :class="{'ti ti-chevron-up': expanded[{{ $index }}], 'ti ti-chevron-down': !expanded[{{ $index }}]}"></i>
    </button>
</td>