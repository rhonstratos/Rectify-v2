<template>
    <div class="
    rounded-full
    fixed
    bottom-5
    right-5
    " @mouseover="mOver" @mouseout="mOut">
        <button @click="toggleDark()" class="
        text-center
        transition-all
        duration-500
        text-white
        bg-gray-600
        dark:bg-primary-700
        hover:invert-[80%]
        dark:hover:invert
        rounded-full
        ">
            <div :class="buttonSunClass">
                <i id="sun" class="fa-sun fa-solid text-3xl px-4 py-[.9rem] transition-all duration-500"></i>
            </div>
            <div :class="buttonMoonClass">
                <i id="moon" class="fa-moon fa-solid text-3xl px-5 py-[.9rem] transition-all duration-500"></i>
            </div>
        </button>
    </div>
</template>

<script>
import { useDark, useToggle } from '@vueuse/core';
const isDark = useDark();
const toggleDark = useToggle(isDark);

export default {
    name: 'ToggleDark',
    components: {
    },
    data() {
        return {
            isDark: isDark,
            isHoveringSun: false,
            isHoveringMoon: false,
            buttonSunClass: isDark ? '' : 'hidden',
            buttonMoonClass: isDark ? 'hidden' : '',
            toggleDark: toggleDark,
        }
    },
    methods: {
        mOver() {
            if (this.isDark) {
                this.buttonSunClass = ''
                this.buttonMoonClass = 'hidden'
            } else {
                this.buttonSunClass = 'hidden'
                this.buttonMoonClass = ''
            }
        },
        mOut() {
            if (this.isDark) {
                this.buttonSunClass = 'hidden'
                this.buttonMoonClass = ''
            } else {
                this.buttonSunClass = ''
                this.buttonMoonClass = 'hidden'
            }
        },
    }
}
</script>
