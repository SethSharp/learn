<script setup>
    import CourseCard from '@/Components/Public/Courses/CourseCard.vue';
    import { ref } from "vue"

    const props = defineProps(['courses']);
    var index = ref(0);
</script>

<template>
    <div class="display flex flex-wrap justify-center md:justify-start">
        <div v-for="(course, index) in courses">
            <!-- :href="route('dashboard.mycourse', ['id'=>index+1])" -->
            <a :href="'/dashboard/mycourses/' + index+1 + '/lessons'">
                <CourseCard :name="course.name" :lessonCount="courses.lesson_count" :id="course.id" />
            </a>
        </div>
    </div>
</template>
