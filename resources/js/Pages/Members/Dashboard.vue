<script setup>
    import { ref } from "vue";
    import Header from '@/Layouts/Header.vue';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import NavLink from '@/Components/Links/NavLink.vue';
    import Profile from './Profile.vue';
    import Index from './Courses/Index.vue';
    import Achievements from './Achievements.vue';

    const props = defineProps(['courses']);
    var page = ref('profile');
    const changePlaceholder = (str) => {
        page.value = str;
    };
</script>

<template>
    <Header :user="true">
        <AuthenticatedLayout/>
        <div class="pl-6 pr-6 sm:pl-12 pt-6">
            <ul class="flex flex-wrap
                    text-sm font-medium text-center
                    text-gray-500 border-b border-gray-200 dark:text-gray-400">
                <li class="mr-2" @click="changePlaceholder('profile')">
                    <NavLink :active="page=='profile'">
                        Profile
                    </NavLink>
                </li>
                <li class="mr-2" @click="changePlaceholder('courses')">
                    <NavLink :active="page=='courses'">
                        My Courses
                    </NavLink>
                </li>
                <li class="mr-2" @click="changePlaceholder('achievements')">
                    <NavLink :active="page=='achievements'">
                        Achievements
                    </NavLink>
                </li>
            </ul>
            <div class="mt-3">
                <Profile v-if="page=='profile'"></Profile>
                <Index v-if="page=='courses'" :courses="courses"></Index>
                <Achievements v-if="page=='achievements'"/>
            </div>
        </div>
    </Header>
</template>
