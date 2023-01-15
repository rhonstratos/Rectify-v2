<template>
    <nav class="grid p-5">
        <div class="self-center">
            <div class="flex flex-wrap items-center justify-between p-1">

                <div class="flex flex-shrink-0 items-center">
                    <div class="2xl:w-[150px] w-[130px] cursor-pointer" onclick="location.href='/client/home'">
                        <img src="@ast/rectify-dark-blue.png" alt="image">
                    </div>
                </div>
                <div class="lg:hidden flex flex-wrap items-center">
                    <button onclick="
                        $('#nav_items').toggleClass('-top-[240px]');
                        $('#nav_items').toggleClass('top-[95px]');
                        "
                        class="transition-all flex items-center px-3 py-2 border border-white rounded text-black hover:text-primary-400 hover:border-primary-400">
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
                    lg:text-primary-400
                    lg:bg-white
                    lg:flex lg:static lg:justify-end
                    lg:w-fit w-full
                    lg:p-1
                    lg:z-auto z-[-1]
                    transition-all duration-500 ease-in-out
                    -top-[240px]
                    ">
                    <a v-for="link in links" :href=link.url class="
                    transition-all duration-150 ease-in-out
                    lg:text-xl
                    lg:hover:text-2xl
                    lg:hover:text-primary-600
                    hover:text-3xl">
                        {{ link.content }}
                    </a>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            links: [
                { url: route('r_client.home.index'), content: 'test' },
                { url: route('r_client.home.create'), content: 'create' },
                { url: route('r_client.home.index'), content: 'test' },
                { url: route('r_client.home.create'), content: 'create' },
                { url: route('r_client.home.index'), content: 'test' },
            ]
        }
    }
}
</script>
