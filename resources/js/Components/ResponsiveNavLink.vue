<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'block pl-3 pr-4 py-2 border-2 border-orange-500 text-base \
     font-medium text-orange-500 \
     focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out \
     hover:bg-orange-500 hover:text-white'
    :
    'block pl-3 pr-4 py-2 border-2 border-transparent text-base \
     font-medium text-gray-400 hover:text-gray-800 hover:bg-gray-50 \
     focus:outline-none focus:text-white \
     focus:bg-gray-200 focus:border-white transition duration-75 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes" class="font-title font-bold">
        <slot />
    </Link>
</template>
