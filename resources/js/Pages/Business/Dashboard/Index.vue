<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Chart from '@/Pages/Business/Dashboard/partials/Charts.vue';
import Alerts from '@/Pages/Business/Dashboard/partials/Alerts.vue';
import Appointments from '@/Pages/Business/Dashboard/partials/Appointments.vue';
import Orders from '@/Pages/Business/Dashboard/partials/Orders.vue';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="my-5 grid md:gap-4 gap-0">
            <Chart />
            <Alerts />
            <Appointments />
            <Orders />
        </div>

    </AuthenticatedLayout>
</template>
