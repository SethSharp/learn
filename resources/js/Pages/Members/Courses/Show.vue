<script setup>
    import LessonGrid from '@/Components/Public/Lessons/LessonGrid.vue';
    import DashboardLayout from '@/Layouts/DashboardLayout.vue';
    const props = defineProps(['course']);
</script>

<template>
    <DashboardLayout>
        <div class="display flex flex-wrap justify-center md:justify-start">
            <div class="w-full mr-12">
                <LessonGrid :name="course.name" :lessons="course.lessons"></LessonGrid>
            </div>
        </div>
    </DashboardLayout>

</template>
