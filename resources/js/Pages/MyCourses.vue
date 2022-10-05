<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Header from '@/Layouts/Header.vue';
    import CourseCard from '@/Components/CourseCard.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    const props = defineProps(['courses']);
</script>

<template>
    <Header>
        <AuthenticatedLayout>
            <div class="display flex flex-wrap justify-center md:justify-start">
                <div v-for="course in courses">
                    <Link :href="'/dashboard/mycourses/' + course.id">
                        <CourseCard :name="course.name" :lessonCount="courses.lesson_count" :id="course.id" />
                    </Link>
                </div>
            </div>
        </AuthenticatedLayout>
    </Header>
</template>
