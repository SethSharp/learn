<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Header from '@/Layouts/Header.vue';
    import AchievementIcon from '@/Components/AchievementIcon.vue';
    import LessonAchievement from '@/Components/LessonAchievement.vue';

    //var achievements = ['1','2','3','4','5','6','7','8','9','10'];
    let achievements = new Array(30).fill('hello');
</script>

<template>
    <div class="display flex flex-wrap mt-8">
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
</template>
