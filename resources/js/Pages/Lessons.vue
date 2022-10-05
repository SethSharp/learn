<script setup>
import Header from '@/Layouts/Header.vue';
import LessonGrid from '@/Components/LessonGrid.vue';
const props = defineProps(['name', 'lessons']);
</script>

<template>
    <Header>
        <LessonGrid :name="name" :lessons="lessons"/>
    </Header>
</template>
