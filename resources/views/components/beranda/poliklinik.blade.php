 <div class="bg-gray-100 dark:bg-gray-800 lg:w-1/2 mx-auto p-4 lg:rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 shadow-lg">
     <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Cari Jadwal Poliklinik</h1>
     <form class="mx-auto mt-5 grid grid-cols-1 lg:grid-cols-3 gap-4 pb-4">
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
         <div class="input-group">
             <label for="date-picker-label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>

             <div class="relative max-w-sm">
                 <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                     <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                         <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                     </svg>
                 </div>
                 <input datepicker id="default-datepicker" type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
             </div>

         </div>

     </form>
 </div>

 <div class="container mx-auto py-10 w-full px-12">
     <div class="relative shadow-md sm:rounded-lg overflow-x-auto">
         <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
             <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                 <tr>
                     <th scope="col" class="px-6 py-3">
                         Poliklnikik
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Dokter
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Hari, Tanggal
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Jam
                     </th>
                     <th scope="col" class="px-6 py-3">
                         Kuota
                     </th>
                 </tr>
             </thead>
             <tbody>
                 <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         Apple MacBook Pro 17"
                     </th>
                     <td class="px-6 py-4">
                         Silver
                     </td>
                     <td class="px-6 py-4">
                         Laptop
                     </td>
                     <td class="px-6 py-4">
                         $2999
                     </td>
                     <td class="px-6 py-4">
                         <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                     </td>
                 </tr>
                 <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         Microsoft Surface Pro
                     </th>
                     <td class="px-6 py-4">
                         White
                     </td>
                     <td class="px-6 py-4">
                         Laptop PC
                     </td>
                     <td class="px-6 py-4">
                         $1999
                     </td>
                     <td class="px-6 py-4">
                         <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                     </td>
                 </tr>
                 <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         Magic Mouse 2
                     </th>
                     <td class="px-6 py-4">
                         Black
                     </td>
                     <td class="px-6 py-4">
                         Accessories
                     </td>
                     <td class="px-6 py-4">
                         $99
                     </td>
                     <td class="px-6 py-4">
                         <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                     </td>
                 </tr>
                 <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         Google Pixel Phone
                     </th>
                     <td class="px-6 py-4">
                         Gray
                     </td>
                     <td class="px-6 py-4">
                         Phone
                     </td>
                     <td class="px-6 py-4">
                         $799
                     </td>
                     <td class="px-6 py-4">
                         <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         Apple Watch 5
                     </th>
                     <td class="px-6 py-4">
                         Red
                     </td>
                     <td class="px-6 py-4">
                         Wearables
                     </td>
                     <td class="px-6 py-4">
                         $999
                     </td>
                     <td class="px-6 py-4">
                         <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                     </td>
                 </tr>
             </tbody>
         </table>
     </div>
 </div>
