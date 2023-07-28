<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <div class="py-12">
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center items-center">
                                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg shadow-lg border border-5">
                                                <div class="max-w-7xl p-6 text-gray-900">
                                                    <form action="{{ route('storeStaff') }}" method="POST" class="p-6">
                                                        @csrf
                                                        <div class="mb-4">
                                                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Name:">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="email" class="block text-gray-700 font-bold mb-2">Age:</label>
                                                            <input type="number" name="age" class="form-control" placeholder="Age:">
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="gender" class="block text-gray-700 font-bold mb-2">Gender: </label>
                                                            <select name="gender" id="gender" class="form-control">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <input type="number" name="user_id" value="{{ Auth::user()->id }}" style="display: none;">
                                                        <div class="flex justify-center">
                                                            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-7 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>