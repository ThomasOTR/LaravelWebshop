<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('New Product') }}
                            </h2>
                        </header>
                        <form method="post" action="{{ route('product.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"/>
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Price')" />
                                <x-text-input id="price" name="price" type="number" step="0.01" class="mt-1 block w-full" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('description')" />
                                <textarea id="description" name="description" class="mt-1 block w-full"></textarea>
                            </div>
                            <div>
                                <x-input-label for="collection_id" :value="__('Collection')" />
                                <select class="form-control" name="collection_id" id="collection_id">
                                    <option>Select Collection</option>
                                    @foreach ($collections as $collection)
                                        <option value="{{ $collection->id }}">
                                            {{ $collection->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="flex items-center gap-4">
                                <x-primary-button> {{ __('Save') }} </x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
