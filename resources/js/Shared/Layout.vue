<template>
    <header class="justify-between">
        <Navbar />
    </header>

<section class="p-6">
    <slot />
</section>
  

</template>

<script setup>
import Navbar from "./Navbar.vue"
</script>

<style>

</style>