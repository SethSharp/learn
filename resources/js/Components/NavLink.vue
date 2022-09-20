<script setup>
    import { computed } from 'vue';

    const props = defineProps(['href', 'active']);

    const classes = computed(() => props.active ?
        'border-2 border-orange-500 text-orange-500 px-6 py-2 opacity-60' :
        'border-2 px-6 text-white py-2 opacity-60 hover:text-gray-700 hover:border-gray-700 transition duration-250 ease-in-out'
    );
</script>

<template>
    <a :href="href" :class="classes">
        <slot/>
    </a>
</template>
