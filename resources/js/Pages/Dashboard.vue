<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Header from '@/Layouts/Header.vue';
    const props = defineProps(['lessons']);
</script>

<template>
    <Header>
        <AuthenticatedLayout :lessons="lessons"/>
    </Header>
</template>
