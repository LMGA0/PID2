<template>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th v-for="column in columns" scope="col" class="px-6 py-3">
                    {{column}}
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(show, index) in shows" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{show.id}}
                </th>
                <td class="px-6 py-4">
                    {{show.slug}}
                </td>
                <td class="px-6 py-4">
                    {{show.title}}
                </td>
                <td class="px-6 py-4">
                    {{show.description}}
                </td>
                <td class="px-6 py-4">
                    {{locationsOfShows[index]?.designation}}
                </td>
                <td class="px-6 py-4">
                  <svg v-if="show.bookable" style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
</svg>
                  <svg v-else style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,0A12,12 0 0,1 24,12A12,12 0 0,1 12,24A12,12 0 0,1 0,12A12,12 0 0,1 12,0M12,2A10,10 0 0,0 2,12C2,14.4 2.85,16.6 4.26,18.33L18.33,4.26C16.6,2.85 14.4,2 12,2M12,22A10,10 0 0,0 22,12C22,9.6 21.15,7.4 19.74,5.67L5.67,19.74C7.4,21.15 9.6,22 12,22Z" />
</svg>
                </td>
                <td class="px-6 py-4">
                    {{show.price}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="pl-4 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
import AdminLayout from "/home/patrickhalasik/Documents/PID2/resources/js/Shared/AdminLayout.vue"

export default {
  layout: AdminLayout,
  props: {
    shows: Object,
    columns: Array[String],
    locationsOfShows: Object
  }
}

</script>