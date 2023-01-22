<template>
    <ClientLayout>

        <Head title="test 123 asdzxc"></Head>
        <div class="w-full grid items-center place-items-center">
            <HeroSection />
            <OurServices />
        </div>
    </ClientLayout>
</template>

<script >
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import ClientLayout from '@/Layouts/Client/Main/Index.vue';
import HeroSection from '@/Pages/Client/Home/partials/HeroSection.vue';
import OurServices from '@/Pages/Client/Home/partials/OurServices.vue';
export default {
    name: 'Index',
    components: {
        Head,
        Link,
        useForm,
        ClientLayout,
        HeroSection,
        OurServices
    },
    data() {
        return {}
    }
}
</script>

