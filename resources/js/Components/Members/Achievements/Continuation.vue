<script setup>
    const props = defineProps(['description']);
</script>

<template>
    <div class="mt-8 bg-teal-900 rounded-lg w-fit px-4">
        <div class="absolute w-5 h-5 border-2 mt-2.5 border-defaultTeal bg-card rounded-full -left-3 "> </div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white p-2">
            {{ description }}
        </h3>
    </div>
</template>
