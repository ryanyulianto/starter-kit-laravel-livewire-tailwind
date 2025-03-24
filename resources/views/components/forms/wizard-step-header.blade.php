@props(['step', 'title'])
<div class="flex flex-row gap-2 items-center p-2 rounded-lg border cursor-pointer" @click="goToStep({{ $step }})">
    <button  type="button"
        class="flex justify-center items-center w-10 h-10 rounded-full transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        :class="{
            'bg-blue-600 text-white ring-2 ring-white dark:ring-gray-800 ring-offset-2 ring-offset-blue-100 ': currentStep == {{ $step }},
            'bg-green-600 text-white ring-2 ring-white dark:ring-gray-800 ring-offset-2 ring-offset-green-100 ': currentStep > {{ $step }},
            'bg-gray-200 text-gray-500 dark:bg-gray-700 dark:text-gray-400': currentStep < {{ $step }}
        }">
        <template x-if="isStepComplete({{ $step }})">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </template>
        <template x-if="!isStepComplete({{ $step }})">
            <span>{{ $step }}</span>
        </template>
    </button>
    <span class="text-xs font-medium transition-colors duration-300"
        :class="{'text-blue-600 ': currentStep == {{ $step }},'text-green-600 ': currentStep > {{ $step }}, 'text-gray-500 dark:text-gray-400': currentStep < {{ $step }}}">
        {{ $title }}
    </span>
</div>