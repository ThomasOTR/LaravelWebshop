<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Collection Overview') }}
        </h2>
    </x-slot>

    <section class="container mx-auto mt-20">
        <div class="mb-12 flex flex-col items-center justify-center">
            <h2 class="text-3xl font-semibold text-gray-800">{{$collection->name}}</h2>
            <div class="w-24 border-b-4 border-yellow-400"></div>
        </div>
        <div class="grid gap-2 md:grid-cols-4">
            @foreach($collection->products as $product)
                <div class="relative mx-6">
                    <div class="rounded-lg bg-white shadow-md">
                        <img src="{{$product->image_url}}" class="w-full rounded-t-lg" />
                        <div class="p-6">
                            <h2 class="mb-2 text-2xl font-medium text-gray-800">{{$product->name}}</h2>
                            <a href="{{route('product.show',$product)}}" class="text-base text-yellow-600">Read More </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
