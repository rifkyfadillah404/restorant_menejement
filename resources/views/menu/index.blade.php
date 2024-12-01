<x-app-layout>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="flex mt-6 items-center justify-between">

            </div>

            <div class="grid md:grid-cols-3 grid-cols-1 mt-4 gap-6 text-white">
                @foreach ($Menu as $Menu)
                <div>
                    <img src="{{ url('storage/' . $Menu->image) }}" class="w-full h-auto"/>
                    <div>
                        <p class="font-light text-xl">{{ $Menu->name }}</p>
                        <p class="font-semibold text-gray-500">Rp. {{ $Menu->price }}</p>
                        <p class="font-light text-xl">{{ $Menu->description }}</p>
                    </div>
                    <button class="bg-green-600 px-10 py-2 w-full rounded-md font-semibold">Order</button>
                </div>

                @endforeach
            </div>

            </div>
</x-app-layout>
