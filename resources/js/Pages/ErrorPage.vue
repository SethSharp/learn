<script setup>
    import Header from '@/Layouts/Header.vue';
    const props = defineProps(['error']);
</script>

<template>
    <Header>
        <div class="text-white">
            {{ error }}
        </div>
    </Header>
</template>
