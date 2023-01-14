<template>
    <nav class="grid p-5 bg-slate-700">
        <div class="self-center">
            <div class="flex flex-wrap items-center justify-between p-5">

                <div class="flex flex-shrink-0 items-center">
                    <div class="w-[150px] cursor-pointer" onclick="location.href='/client/home'">
                        <img src="@ast/rectify-dark-blue.png" alt="image">
                    </div>
                </div>
                <div class="lg:hidden flex flex-wrap items-center">
                    <button onclick="
                        $('#nav_items').toggleClass('-top-[180px]');
                        $('#nav_items').toggleClass('top-[134px]');
                        "
                        class="transition-all flex items-center px-3 py-2 border rounded-lg text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>

                <div id="nav_items" class="bg-slate-300 lg:flex lg:static lg:justify-end items-center
                    absolute grid left-0 p-5 gap-5 xl:text-3xl text-lg
                    lg:w-fit w-full
                    lg:z-auto z-[-1]
                    transition-all duration-500 ease-in-out
                    -top-[180px]
                    ">
                    <div v-for="link in links" class="cursor-pointer">
                        <a :href=link.url>
                            <span class="text-lg">{{ link.content }}</span>
                        </a>
                    </div>
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
