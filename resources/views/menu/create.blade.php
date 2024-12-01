<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">

        <div class="flex mt-6 justify-between items-center">
            <h2 class="font-semibold text-xl text-blue-600">Edit Menu</h2>
            @include('menus.delete')
        </div>

        <div class="mt-4" x-data="{ imageUrl: '/storage/{{$menu->foto}}' }">
            <form enctype="multipart/form-data" method="POST" action="{{ route('menus.update', $menu) }}" class="flex gap-8">
                @csrf
                @method('PUT')

                <div class="w-1/2">
                    <img :src="imageUrl" class="rounded-md">
                </div>
                <div class="w-1/2">
                    <div>
                        <x-input-label for="foto" :value="('foto')" />
                        <x-text-input accept="image/*" id="foto" class="block mt-1 w-full border" type="file" name="foto" :value="$menu->foto" required
                        @change="imageUrl = URL.createObjectUrl($event.target.files[0])"
                        />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="name" :value="('name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$menu->name" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="price" :value="('price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="$menu->price" x-mask:dynamic="$money($input, ',')" required />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="description" :value="('description')" />
                        <x-text-area id="description" class="block mt-1 w-full" type="text" name="description"> {{ $menu->description }}</x-text-area>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <x-primary-button class="justify-center w-full mt-5">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>



            </form>

        </div>


    </div>
</x-app-layout>
