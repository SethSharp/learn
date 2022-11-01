<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    let props = defineProps(['name', 'lessonCount', 'userCount', 'id']);
</script>

<template>
    <div class="bg-card rounded-3xl mx-4 my-4 w-72 h-auto">
        <div class="grid grid-cols-1 grid-rows-2 p-4">
            <div class="">
                <!-- Temp image -->
                <div class="bg-black rounded-3xl w-full h-40 text-white">
                    <!-- <p class="bg-orange font-white px-6 w-28 rounded-lg ml-2"> Beginner </p> -->
                </div>
            </div>
            <div class="pt-8">
                <h1 class="text-white text-lg">{{ name }} </h1>
                <h1 class="text-gray-300 pt-2 text-md"> {{ lessonCount }} Lessons </h1>
                <h1 class="text-gray-300 pt-3 text-xs"> Beginner | {{ userCount }} students | Certificate included </h1>
                <div class="mt-3 w-4/5 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-emerald-300 h-2.5 rounded-full" style="width: 45%"></div>
                </div>
            </div>
        </div>
    </div>
</template>
