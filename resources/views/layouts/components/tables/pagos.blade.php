<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-violet-500 overflow-hidden shadow-xl sm:rounded-lg ">
                @livewire('pagos')
            </div>
        </div>
    </div>
    <div>
        @component('layouts.components.sidebar')@endcomponent
    </div>
</x-app-layout>
