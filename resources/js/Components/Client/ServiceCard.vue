<template>
    <div class="
    grid place-items-center gap-2
    rounded-lg p-5
    transition-all
    duration-300
    bg-primary-600
    text-white
    hover:bg-primary-700
    hover:text-white
    hover:-translate-y-2
    ">
        <i class="fa-home fa-solid"></i>
        <span class="text-lg break-words font-semibold">
            {{ service.name }}
        </span>
        <span class="text-base">
            {{ service.description }}
        </span>
    </div>
</template>
<script>
export default {
    name: 'ServiceCard',
    props: [
        'service'
    ],
}
</script>
