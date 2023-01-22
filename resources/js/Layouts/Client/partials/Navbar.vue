<template>
    <nav class="
    grid
    lg:p-5
    md:px-5
    md:py-3
    p-2
    bg-white
    dark:bg-slate-700
    drop-shadow-md
    shadow
    w-full
    relative
    z-auto
    ">
        <div class="
        self-center
        ">
            <div class="
            flex
            flex-wrap
            items-center
            justify-between
            p-1
            z-[-1]
            ">
                <!-- site logo -->
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

                <!-- nav items -->
                <ul class="
                flex
                flex-shrink-0
                items-center
                ">
                    <!-- nav items (mobile) -->
                    <NavItems :trueLinks="trueLinks" :drawerShow="drawerShow" class="lg:flex hidden" />

                    <!-- nav items dropdown btn -->
                    <li v-if="trueLinks.length > 0" class="
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
                    </li>

                    <!-- user profile -->
                    <UserButton />
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav items (mobile) -->
    <ul>
        <NavItems :trueLinks="trueLinks" :drawerShow="drawerShow" class="lg:hidden grid" />
    </ul>
</template>
<!-- https://github.com/tighten/ziggy#the-router-class -->
<script>
import NavItems from '@/Components/Layouts/NavItems.vue'
import UserButton from '@/Components/Layouts/UserButton.vue'
export default {
    name: 'Navbar',
    components: {
        NavItems, UserButton
    },
    data() {
        return {
            drawerShow: false,
            links: [
                { url: 'main.index', content: 'Home' },
                { url: 'home.create', content: 'Products' },
                { url: 'home.create', content: 'Orders' },
                { url: 'home.create', content: 'Appointments' },
                { url: 'home.create', content: 'Messages' },
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
