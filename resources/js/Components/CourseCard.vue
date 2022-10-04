<script setup>
    let props = defineProps(['name']);
</script>


<template>
    <div class="bg-card rounded-3xl">
        <div class="grid grid-cols-1 grid-rows-2 p-4">
            <div class="">
                <!-- <p class="bg-orange font-white px-3 w-22"> Beginner </p> -->
                <!-- Temp image -->
                <div class="bg-black rounded-3xl w-full h-40">

                </div>
            </div>
            <div class="pt-8">
                <h1 class="text-white text-lg"> {{ name }} </h1>
                <h1 class="text-gray-300 pt-2 text-md"> 12 Lessons </h1>
                <h1 class="text-gray-300 pt-3 text-sm"> Beginner | 100 students | Certificate included </h1>
            </div>
        </div>
    </div>
</template>
