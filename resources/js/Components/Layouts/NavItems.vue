<template>
    <li class="
    lg:drop-shadow-none
    drop-shadow-md
    gap-5
    lg:justify-end
    items-center
    xl:text-3xl
    lg:text-xl
    md:text-lg
    text-base
    lg:bg-white
    dark:lg:bg-slate-700
    bg-primary-600
    lg:static
    fixed
    left-0
    lg:w-fit
    lg:p-1
    p-5
    w-full
    lg:z-auto
    z-[-10]
    transition-transform
    duration-700
    -top-[500px]
    " :class="{
        'top-[71px]': drawerShow,
        '-top-[500px]': !drawerShow
    }">
        <Link v-for="link in trueLinks" :href="route(link.url)" class="
        transition-all duration-150
        font-semibold
        hover:translate-x-1
        lg:text-xl
        lg:hover:text-xl
        lg:hover:-translate-y-1
        lg:hover:translate-x-0
        lg:hover:text-primary-700
        " :class="linkClasses(link.url)">
        {{ link.content }}
        </Link>
    </li>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    name: 'NavItems',
    components: {
        Link,
    },
    props: ['trueLinks', 'drawerShow'],
    data() {
        return {
            linkCurrent: `
            lg:text-primary-600
            lg:hover:text-primary-600
            dark:lg:text-primary-600
            dark:lg:hover:text-primary-600
            text-black
            hover:text-white
            dark:text-black
            dark:hover:text-white
            `,
            linkNotCurrent: `
            lg:text-black
            lg:hover:text-primary-600
            dark:lg:text-white
            dark:lg:hover:text-primary-600
            text-white
            hover:text-black
            dark:text-white
            dark:hover:text-black
            `,
        }
    },
    methods: {
        linkClasses(url) {
            return route().current(url)
                ? this.linkCurrent
                : this.linkNotCurrent
        }
    },
}
</script>
