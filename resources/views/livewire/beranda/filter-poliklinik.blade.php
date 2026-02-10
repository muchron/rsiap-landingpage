<div>
    <div class="bg-gray-100 dark:bg-gray-800 lg:w-1/2 lg:mx-auto p-4 rounded-xl mx-10 border border-gray-300 shadow-lg">
        <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Cari Jadwal Poliklinik</h1>

        <div class="mx-auto mt-5 pb-4">
            <label for="dokter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
            <select id="dokter"
                wire:model.live="selectedDoctor"
                wire:change="changeDoctor"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white">

                <option value="">Pilih Dokter</option>
                @foreach ($doctors as $item)
                    <option value="{{ $item['slug'] }}">{{ $item['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="container mx-auto py-10 w-full px-12">
        <div class="relative shadow-md sm:rounded-lg overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">Poliklinik</th>
                        <th class="px-6 py-3">Dokter</th>
                        <th class="px-6 py-3">Hari</th>
                        <th class="px-6 py-3">Mulai</th>
                        <th class="px-6 py-3">Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($schedulesList as $index => $item)
                        <tr class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
                            <td class="px-6 py-4 font-bold text-gray-900 dark:text-white">
                                {{ $item['polyclinic'] ?? '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['name'] ?? '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['day'] ?? '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ isset($item['start_at']) ? \Carbon\Carbon::parse($item['start_at'])->format('H:i') : '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ isset($item['end_at']) ? \Carbon\Carbon::parse($item['end_at'])->format('H:i') : '-' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-10 text-gray-500 italic">
                                Tidak ada jadwal tersedia untuk dokter ini.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
