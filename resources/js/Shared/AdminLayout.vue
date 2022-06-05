<script setup>
import AdminSidebar from "./AdminSidebar.vue"
</script>

<template>
    <div class="grid grid-cols-10">
        <div class="sidebar col-span-2">
            <AdminSidebar />
        </div>
        <div class="col-span-8 h-full">
            <slot />
        </div>
        

    </div>
    

</template>