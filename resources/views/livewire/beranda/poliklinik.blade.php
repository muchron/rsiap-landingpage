<form class="mx-auto mt-5 grid grid-cols-1 lg:grid-cols-4 gap-4 pb-4">
    <div class="input-group">
        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poliklinik</label>
        <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select>
    </div>
    <div class="input-group">
        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
        <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select>
    </div>
    <div class="input-group w-full">
        <label for="date-picker-label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                </svg>
            </div>
            <input datepicker id="default-datepicker" type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
        </div>
    </div>
    <div class="input-group mt-7">
        <button class="bg-green-600 w-full hover:bg-green-900 text-white font-bold py-2 px-4 rounded" type="button"><i class="ri-search-line"></i> Cari</button>
    </div>

</form>
