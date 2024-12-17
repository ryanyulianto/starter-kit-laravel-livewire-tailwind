@props(['background' => true])

<div class="bg-white border border-gray-100 ">
    <div class="w-full overflow-x-auto ">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                {{ $thead }}
            </thead>
            <tbody>
                {{ $tbody }}
            </tbody>
        </table>
    </div>
</div>
