<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Reservation</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Final Step</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">

            <form method="POST" action={{ route('reservation.store.step.two') }}>
                @csrf

                <div class="mb-6">
                    <label for="table_id" class="block mb-2 text-sm font-medium text-gray-900 ">Table</label>
                    <select id="table_id" name="table_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('table_id') border-red-400 @enderror">
                        <option selected disabled>Choose a Table</option>
                        @foreach ($tables as $table)
                            <option value={{ $table->id }} @selected($table->id == $reservation->table_id)>
                                {{ ucwords($table->name) }} ({{ $table->guest_number }} Guest)
                            </option>
                        @endforeach
                    </select>
                    @error('table_id')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror



                </div>
                <div class="flex justify-between">
                    <a href="{{ route('reservation.step.one') }}"
                        class="px-4 py-2 bg-red-500 text-white rounded-lg">Back</a>
                    <button type="submit"
                        class=" px-4 py-2 rounded-lg text-white bg-indigo-500 hover:bg-indigo-700">Make
                        Reservation</button>
                </div>
            </form>

        </div>
    </section>

</x-guest-layout>
