<template>
    <!-- container parent -->
    <section id="hero-section" class="
    section
    px-16
    py-8
    ">
        <div class="
        w-full
        h-full
        rounded-lg
        bg-white
        drop-shadow
        shadow-sm
        xl:p-14
        lg:p-12
        md:p-8
        p-4
        ">
            <h1 class="
            font-semibold
            xl:text-3xl
            lg:text-2xl
            text-xl

            ">
                Appointments
            </h1>
        </div>
    </section>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    name: 'HeroSection',
    components: {
        Link
    },
    data() {
        return {}
    }
}
</script>
