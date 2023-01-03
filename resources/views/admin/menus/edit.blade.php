<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href={{ route('admin.menus.index') }}
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menu Index
                </a>
            </div>

            <div class="m-2 p-2">

                <form method="POST" action={{ route('admin.menus.update', $menu->id) }} enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Menu
                            Name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name') border-red-400 @enderror"
                            placeholder="Your name" value={{ $menu->name }}>
                        @error('name')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload file</label>
                        <div>
                            <img class="w-32 h-32" src="{{ Storage::url($menu->image) }}" />
                        </div>
                        <input
                            class="block p-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none @error('image') border-red-400 @enderror"
                            id="image" name="image" type="file">
                        @error('image')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                        <input type="number" id="price" name="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('price') border-red-400 @enderror"
                            placeholder="Rp 50000" value={{ $menu->price }}>
                        @error('price')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>



                    <div class="mb-6">

                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Description</label>
                        <textarea id="description" rows="4" name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-400 @enderror"
                            placeholder="Description...">{{ $menu->description }}</textarea>
                        @error('description')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror


                    </div>

                    <div class="mb-6">
                        <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 ">Select
                            category</label>
                        <select id="categories" name="categories[]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('categories') border-red-400 @enderror"
                            multiple>
                            <option selected disabled>Choose a Category</option>
                            @foreach ($categories as $category)
                                <option value={{ $category->id }} @selected($category->id == $menu->category_id)>
                                    {{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                        @error('categories')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror


                    </div>

                    <button type="submit"
                        class="block w-full px-4 py-2 rounded-lg text-white bg-indigo-500 hover:bg-indigo-700">Submit</button>
                </form>

            </div>



        </div>
    </div>
</x-admin-layout>
