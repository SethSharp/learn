<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    let props = defineProps(['name', 'lessonCount', 'userCount', 'id']);
</script>

<template>
    <Link :href="'/courses/' + id + '/lessons'">
        <div class="bg-card rounded-3xl mx-4 my-4">
            <div class="grid grid-cols-1 grid-rows-2 p-4">
                <div class="">
                    <!-- <p class="bg-orange font-white px-3 w-22"> Beginner </p> -->
                    <!-- Temp image -->
                    <div class="bg-black rounded-3xl w-full h-40">
                    </div>
                </div>
                <div class="pt-8">
                    <h1 class="text-white text-lg"> {{ name }} </h1>
                    <h1 class="text-gray-300 pt-2 text-md"> {{ lessonCount }} Lessons </h1>
                    <h1 class="text-gray-300 pt-3 text-sm"> Beginner | {{ userCount }} students | Certificate included </h1>
                </div>
            </div>
        </div>
    </Link>

</template>
