<script setup>
    import AchievementIcon from '@/Components/Members/Achievements/AchievementIcon.vue';
    import LessonAchievement from '@/Components/Members/Achievements/LessonAchievement.vue';

    let achievements = new Array(30).fill('hello');
</script>

<template>
    <div>
        <div class="display flex flex-wrap">
            <div class="border-r-8 border-teal-200 w-full sm:w-1/5 pl-4 z-20">
                <LessonAchievement name="Larascape"/>
                <LessonAchievement name="Coming Soon..." />
                <LessonAchievement name="Coming Soon..." />
            </div>
            <div class="w-full sm:w-4/5">
                <div class="w-full h-full flex flex-wrap justify-center">
                    <AchievementIcon v-for="achievement in achievements"/>
                </div>
            </div>
        </div>
        <div class="mt-8 ml-4 pb-10">
            <p class="text-white text-4xl pb-5"> Activity </p>
            <ol class="relative border-l-4 border-defaultCyan ml-4">
                <li class="mb-10 ml-4">
                    <div class="absolute w-4 h-4 rounded-full mt-1.5 -left-2.5 bg-defaultCyan"> </div>
                    <div class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500
                                flex pl-4">
                        <div class="bg-defaultCyan p-2 font-black text-card w-fit"> Larascape </div>
                        <div class="p-2 w-fit text-white font-black"> NOV 7 </div>
                    </div>

                    <!-- Will be a small icon -->
                    <div class="mt-3">
                        <div class="absolute w-5 h-5 border-2 mt-1 border-defaultCyan bg-card rounded-full -left-3 "> </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white pl-4">
                            Let there be light: You turned on the lights
                        </h3>
                    </div>
                    <div class="pt-4">
                        <div class="absolute w-5 h-5 border-2 mt-1 border-defaultCyan bg-card rounded-full -left-3 "> </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white pl-4">
                            Open sesame: Successfully opened the door
                        </h3>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</template>
