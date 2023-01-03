<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href={{ route('admin.tables.index') }}
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index
                </a>
            </div>

            <div class="m-2 p-2">

                <form method="POST" action={{ route('admin.tables.store') }}>
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Table
                            Name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name') border-red-400 @enderror"
                            placeholder="Table name">
                        @error('name')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="guest_number">Guest
                            number</label>
                        <input
                            class="block p-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('guest_number') border-red-400 @enderror"
                            placeholder="0" id="guest_number" name="guest_number" type="number">
                        @error('guest_number')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 ">Status</label>
                        <select id="status" name="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('status') border-red-400 @enderror">
                            <option selected disabled>Choose a status</option>
                            @foreach (App\Enums\TableStatus::cases() as $status)
                                <option value={{ $status->value }}>{{ $status->name }} </option>
                            @endforeach
                        </select>
                        @error('status')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 ">Location</label>
                        <select id="location" name="location"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('location') border-red-400 @enderror">
                            <option selected disabled>Choose a location</option>
                            @foreach (App\Enums\TableLocation::cases() as $location)
                                <option value={{ $location->value }}>{{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error('location')
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
