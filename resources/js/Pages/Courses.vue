<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CourseCard from '@/Components/CourseCard.vue';
    let props = defineProps(['courses']);
</script>

<template>
    <div class="bg-gradient-to-br from-backgroundFrom to-backgroundTo">
        <AuthenticatedLayout>
            <h1 class="text-white text-4xl font-bold mx-12 py-6"> All courses</h1>
            <div class="display flex justify-start space-x-8 mx-12">
                <CourseCard v-for="course in courses" :name="course.name" />
            </div>
        </AuthenticatedLayout>
    </div>
</template>
