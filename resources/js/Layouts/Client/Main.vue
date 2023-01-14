<template>
    <Navbar />
    <main>
        <slot />
    </main>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Navbar from '@/Layouts/Client/partials/Navbar.vue'
</script>
