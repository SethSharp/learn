<script setup>
    import Header from '@/Layouts/Header.vue';
    import LessonGrid from '@/Components/LessonGrid.vue';
    const props = defineProps(['name', 'lessons']);
</script>

<template>
    <Header>
        <div class="ml-12 mr-12">
            <LessonGrid :name="name" :lessons="lessons"/>
        </div>
    </Header>
</template>
