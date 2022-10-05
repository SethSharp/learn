<script setup>
    import Header from '@/Layouts/Header.vue';
    import CourseCard from '@/Components/CourseCard.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import {ref} from 'vue';
    let props = defineProps(['courses']);
    var challenge = ref(false);
    const change = () => {
        challenge.value = !challenge.value;
    }
</script>

<template>
    <Header>
        <h1 class="text-white text-4xl font-bold mx-12 py-6"> All courses</h1>
        <div class="display flex justify-center md:justify-start flex-wrap mx-12">
            <div v-for="course in courses">
                <Link :href="'/courses/' + course.id + '/lessons'" >
                    <CourseCard :name="course.name" :lessonCount="course.lessons_count"
                                :userCount="course.user_count" :id="course.id"/>
                </Link>
            </div>

        </div>
    </Header>
</template>
