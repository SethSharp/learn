<script setup>
    import CourseCard from '@/Components/CourseCard.vue';
    import LessonGrid from '../Components/LessonGrid.vue';
    import { ref } from "vue"

    const props = defineProps(['courses', 'lessons', 'user']);
    var show = ref(false), index = ref(0);
    const hide = () => {
        show.value = !show.value;
    }
    const showLessons = (i) => {
        hide();
        index.value = i;
    };
</script>

<template>
    <div class="display flex flex-wrap justify-center md:justify-start">
        <div v-if="show==false" v-for="(course, index) in courses">
            <div @click="showLessons(index)">
                <CourseCard :name="course.name" :lessonCount="courses.lesson_count" :id="course.id" />
            </div>
        </div>
        <div v-else class="w-full mr-12">
            <div class="text-orange text-xl font-extrabold border-2 rounded-full border-orange
                        px-1.5 w-8" @click="hide()"> &lt </div>
            <LessonGrid :name="courses[index].name" :lessons="courses[index].lessons" :user="user"></LessonGrid>
        </div>
    </div>
</template>
