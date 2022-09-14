<script>
    export default {
        props: ['selected', 'unlocked'],
        methods: {
        }
    }
</script>

<template>
    <div class="w-32 h-32 m-2">
        <div v-if="selected"
            class="border-2 border-black"
            v-on:click="updateIsSelected"
            >
            <img src="/images/placeholder_2.png"/>
        </div>
        <!-- Not selected and locked levels -->
        <div v-else class="relative">
            <img src="/images/placeholder_2.png" class="absolute w-32 h-32"/>
            <div v-if="!unlocked" class="absolute z-20">
                <div class="bg-black w-32 h-32 absolute opacity-30"></div>
                <img src="/images/lock.png" class="w-16 h-16 my-8 mx-8"/>
            </div>
        </div>
    </div>
</template>
