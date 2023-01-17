<template>
    <section id="section-2" class="
    section
    ">
        <div class="
            max-w-content
            text-center mt-20
            lg:px-[6rem]
            md:px-[3rem]
            p-8
            mx-60 my-auto
            rounded-lg
            dark:bg-slate-700
            dark:text-white
        ">
            <div class="text-center w-full p-5">
                <h2 class="
                font-semibold
                lg:text-6xl
                ">
                    Our Services
                </h2>
                <h4 class="
                lg:text-xl
                leading-6
                ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repudiandae obcaecati nostrum.
                    Error iusto, nobis voluptatibus adipisci nemo suscipit delectus non itaque repudiandae, repellat
                    dolorum illum, saepe totam nam quos?
                </h4>
            </div>
            <div class="
            grid
            gap-5
            lg:grid-cols-3 lg:grid-rows-2
            grid-cols-1 grid-rows-none
            items-center
            ">
                <div v-for="service in services" class="
                grid place-items-center gap-2
                rounded-lg p-5
                bg-white
                text-black
                font-semibold
                ">
                    <i class="fa-home fa-solid"></i>
                    <span class="">{{ service.name }}</span>
                    <span class="text-sm">{{ service.description }}</span>
                </div>
            </div>
            <button @click="tDark()" class="
                px-4 py-2 h-fit
                transition-all
                text-white
                bg-gray-600
                dark:text-black
                dark:bg-purple-700
                ">
                Dark Toggle
            </button>
        </div>
    </section>
</template>

<script>
import { useDark, useToggle } from '@vueuse/core';
const isDark = useDark();
const toggleDark = useToggle(isDark);
export default {
    name: 'OurServices',
    data() {
        return {
            tDark: toggleDark,
            services: [
                { name: 'Lorem', description: 'Offers mobile phone repair services with any various issues.' },
                { name: 'Lorem', description: 'Offers mobile phone repair services with any various issues.' },
                { name: 'Lorem', description: 'Offers mobile phone repair services with any various issues.' },
                { name: 'Lorem', description: 'Offers mobile phone repair services with any various issues.' },
                { name: 'Lorem', description: 'Offers mobile phone repair services with any various issues.' },
                { name: 'Lorem', description: 'Offers mobile phone repair services with any various issues.' },
            ]
        }
    }
}
</script>
