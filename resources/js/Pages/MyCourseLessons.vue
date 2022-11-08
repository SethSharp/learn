<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Header from '@/Layouts/Header.vue';
    import LessonGrid from '@/Components/LessonGrid.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    const props = defineProps(['name', 'lessons']);
    console.log(props.lessons);
</script>

<template>
    <Header>
        <LessonGrid :name="name" :lessons="lessons" />
    </Header>
</template>
