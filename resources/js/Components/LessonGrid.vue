<script setup>
    import {ref} from "vue";
    import LessonCard from "./LessonCard.vue";
    const props = defineProps(['name','lessons']);
    var placeholderName = ref('Default name');
    var placeholderDesc = ref('Default desc');
    const changePlaceholder = (i) => {
        placeholderName.value = props.lessons[i].name;
        placeholderDesc.value = props.lessons[i].description;
    };
    changePlaceholder(0);
</script>

<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease-out;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>

<template>
    <div class="w-full">
        <h1 class="text-white text-4xl font-bold py-6"> {{ name }} </h1>
        <div class="bg-card rounded-3xl display flex flex-wrap justify-center p-4">
            <div class="bg-black rounded-3xl h-32 w-1/5"> </div>
            <div class="w-4/5">
                <div class="w-full h-full">
                    <div class="float-left my-6
                                grid grid-cols-3 mx-auto text-center divide-x">
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
                        <div class="p-4 w-32">
                            <div class="grid grid-rows-2 text-left">
                                <p class="text-cardText text-md"> Progress </p>
                                <div class="mt-3 w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-emerald-300 h-2.5 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <button class=" bg-orange text-white
                                        px-4 py-2 rounded-xl my-10 mr-8
                                        hover:text-backgroundFrom focus:outline-none transition ease-in-out duration-150"> Play Demo
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="display flex flex-wrap pt-8">
            <div class="flex flex-wrap w-3/5 sm:justify-start justify-center">
                <LessonCard v-for="(lesson, index) in lessons" @click="changePlaceholder(index)"/>
            </div>
            <div class="w-2/5 pt-3">
                <transition name="fade" mode="out-in">
                    <div :key="placeholderDesc">
                        <h1 class="text-cardText text-lg"> {{ placeholderName }} </h1>
                        <p class="text-gray-300 text-md"> {{ placeholderDesc }} </p>
                    </div>
                </transition>

            </div>
        </div>
    </div>

</template>
