<script setup>
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientLayout from '@/Layouts/Client/Main/Index.vue'
import DeleteUserForm from '@/Components/Profile/DeleteUserForm.vue';
import UpdatePasswordForm from '@/Components/Profile/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Components/Profile/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
    mustVerifyEmail: Boolean,
    status: String,
});
</script>

<template>

    <Head title="Account Settings" />

    <ClientLayout>
        <template #header>
            <h2 class="
            font-semibold
            text-xl
            text-gray-800
            ">
                Profile
            </h2>
        </template>

        <div class="
        py-12
        bg-slate-200
        dark:bg-slate-700
        ">
            <div class="
            max-w-7xl
            mx-auto
            sm:px-6
            lg:px-8
            space-y-6
            ">
                <div class="
                p-4
                sm:p-8
                dark:bg-slate-300
                bg-white
                shadow
                sm:rounded-lg
                ">
                    <UpdateProfileInformationForm :must-verify-email="mustVerifyEmail" :status="status"
                        class="max-w-xl" />
                </div>

                <div class="
                p-4
                sm:p-8
                dark:bg-slate-300
                bg-white
                shadow
                sm:rounded-lg
                ">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="
                p-4
                sm:p-8
                dark:bg-slate-300
                bg-white
                shadow
                sm:rounded-lg
                ">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </ClientLayout>
</template>
