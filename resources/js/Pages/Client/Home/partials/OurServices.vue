<template>
    <section id="section-2" class="
    section
    xl:h-auto
    lg:h-auto
    dark:bg-slate-700
    ">
        <div class="
        section-child
        dark:text-white
        ">
            <div class="text-center w-full p-5">
                <h2 class="
                font-semibold
                xl:text-6xl
                ">
                    Our Services
                </h2>
                <h4 class="
                xl:text-xl
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
            xl:grid-cols-3
            lg:grid-cols-2
            grid-cols-1 grid-rows-none
            items-center
            ">
                <ServiceCard v-for="service in services" :service="service" />
            </div>
        </div>
    </section>
</template>

<script>
import ServiceCard from '@/Components/Client/ServiceCard.vue'
export default {
    name: 'OurServices',
    components: {
        ServiceCard
    },
    data() {
        return {
            services: [
                { index: 1, name: 'Lorem ipsum dolor sit amet', description: 'Offers mobile phone repair services with any various issues.' },
                { index: 2, name: 'Lorem ipsum dolor sit amet', description: 'Offers mobile phone repair services with any various issues.' },
                { index: 3, name: 'Lorem ipsum dolor sit amet', description: 'Offers mobile phone repair services with any various issues.' },
                { index: 4, name: 'Lorem ipsum dolor sit amet', description: 'Offers mobile phone repair services with any various issues.' },
                { index: 5, name: 'Lorem ipsum dolor sit amet', description: 'Offers mobile phone repair services with any various issues.' },
                { index: 6, name: 'Lorem ipsum dolor sit amet', description: 'Offers mobile phone repair services with any various issues.' },
            ]
        }
    }
}
</script>
