<template>
    <nav class="
    grid
    lg:p-5
    md:px-5
    md:py-3
    p-2
    bg-white
    drop-shadow-md
    w-full
    relative
    z-auto
    ">
        <div class="self-center">
            <div class="
            flex
            flex-wrap
            items-center
            justify-between
            p-1
            z-[-1]
            ">
                <div class="
                flex
                flex-shrink-0
                items-center
                ">
                    <div onclick="location.href=route('r_client.home.index')" class="
                    lg:w-[150px]
                    md:w-[110px]
                    w-[80px]
                    cursor-pointer
                    ">
                        <img src="@ast/rectify-dark-blue.png" alt="image">
                    </div>
                </div>
                <div v-if="trueLinks.length > 0" class="
                lg:hidden flex flex-wrap items-center
                ">
                    <button @click="drawerShow = !drawerShow" type="button" class="
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
                <NavItems :trueLinks="trueLinks" :drawerShow="drawerShow" class="lg:flex hidden" />
            </div>
        </div>
    </nav>
    <NavItems :trueLinks="trueLinks" :drawerShow="drawerShow" class="lg:hidden grid" />
</template>
<!-- https://github.com/tighten/ziggy#the-router-class -->
<script>
import NavItems from '@/Components/Layouts/NavItems.vue'
export default {
    name: 'Navbar',
    components: {
        NavItems
    },
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
