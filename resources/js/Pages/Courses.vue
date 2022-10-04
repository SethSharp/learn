<script setup>

    let props = defineProps(['courses']);

</script>

<style> </style>

<template>
    <h1> This is courses page</h1>
    <div v-for="course in courses">
        {{ course.title }}
    </div>
</template>
