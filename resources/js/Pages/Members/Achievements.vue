<script setup>
    import AchievementIcon from '@/Components/Members/Achievements/AchievementIcon.vue';
    import LessonAchievement from '@/Components/Members/Achievements/LessonAchievement.vue';
import Timeline from '@/Components/Members/Achievements/Timeline.vue';

    let achievements = new Array(30).fill('hello');
</script>

<template>
    <div class="mt-16">
        <div class="display flex flex-wrap">
            <div class="border-r-8 border-teal-200 w-full sm:w-1/5 pl-4 z-20">
                <LessonAchievement name="Larascape" class="align-bottom"/>
            </div>
            <div class="w-full sm:w-4/5">
                <div class="w-full h-full flex flex-wrap justify-center">
                    <div v-for="achievement in achievements">
                        <AchievementIcon :description="achievement" />
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 ml-4 pb-10">
            <Timeline :achievements="achievements"/>
        </div>
    </div>
</template>
