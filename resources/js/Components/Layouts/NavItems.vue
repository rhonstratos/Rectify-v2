<template>
    <div class="
    gap-5
    lg:justify-end
    items-center
    xl:text-3xl
    lg:text-xl
    md:text-lg
    text-base
    lg:text-primary-400
    text-white
    lg:bg-white
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
    transition-all
    duration-700
    -top-[500px]
    " :class="{
        'top-[94px]': drawerShow == true,
        '-top-[500px]': drawerShow == false
    }">
        <a v-for="link in trueLinks" :href="route(link.url)" class="
        transition-all duration-150
        font-semibold
        text-primary-50
        hover:text-white
        hover:translate-x-1
        lg:text-xl
        lg:hover:text-xl
        lg:hover:-translate-y-1
        lg:hover:translate-x-0
        lg:hover:text-primary-700
        " :class="{
            'lg:text-primary-700 text-primary-300': route().current(link.url),
            'lg:text-primary-500': !route().current(link.url),
        }">
            {{ link.content }}
        </a>
    </div>
</template>
<script>
export default {
    name: 'NavItems',
    props: ['trueLinks', 'drawerShow']
}
</script>
