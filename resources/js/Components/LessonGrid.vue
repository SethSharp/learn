<script setup>
    import {ref} from "vue";
    import LessonCard from "./LessonCard.vue";

    const props = defineProps(['name','lessons','user']);
    var placeholderName = ref('Default name');
    var placeholderDesc = ref('Default desc');
    const changePlaceholder = (i) => {
        placeholderName.value = props.lessons[i].name;
        placeholderDesc.value = props.lessons[i].description;
    };
    changePlaceholder(0);
</script>

<template>
    <div class="w-full">
        <h1 class="text-white text-4xl font-bold py-6"> {{ name }} </h1>
        <div class="bg-card rounded-3xl display flex flex-wrap justify-center sm:justify-start p-4">
            <!-- Course image (Not lesson image) -->
            <div class="p-8">
                <img class="w-44 h-32 object-cover my-auto" src="../../../public/images/placeholder.png"/>
            </div>
            <!-- Lesson count, level and progress section -->
            <div class="my-auto">
                <div class="w-full h-full">
                    <div class="float-left my-6
                                grid grid-cols-2 sm:grid-cols-3 mx-auto text-center sm:divide-x">
                        <div class="p-4">
                            <div class="grid grid-rows-2 text-left">
                                <p class="text-cardText text-md"> Lessons </p>
                                <p class="text-gray-300 text-sm"> {{ lessons.length }} Lessons </p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="grid grid-rows-2 text-left">
                                <p class="text-cardText text-md"> Level </p>
                                <p class="text-gray-300 text-sm"> Beginner </p>
                            </div>
                        </div>
                        <div v-if="user==true" class="p-4 w-32">
                            <div class="grid grid-rows-2 text-left">
                                <p class="text-cardText text-md"> Progress </p>
                                <div class="mt-3 w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-emerald-300 h-2.5 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Displays all lessons and description -->
        <div class="display flex flex-wrap pt-8">
            <div class="flex flex-wrap sm:w-3/5 justify-center sm:justify-start">
                <LessonCard v-for="(lesson, index) in lessons" @click="changePlaceholder(index)"/>
            </div>
            <div class="sm:w-2/5 pt-3 w-full">
                <Transition
                    enter-active-class="transition: opacity duration-300 ease-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition: opacity duration-300 ease-out"
                    leave-to-class="opacity-0"
                    mode="out-in"
                    >
                        <div :key="placeholderDesc" class="pl-6 sm:pl-2">
                            <h1 class="text-cardText text-3xl"> {{ placeholderName }} </h1>
                            <p class="text-gray-300 text-md"> {{ placeholderDesc }} </p>
                        </div>
                </Transition>
            </div>
        </div>
    </div>

</template>
