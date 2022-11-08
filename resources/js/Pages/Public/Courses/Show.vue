<script setup>
    import Header from '@/Layouts/Header.vue';
    import LessonGrid from '@/Components/Public/Lessons/LessonGrid.vue';

    const props = defineProps(['name', 'lessons']);
</script>

<template>
    <Header>
        <div class="pl-6 pr-6 sm:pl-12 pt-6">
            <LessonGrid :name="name" :lessons="lessons" :user="true" />
        </div>
    </Header>
</template>
