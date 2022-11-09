<script setup>
    import DashboardLayout from '@/Layouts/DashboardLayout.vue';
    import Courses from './Courses/Index.vue';

    const props = defineProps(['courses']);
</script>

<template>
    <DashboardLayout>
        <Courses :courses="courses"/>
    </DashboardLayout>
</template>
