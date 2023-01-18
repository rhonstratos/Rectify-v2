<template>
    <section id="section-2" class="
    section
    dark:bg-slate-700
    xl:h-screen
    lg:h-auto
    ">
        <div class="
        section-child
        dark:text-white
        break-normal
        p-0
        ">
            <div class="
            text-center
            w-full
            md:p-4
            p-2
            ">
                <h2 class="
                font-semibold
                xl:text-6xl
                lg:text-5xl
                md:text-4xl
                text-3xl
                ">
                    {{ header }}
                </h2>
                <h4 class="
                xl:text-xl
                lg:text-xl
                md:text-lg
                text-base
                ">
                    {{ subHeading }}
                </h4>
            </div>
            <div class="
            grid
            lg:gap-5
            gap-2
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
            header: 'Our Services',
            subHeading: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repudiandae obcaecati nostrum. Error iusto, nobis voluptatibus adipisci nemo suscipit delectus non itaque repudiandae, repellatdolorum illum, saepe totam nam quos?',
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
