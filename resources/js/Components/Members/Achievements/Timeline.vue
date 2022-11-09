<script setup>
    import NewDate from './NewDate.vue';
    import Continuation from './Continuation.vue';

    const props = defineProps(['achievements']);
</script>

<template>
    <p class="text-white text-3xl pb-5"> Activity timeline </p>
    <ol class="relative border-l-4 border-defaultTeal ml-4">
        <li class="mb-10 ml-4">

            <NewDate date="NOV 7"/>

            <Continuation description="Let there be light: You turned on the lights"/>

            <Continuation description="Open sesame: Successfully opened the door" />

        </li>
        <br/>
        <li class="mb-10 ml-4">

            <NewDate date="NOV 10" />

            <Continuation description="Let there be light: You turned on the lights" />

            <Continuation description="Open sesame: Successfully opened the door" />

        </li>
    </ol>
</template>
