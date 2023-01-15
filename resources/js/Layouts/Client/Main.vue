<template>
    <div class="z-10 sticky top-0">
        <Navbar />
    </div>
    <main>
        <slot />
    </main>
</template>
<script setup>
import Navbar from '@/Layouts/Client/partials/Navbar.vue'
</script>
