<head>
    <title>Settings of Plexus Panel</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    @include('components/settings-navbar')
</x-app-layout>
