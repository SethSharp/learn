<script setup>
    import { computed } from 'vue';

    const props = defineProps(['active']);
    const classes = computed(() => props.active ?
        'inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300 border-b-2 text-defaultTeal border-defaultTeal' :
        'inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300 border-b-2 border-transparent'
);

</script>

<template>
    <div :class="classes">
        <slot />
    </div>
</template>
