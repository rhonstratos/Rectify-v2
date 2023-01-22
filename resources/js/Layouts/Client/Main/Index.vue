<template>
    <div class="z-10 sticky top-0 w-full">
        <Navbar />
    </div>
    <main>
        <slot />
    </main>
    <ToggleDark />
</template>

<script>
import ToggleDark from '@/Components/ToggleDark.vue';
import Navbar from '@/Layouts/Client/Main/partials/Navbar.vue'

export default {
    name: 'Main',
    components: {
        Navbar,
        ToggleDark
    },
    data() {
        return {
            heading: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            subHeading: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus blanditiis, quaerat earum cum laboriosam itaque impedit voluptates porro sequi. Voluptates nobis dolores tempora quas quasi nisi sunt perferendis esse. Voluptatum.',
        }
    }
}
</script>
