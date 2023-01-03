<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href={{ route('admin.reservations.index') }}
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservations Index
                </a>
            </div>

            <div class="m-2 p-2">

                <form method="POST" action={{ route('admin.reservations.store') }} enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First
                            Name</label>
                        <input type="text" id="first_name" name="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('first_name') border-red-400 @enderror"
                            placeholder="First name">
                        @error('first_name')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last
                            Name</label>
                        <input type="text" id="last_name" name="last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('last_name') border-red-400 @enderror"
                            placeholder="Last name">
                        @error('last_name')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') border-red-400 @enderror"
                            placeholder="Your name">
                        @error('email')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 ">Phone
                            Number</label>
                        <input type="text" id="phone_number" name="phone_number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('phone_number') border-red-400 @enderror"
                            placeholder="62882140025">
                        @error('phone_number')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900 ">Reservation
                            Date</label>
                        <input type="datetime-local" id="res_date" name="res_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('res_date') border-red-400 @enderror">
                        @error('res_date')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="guest_number">Guest
                            Number</label>
                        <input
                            class="block p-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('guest_number') border-red-400 @enderror"
                            placeholder="0" id="guest_number" name="guest_number" type="number">
                        @error('guest_number')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label for="table_id" class="block mb-2 text-sm font-medium text-gray-900 ">Table</label>
                        <select id="table_id" name="table_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('table_id') border-red-400 @enderror">
                            <option selected disabled>Choose a Table</option>
                            @foreach ($tables as $table)
                                <option value={{ $table->id }}>{{ ucwords($table->name) }}
                                    ({{ $table->guest_number }}
                                    Guest)</option>
                            @endforeach
                        </select>
                        @error('table_id')
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
