<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-white p-8 shadow-md h-100 w-200 border mb-1">
                        <!-- Card content goes here -->
                        <h2 class="text-xl font-bold mb-4">Products</h2>
                        <p class="float-right font-bold">{{ count($productData) }}</p>
                    </div>
                    <div class="bg-white p-8 shadow-md h-100 w-200 border mt-1">
                        <!-- Card content goes here -->
                        <h2 class="text-xl font-bold mb-4">Staff</h2>
                        <p class="float-right font-bold">{{ count($staffData) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
