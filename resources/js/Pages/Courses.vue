<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    let props = defineProps(['courses']);
</script>

<style> </style>

<template>
    <div class="bg-gradient-to-br from-backgroundFrom to-backgroundTo">
        <AuthenticatedLayout>
            <h1> This is courses page</h1>
            <div v-for="course in courses">
                {{ course.title }}
            </div>
        </AuthenticatedLayout>
    </div>

</template>
