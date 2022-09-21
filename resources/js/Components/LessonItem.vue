<script>
    import { computed } from 'vue';
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
                const hv = computed(() => this.selected ?
                    'hover:border-none' :
                    'hover:border-transparent'
                )
                this.bc = hv
            }
        }
    }
</script>

<template>
    <div class="w-32 h-32 m-2 border-2 border-transparent rounded-lg
                transition ease-in-out delay-75
                hover:-translate-y-1 hover:scale-110
                duration-350"
            :class="bc"
        >
        <div v-if="selected"
            class="border-2 animate-pulse rounded-lg"
            v-on:click="updateIsSelected"
            >
            <img src="/images/placeholder_2.png"/>
        </div>
        <!-- Not selected and locked levels -->
        <div v-else class="relative rounded-lg">
            <img src="/images/placeholder_2.png"
                class="absolute w-32 h-30 rounded-lg"
                :class="uv"
                />
            <div v-if="!unlocked" class="absolute z-20">
                <img
                    src="/images/lock.png"
                    class="w-16 h-16 my-8 mx-8 hover:animate-lockedLvl"
                />
            </div>
        </div>
    </div>
</template>
