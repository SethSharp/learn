<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Header from '@/Layouts/Header.vue';
    const props = defineProps(['lessons']);
</script>

<template>
    <Header>
        <AuthenticatedLayout>
            <p class="text-white"> This is the profile </p>
        </AuthenticatedLayout>
    </Header>
</template>
