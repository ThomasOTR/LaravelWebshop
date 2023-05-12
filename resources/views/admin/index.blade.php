<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin page') }}
        </h2>
        <div class=" lg:flex lg:gap-x-12">
            <a href="{{route('admin.users')}}" class="text-sm font-semibold leading-6 text-gray-900">Users</a>
            <a href="{{route('admin.products')}}" class="text-sm font-semibold leading-6 text-gray-900">Products</a>
            <a href="{{route('admin.collections')}}" class="text-sm font-semibold leading-6 text-gray-900">Collections</a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            On this Admin page you are able to create, update and delete collections, products and users. Navigate with the titles above.
                        </h2>
                    </header>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
