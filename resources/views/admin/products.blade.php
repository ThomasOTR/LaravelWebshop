<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                <a href="{{route('product.new')}}" class="">Create new Product</a>
                            </h2>
                        </header>
                        @if($products->count() != 0)
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-6 space-y-6">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Collection name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edit
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{$product->name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$product->collection->name}}
                                </td>
                                <td class="px-6 py-4">
                                    €{{$product->price}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('product.edit',$product)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form method="post" action="{{ route('product.destroy',$product) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        <h2>There are no products yet</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
