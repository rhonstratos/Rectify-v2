<template>
    <div class="
    grid place-items-center gap-2
    rounded-lg p-5
    shadow
    drop-shadow
    transition-all
    duration-300
    hover:-translate-y-2
    text-white

    bg-primary-600
    hover:bg-primary-700

    dark:bg-primary-800
    dark:hover:bg-primary-700
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
