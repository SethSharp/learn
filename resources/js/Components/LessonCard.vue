<script setup>
    const props = defineProps(['name']);
</script>

<template>
    <div class="bg-gray-600 rounded-sm w-32 h-32 m-4">
        {{ name }}
    </div>
</template>
