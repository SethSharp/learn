<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active ?
    'border-2 border-black px-6 py-2' :
    'border-2 border-black px-6 py-2 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
);
</script>

<template>
    <a :href="href" :class="classes">
        <slot/>
    </a>
    <!-- <Link :href="href" :class="classes">
        <slot />
    </Link> -->
</template>
