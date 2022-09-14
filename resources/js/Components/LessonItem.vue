<script>
    export default {
        props: ['selected', 'unlocked'],
        data() {
            return {
                'uv':'blur-sm',
                'bc': 'hover:border-transparent'
            }
        },
        methods: {
        }, created() {
            if (this.unlocked) {
                this.uv = 'blur-none'
                this.bc = 'hover:border-black'
            }
        }
    }
</script>

<template>
    <div class="w-32 h-32 m-2 border-2 "
        :class="bc"
        >
        <div v-if="selected"
            class="border-2 border-black"
            v-on:click="updateIsSelected"
            >
            <img src="/images/placeholder_2.png"/>
        </div>
        <!-- Not selected and locked levels -->
        <div v-else class="relative">
            <img src="/images/placeholder_2.png"
                class="absolute w-32 h-30"
                :class="uv"
                />
            <div v-if="!unlocked" class="absolute z-20">
                <!-- <div class="bg-black w-32 h-32 absolute opacity-30"></div> -->
                <img
                    src="/images/lock.png"
                    class="w-16 h-16 my-8 mx-8 hover:animate-lockedLvl"
                />
            </div>
        </div>
    </div>
</template>
