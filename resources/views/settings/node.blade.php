<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Settings for node') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">List of Nodes</h3>

                    <!-- En-têtes des colonnes avec espacement -->
                    <div class="flex gap-6">
                        <div class="flex-1">Name</div>
                        <div class="flex-1">Location</div>
                        <div class="flex-1">RAM</div>
                        <div class="flex-1">Storage</div>
                        <div class="flex-1">Cores</div>
                    </div>

                    <!-- Données des nodes avec espacement -->
                    @foreach ($nodes as $node)
                        <div class="flex gap-6">
                            <div class="flex-1">{{ $node->name }}</div>
                            <div class="flex-1">{{ $node->location }}</div>
                            <div class="flex-1">{{ $node->ram }}{{ $node->ram_unit }}</div>
                            <div class="flex-1">{{ $node->storage }}{{ $node->storage_unit }}</div>
                            <div class="flex-1">{{ $node->cores }}</div>
                        </div>
                    @endforeach

                    <!-- Bouton "Create a node" -->
                    <div class="text-lg font-semibold mb-4">
                        <a href="{{ route('create-node') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create Node
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
