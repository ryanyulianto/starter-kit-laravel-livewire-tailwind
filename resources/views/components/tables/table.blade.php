@props(['background' => true])

<div class="bg-[var(--bg-1)] ">
    <div class="overflow-x-auto w-full" x-data="{ expanded: {} }">
        <table class="min-w-full divide-y ">
            <thead class="bg-[var(--bg-2)]">
                {{ $thead }}
            </thead>
            <tbody class="divide-y">
                {{ $tbody }}
            </tbody>
        </table>
    </div>
</div>