<script>
    export default {
        props: ['selected', 'unlocked'],
        methods: {
        }
    }
</script>

<template>
    <div v-if="selected"
        class="bg-green-400 w-32 h-32 m-10 border-2 border-black"
        v-on:click="updateIsSelected"
        >
        <img src="/images/placeholder_2.png"/>
    </div>
    <div v-else
        class="bg-green-400 w-32 h-32 m-10 border-2 border-green"
        >
        <img src="/images/placeholder_2.png"/>
    </div>
</template>
