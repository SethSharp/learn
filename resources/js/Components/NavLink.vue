<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href']);

</script>

<template>
    <Link :href="href">
        <slot />
    </Link>
</template>
