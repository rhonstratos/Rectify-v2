<template>
    <ClientLayout>

        <Head title="Appointments"></Head>
        <div class="w-full grid items-center place-items-center">
            <HeroSection />
        </div>
    </ClientLayout>
</template>

<script >
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import ClientLayout from '@/Layouts/Client/Main/Index.vue';
import HeroSection from '@/Pages/Client/Appointments/partials/HeroSection.vue';
export default {
    name: 'Index',
    components: {
        Head,
        Link,
        useForm,
        ClientLayout,
        HeroSection,
    },
    data() {
        return {}
    }
}
</script>

