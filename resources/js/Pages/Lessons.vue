<script setup>
import Header from '@/Layouts/Header.vue';
import Lessons from '@/Components/Lessons.vue';
const props = defineProps(['name', 'lessons']);
</script>

<template>
    <Header>
        <Lessons :name="name" :lessons="lessons"/>
    </Header>
</template>
