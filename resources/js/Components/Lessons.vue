<script setup>
    import LessonCard from '../Components/LessonCard.vue';
    import {ref} from "vue";
    const props = defineProps(['userAuth','name','lessons']);
    var placeholderName = ref('Default name');
    var placeholderDesc = ref('Default desc');
    const changePlaceholder = (i) => {
        placeholderName.value = props.lessons[i].name;
        placeholderDesc.value = props.lessons[i].description;
    }
    changePlaceholder(1);
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
    <h1 class="text-white text-4xl font-bold mx-12 py-6"> {{ name }} </h1>
    <div class="bg-card rounded-3xl mx-12 display flex flex-wrap justify-center p-4">
        <div class="bg-black rounded-3xl h-32 w-1/5"> </div>
        <div class="w-4/5">
            <div class="w-full h-full">
                <div class="float-left my-6
                                    grid max-w-sm grid-cols-2 mx-auto text-center divide-x shadow-md">
                    <div class="p-4">
                        <div class="grid grid-rows-2 text-left">
                            <p class="text-cardText text-md"> Lessons </p>
                            <p class="text-gray-300 text-sm">{{ lessons.length }} Lessons </p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="grid grid-rows-2 text-left">
                            <p class="text-cardText text-md"> Level </p>
                            <p class="text-gray-300 text-sm"> Beginner </p>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button class="bg-orange text-white px-4 py-2 rounded-xl my-10 mr-8 hover:text-backgroundFrom
                                                        focus:outline-none transition ease-in-out duration-150"> Play Demo
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="mx-12 display flex flex-wrap pt-8">
        <div class="dispaly flex flex-wrap w-3/5">
            <LessonCard v-for="(lesson, index) in lessons" @click="changePlaceholder(index)" :name="lesson.name" />
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
</template>
