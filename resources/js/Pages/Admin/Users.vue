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
            <tr v-for="user in users" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{user.id}}
                </th>
                <td class="px-6 py-4">
                    {{user.name}}
                </td>
                <td class="px-6 py-4">
                    {{user.email}}
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
    users: Object,
    columns: Array[String]
  }
}

</script>