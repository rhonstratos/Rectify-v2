<template>
    <ClientLayout>

        <Head title="test 123 asdzxc"></Head>
        <div class="grid h-screen">
            <div class="text-center mt-20
            lg:px-[6rem]
            md:px-[3rem]
            px-5
            ">
                <h1 class="
                    mx-auto
                    font-semibold tracking-tight break-words
                    lg:text-6xl
                    md:text-3xl
                    text-xl
                    max-w-[1600px]">
                    {{ heading }}
                </h1>
                <div class="
                    mt-2 text-slate-500 w-[90%] mx-auto
                    tracking-tight break-words
                    lg:text-xl
                    md:text-lg
                    text-base
                    max-w-[1100px]
                    ">
                    {{ subHeading }}
                </div>
                <div class="grid mt-5">
                    <div class="mx-auto gap-2
                    md:flex
                    grid
                    ">
                        <button class="
                        prime-btn
                        border
                        border-solid
                        bg-primary-700
                        border-primary-700
                        hover:bg-primary-600
                        hover:border-primary-600
                        text-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Browse Items
                        </button>
                        <button class="
                        prime-btn
                        border
                        border-solid
                        bg-white
                        border-primary-700
                        hover:bg-primary-600
                        hover:border-primary-600
                        hover:text-white
                        text-black">
                            <i class="fa-solid fa-calendar-check"></i>
                            Request Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </ClientLayout>
</template>

<script>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import ClientLayout from '@/Layouts/Client/Main.vue';

export default {
    name: 'Home',
    components: { Head, Link, useForm, ClientLayout },
    data() {
        return {
            heading: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            subHeading: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus blanditiis, quaerat earum cum laboriosam itaque impedit voluptates porro sequi. Voluptates nobis dolores tempora quas quasi nisi sunt perferendis esse. Voluptatum.',
        }
    }
}
</script>

