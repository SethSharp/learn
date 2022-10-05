<script setup>
    import CourseCard from '@/Components/CourseCard.vue';
    import ProfileCard from '@/Components/ProfileCard.vue';
    const props = defineProps(['lessons'])
    var selected = 'profile';
</script>

<template>
    <ProfileCard name="Seth Sharp" email="sesharp@outlook.com"/>
    <div>
        <ul
            class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="mr-2">
                <a href="#"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">
                    Profile
                </a>
            </li>
            <li class="mr-2">
                <a href="#"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">
                    My Courses
                </a>
            </li>
            <li class="mr-2">
                <a href="#"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">
                    Achievements
                </a>
            </li>
        </ul>
    </div>

    <main>
       <slot/>
    </main>
</template>
