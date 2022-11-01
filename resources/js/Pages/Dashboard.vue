<script setup>
    import Header from '@/Layouts/Header.vue';
    import NavLink from '@/Components/NavLink.vue';
    import Profile from './Profile.vue';
    import { ref } from "vue";
    import MyCourses from './MyCourses.vue';
    import Achievements from './Achievements.vue';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    const props = defineProps(['courses', 'lessons', 'user']);

    var page = ref('profile');

    const changePlaceholder = (str) => {
        page.value = str;
    };
</script>

<template>
    <Header :user="user">
        <AuthenticatedLayout/>
        <div class="pl-12 pt-6">
            <ul class="flex flex-wrap
                    text-sm font-medium text-center
                    text-gray-500 border-b border-gray-200 dark:text-gray-400">
                <li class="mr-2" @click="changePlaceholder('profile')">
                    <NavLink :href="route('dashboard.profile')" :active="page=='profile'">
                        Profile
                    </NavLink>
                </li>
                <li class="mr-2" @click="changePlaceholder('courses')">
                    <NavLink :href="route('dashboard.courses')" :active="page=='courses'">
                        My Courses
                    </NavLink>
                </li>
                <li class="mr-2" @click="changePlaceholder('achievements')">
                    <NavLink :href="route('dashboard.achievements')" :active="page=='achievements'">
                        Achievements
                    </NavLink>
                </li>
            </ul>
            <div class="mt-3">
                <Profile v-if="page=='profile'"></Profile>
                <MyCourses v-if="page=='courses'" :courses="courses" :lessons="lessons" :user="user"></MyCourses>
                <Achievements v-if="page=='achievements'"></Achievements>
            </div>
        </div>
    </Header>
</template>
