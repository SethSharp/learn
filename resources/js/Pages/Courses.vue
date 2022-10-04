<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CourseCard from '@/Components/CourseCard.vue';
    let props = defineProps(['courses']);
</script>

<template>
    <div class="bg-gradient-to-br from-backgroundFrom to-backgroundTo">
        <AuthenticatedLayout>
            <h1 class="text-white"> All courses</h1>
            <div class="grid grid-cols-4 gap-4" v-for="course in courses">
                <CourseCard :title="course.title"/>
            </div>
        </AuthenticatedLayout>
    </div>
</template>
