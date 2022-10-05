<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Header from '@/Layouts/Header.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import Lessons from '@/Components/Lessons.vue';
    const props = defineProps(['lessons']);
</script>

<template>
    <Header>
        <AuthenticatedLayout :lessons="lessons"/>
    </Header>
</template>
