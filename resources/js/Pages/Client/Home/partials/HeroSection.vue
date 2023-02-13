<template>
    <!-- container parent -->
    <section id="hero-section" class="
    section
    ">
        <!-- container child -->
        <div class="
        section-child
        drop-shadow-2xl
        shadow-2xl
        xl:p-14
        lg:p-12
        md:p-8
        p-4
        bg-gradient-to-tr
        from-primary-800
        via-primary-500
        to-primary-700
        dark:from-primary-600
        dark:via-primary-900
        dark:to-primary-600
        dark:bg-slate-700
        dark:text-white
        break-normal
        ">
            <!-- header -->
            <h1 class="
            header-leading
            max-w-[1600px]
            mx-auto
            font-semibold
            tracking-tight
            xl:text-6xl
            lg:text-5xl
            md:text-3xl
            text-2xl
            ">
                {{ heading }}
            </h1>
            <!-- sub header -->
            <div class="
            mt-5
            mx-auto
            max-w-[1100px]
            md:w-[90%]
            w-full
            tracking-tight
            xl:text-xl
            md:text-lg
            text-base
            text-slate-200
            dark:text-slate-200
            ">
                {{ subHeading }}
            </div>
            <!-- buttons -->
            <div class="
            grid
            mt-10
            ">
                <div class="
                md:flex
                md:flex-row
                flex-col
                grid
                mx-auto
                gap-2
                ">
                    <button class="
                    prime-btn
                    invert
                    hover:bg-primary-900
                    bg-primary-700
                    text-white
                    ">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Browse Items
                    </button>
                    <Link class="
                        prime-btn
                        cursor-pointer
                        bg-white
                        text-black
                        dark:bg-gray-800
                        dark:text-white
                        dark:hover:bg-gray-700
                        hover:bg-primary-400
                        hover:text-white
                        " :href="route('r_client.appointments.index')">
                    <i class="fa-solid fa-calendar-check"></i>
                    Request Appointment
                    </Link>
                </div>
            </div>
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
        return {
            heading: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            subHeading: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus blanditiis, quaerat earum cum laboriosam itaque impedit voluptates porro sequi. Voluptates nobis dolores tempora quas quasi nisi sunt perferendis esse. Voluptatum.',
        }
    }
}
</script>
