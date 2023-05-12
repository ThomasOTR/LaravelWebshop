<x-app-layout>

    <section class="bg-gray-200">
        <div class="flex justify-center">
            <div class="px-20 py-32 lg:w-1/2">
                <div class="w-full">
                    <h1 class="mb-2 text-4xl font-medium text-gray-900">Welcome to this Webshop</h1>
                    <div class="leading-relaxed">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus hic, iure vel commodi voluptatibus, tenetur ipsum.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-20">
        <div class="mb-12 flex flex-col items-center justify-center">
            <h2 class="text-3xl font-semibold text-gray-800">Featured Products</h2>
            <div class="w-24 border-b-4 border-yellow-400"></div>
        </div>
        <div class="grid gap-2 md:grid-cols-4">
            @foreach($products as $product)
            <div class="relative mx-6">
                <div class="rounded-lg bg-white shadow-md">
                    <img src="{{$product->image_url}}" class="w-full rounded-t-lg" />
                    <div class="absolute bottom-32 right-4 rounded-xl bg-yellow-500 px-2 py-0.5 text-white">{{$product->collection->name}}</div>
                    <div class="p-6">
                        <h2 class="mb-2 text-2xl font-medium text-gray-800">{{$product->name}}</h2>
                        <a href="{{route('product.show',$product)}}" class="text-base text-yellow-600">Read More </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="container mx-auto mt-20">
        <div class="mb-12 flex flex-col items-center justify-center">
            <h2 class="text-3xl font-semibold text-gray-800">Collections</h2>
            <div class="w-24 border-b-4 border-yellow-400"></div>
        </div>
        <div class="grid gap-2 md:grid-cols-4">
        @foreach($collections as $collection)
            <div class="relative mx-6">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="p-6">
                        <h2 class="mb-2 text-2xl font-medium text-gray-800">{{$collection->name}}</h2>
                        <a href="{{route('collection.show',$product)}}" class="text-base text-yellow-600">Read More </a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </section>
</x-app-layout>
