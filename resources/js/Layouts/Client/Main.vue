<template>
    <div class="z-10 sticky top-0 w-full">
        <Navbar />
    </div>
    <main>
        <slot />
    </main>
    <div class="
    rounded-full
    fixed
    bottom-5
    right-5
    ">
        <button @click="toggleDark()"
        class="
        text-center
        transition-all
        text-white
        bg-gray-600
        dark:text-black
        dark:bg-purple-700
        rounded-full
        ">
            <div v-if="isDark == false">
                <i id="sun" class="fa-sun fa-solid text-3xl px-4 py-[.9rem]"></i>
            </div>
            <div v-else>
                <i id="moon" class="fa-moon fa-solid text-3xl px-5 py-[.9rem]"></i>
            </div>
        </button>
    </div>
</template>
<script>
import Navbar from '@/Layouts/Client/partials/Navbar.vue'
import { useDark, useToggle } from '@vueuse/core';
const isDark = useDark();
const toggleDark = useToggle(isDark);

export default {
    name: 'Main',
    components: {
        Navbar
    },
    data() {
        return {
            isDark: isDark,
            toggleDark: toggleDark,
            heading: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            subHeading: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus blanditiis, quaerat earum cum laboriosam itaque impedit voluptates porro sequi. Voluptates nobis dolores tempora quas quasi nisi sunt perferendis esse. Voluptatum.',
        }
    }
}
</script>
