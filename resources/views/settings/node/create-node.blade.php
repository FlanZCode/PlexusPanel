<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a new Node') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('store-node') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block font-bold text-gray-700 dark:text-gray-200">Name : </label>
                            <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg bg-gray-100 dark:bg-gray-700" required>
                        </div>

                        <div class="mb-4">
                            <label for="location" class="block font-bold text-gray-700 dark:text-gray-200">Location : </label>
                            <input type="text" name="location" id="location" class="w-full px-4 py-2 border rounded-lg bg-gray-100 dark:bg-gray-700" required>
                        </div>

                        <div class="mb-4 flex items-center">
                            <label for="ram" class="block font-bold text-gray-700 dark:text-gray-200">RAM : </label>
                            <input type="text" name="ram" id="ram" class="w-1/2 px-4 py-2 border rounded-lg mr-2 bg-gray-100 dark:bg-gray-700" required>
                            <select name="ram_unit" id="ram_unit" class="w-1/4 px-4 py-2 border rounded-lg bg-gray-100 dark:bg-gray-700" required>
                                <option value="MB">MB</option>
                                <option value="GB">GB</option>
                                <option value="TB">TB</option>
                            </select>
                        </div>

                        <div class="mb-4 flex items-center">
                            <label for="storage" class="block font-bold text-gray-700 dark:text-gray-200">Storage:</label>
                            <input type="text" name="storage" id="storage" class="w-1/2 px-4 py-2 border rounded-lg mr-2 bg-gray-100 dark:bg-gray-700" required>
                            <select name="storage_unit" id="storage_unit" class="w-1/4 px-4 py-2 border rounded-lg bg-gray-100 dark:bg-gray-700" required>
                                <option value="MB">MB</option>
                                <option value="GB">GB</option>
                                <option value="TB">TB</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="cores" class="block font-bold text-gray-700 dark:text-gray-200">Cores:</label>
                            <input type="text" name="cores" id="cores" class="w-full px-4 py-2 border rounded-lg bg-gray-100 dark:bg-gray-700" required>
                        </div>

                        <div class="text-lg font-semibold mb-4">
                            <a href="{{ route('create-node') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Create Node
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>