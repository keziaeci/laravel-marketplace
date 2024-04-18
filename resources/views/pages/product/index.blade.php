<x-app-layout>
    <div class="m-5 flex justify-between items-center">
        <x-input placeholder="search something" />
        <x-dropdown>
            <x-dropdown.item label="Settings" />
            {{-- <x-dropdown.item href='/f' wire:navigate label="Settings" /> --}}
            <x-dropdown.item label="My Profile" />
            <x-dropdown.item label="Logout" />
        </x-dropdown>
    </div>
</x-app-layout>