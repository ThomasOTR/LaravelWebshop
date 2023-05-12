<x-app-layout>
    <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
        <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
            <img class="w-full"src="{{$product->image_url}}" />
        </div>
        <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
            <div class="border-b border-gray-200 pb-6">
                <p class="text-sm leading-none text-gray-600">{{$product->collection->name}}</p>
                <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 mt-2">{{$product->name}}</h1>
            </div>
            <div>
                <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 mt-7">{{$product->description}}</p>
            </div>
            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
                Buy
            </button>
        </div>
    </div>
</x-app-layout>
