<template>
    <nav class="grid p-5 bg-white drop-shadow-md w-full">
        <div class="self-center">
            <div class="flex flex-wrap items-center justify-between p-1">
                <div class="flex flex-shrink-0 items-center">
                    <div class="2xl:w-[150px] w-[130px] cursor-pointer"
                        onclick="location.href=route('r_client.home.index')">
                        <img src="@ast/rectify-dark-blue.png" alt="image">
                    </div>
                </div>
                <div v-if="trueLinks.length > 0" class="
                lg:hidden flex flex-wrap items-center
                ">
                    <button @click="drawerShow = !drawerShow" type="button"
                        class="
                        transition-all flex items-center
                        px-3 py-2
                        border border-white
                        rounded
                        text-black
                        hover:text-primary-400
                        hover:border-primary-400">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>

                <div id="nav_items" class="
                    items-center
                    absolute grid left-0 p-5 gap-5
                    text-base text-white
                    bg-primary-600
                    xl:text-3xl
                    lg:text-xl
                    md:text-lg
                    lg:text-primary-400
                    lg:bg-white
                    lg:flex
                    lg:static
                    lg:justify-end
                    lg:w-fit w-full
                    lg:p-1
                    lg:z-auto
                    z-[-1]
                    transition-all duration-500 ease-in-out
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
            </div>
        </div>
    </nav>
</template>
<!-- https://github.com/tighten/ziggy#the-router-class -->
<script>
export default {
    name: 'Navbar',
    data() {
        return {
            drawerShow: false,
            links: [
                { url: 'r_client.home.index', content: 'Home' },
                { url: 'r_client.home.create', content: 'Products' },
                { url: 'r_client.home.create', content: 'Orders' },
                { url: 'r_client.home.create', content: 'Appointments' },
                { url: 'r_client.home.create', content: 'Messages' },
            ]
        }
    },
    computed: {
        trueLinks: function () {
            return this.links.filter(function (i) { return route().has(i.url) })
        }
    }
}
</script>
