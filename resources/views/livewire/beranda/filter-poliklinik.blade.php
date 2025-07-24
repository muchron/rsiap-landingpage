    @php
        \Carbon\Carbon::setLocale('id');
    @endphp
    <div>
        <div class="bg-gray-100 dark:bg-gray-800 lg:w-1/2 lg:mx-auto p-4 rounded-xl mx-10 border border-gray-300 dark:outline-gray-600 shadow-lg">
            <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Cari Jadwal Poliklinik</h1>
            <form class="mx-auto mt-5 pb-4">
                {{-- Dokter --}}
                <div class="input-group">
                    <label for="dokter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Dokter
                    </label>
                    <select id="dokter"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full"
                        wire:model="selectedDoctor"
                        wire:change="changeDoctor">

                        <option value="">Pilih Dokter</option>
                        @if (!empty($doctors))
                            @foreach ($doctors as $doctor => $value)
                                <option value="{{ $value['slug'] }}">
                                    {{ $value['name'] ?? '-' }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
        </div>
        {{-- @dump($schedulesList) --}}
        <div class="container mx-auto py-10 w-full px-12">
            <div class="relative shadow-md sm:rounded-lg overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 max-w-[200px] w-50">
                                Dokter
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mulai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Selesai
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($schedulesList))
                            @foreach ($schedulesList as $schedule => $listItem)
                                @foreach ($listItem as $item)
                                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item['polyclinic'] }}
                                        </th>
                                        <td class="px-6 py-4">{{ $item['day'] }}</td>
                                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($item['start_at'])->format('H:i') }}</td>
                                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($item['end_at'])->format('H:i') }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endif
                        {{-- @forelse ($schedulesList as $schedule)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" rowspan="{{ count($schedule['schedules']) }}">
                                    {{ $schedule['name'] }}
                                </th>

                                @foreach ($schedule['schedules'] as $index => $item)
                                    @if ($index > 0)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                        @endif

                        <td class="px-6 py-4">{{ $item['day'] }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($item['start_at'])->format('H:i') }} s.d. {{ \Carbon\Carbon::parse($item['end_at'])->format('H:i') }}</td>
                       
                        @if ($index > 0)
                            </tr>
                        @endif
                        @endforeach
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center px-6 py-4">Tidak ada jadwal tersedia</td>
                        </tr>
                        @endforelse --}}


                    </tbody>
                </table>
            </div>
        </div>

    </div>
