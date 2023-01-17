<template>
    <section id="hero-section" class="
        section
        ">
        <div class="
            max-w-content
            text-center
            lg:px-[6rem]
            md:px-[3rem]
            p-8
            mx-60 my-auto
            rounded-lg
            bg-gradient-to-tr
            from-primary-600
            to-primary-300
            dark:bg-slate-700
            dark:text-white
            ">
            <h1 class="
                    mx-auto
                    font-semibold tracking-tight break-words
                    lg:text-6xl
                    md:text-3xl
                    text-xl
                    max-w-[1600px]
                    leading-[4rem]
                    ">
                {{ heading }}
            </h1>
            <div class="
                    mt-2 w-[90%] mx-auto
                    tracking-tight break-words
                    text-slate-200
                    lg:text-xl
                    md:text-lg
                    text-base
                    max-w-[1100px]
                    dark:text-slate-200
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
                        hover:bg-opacity-50
                        hover:border-transparent
                        dark:bg-primary-700
                        dark:border-primary-700
                        dark:hover:bg-primary-800
                        dark:hover:border-primary-800
                        text-white">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Browse Items
                    </button>
                    <button class="
                        prime-btn
                        border
                        border-solid
                        bg-white
                        text-black
                        dark:bg-gray-600
                        dark:text-white
                        dark:border-none
                        dark:hover:bg-gray-700
                        border-primary-700
                        hover:bg-primary-600
                        hover:border-primary-600
                        hover:text-white
                        ">
                        <i class="fa-solid fa-calendar-check"></i>
                        Request Appointment
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { useDark, useToggle } from '@vueuse/core';

const isDark = useDark();
const toggleDark = useToggle(isDark);

export default {
    name: 'HeroSection',
    data() {
        return {
            tDark: toggleDark,
            heading: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            subHeading: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus blanditiis, quaerat earum cum laboriosam itaque impedit voluptates porro sequi. Voluptates nobis dolores tempora quas quasi nisi sunt perferendis esse. Voluptatum.',
        }
    }
}
</script>
