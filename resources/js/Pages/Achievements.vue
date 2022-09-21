<script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import AchievementCard from '@/Components/AchievementCard.vue';
    export default {
    components: { AuthenticatedLayout, AchievementCard },
        props: ['achievementData'],
    }
</script>
<template>
    <AuthenticatedLayout>
        <div class="px-20">
            <ol class="relative border-l border-gray-200 dark:border-gray-700">
                <li class="mb-10 ml-4" v-for="ac in achievementData">
                    <AchievementCard
                        :title="ac.title"
                        :desc="ac.desc"
                        :date="ac.date"
                    />
                </li>
            </ol>
        </div>
    </AuthenticatedLayout>
</template>
