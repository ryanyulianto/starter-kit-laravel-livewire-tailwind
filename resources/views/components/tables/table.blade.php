@props(['background' => true])

<div class="bg-white border border-gray-100">
    <div class="overflow-x-auto w-full" x-data="{ expanded: {} }">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                {{ $thead }}
            </thead>
            <tbody class="divide-y divide-gray-200">
                {{ $tbody }}
            </tbody>
        </table>
    </div>
</div>