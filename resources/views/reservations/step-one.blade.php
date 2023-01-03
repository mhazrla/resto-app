<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Reservation</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                First Step</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">

            <form method="POST" action={{ route('reservation.store.step.one') }} enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First
                        Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ $reservation->first_name ?? '' }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('first_name') border-red-400 @enderror"
                        placeholder="First name">
                    @error('first_name')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last
                        Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ $reservation->last_name ?? '' }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('last_name') border-red-400 @enderror"
                        placeholder="Last name">
                    @error('last_name')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                    <input type="email" id="email" name="email" value="{{ $reservation->email ?? '' }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') border-red-400 @enderror"
                        placeholder="example@gmail.com">
                    @error('email')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 ">Phone
                        Number</label>
                    <input type="text" id="phone_number" name="phone_number"
                        value="{{ $reservation->phone_number ?? '' }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('phone_number') border-red-400 @enderror"
                        placeholder="6288124159">
                    @error('phone_number')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900 ">Reservation
                        Date</label>
                    <input type="datetime-local" id="res_date" name="res_date"
                        value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                        min="{{ $min_date->format('Y-m-d\TH:i:s') }}" max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('res_date') border-red-400 @enderror">
                    <span class="text-xs ">Please choose the time between 17:00-23:00.
                    </span>
                    @error('res_date')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="guest_number">Guest
                        Number</label>
                    <input value="{{ $reservation->guest_number ?? '' }}"
                        class="block p-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('guest_number') border-red-400 @enderror"
                        placeholder="0" id="guest_number" name="guest_number" type="number">
                    @error('guest_number')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>


                <div class="flex">
                    <button type="submit"
                        class=" justify-end px-4 py-2 rounded-lg text-white bg-indigo-500 hover:bg-indigo-700">Next</button>
                </div>
            </form>

        </div>
    </section>

</x-guest-layout>
