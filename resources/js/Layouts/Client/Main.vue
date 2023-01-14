<template>
    <div class="z-10 sticky">
        <Navbar />
    </div>
    <main>
        <slot />
    </main>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Navbar from '@/Layouts/Client/partials/Navbar.vue'
</script>
