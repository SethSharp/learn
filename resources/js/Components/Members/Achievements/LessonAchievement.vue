<script setup>
    import { ref } from 'vue';

    const props = defineProps(['name']);
    let hover = ref('invisible');
</script>

<template>
    <button class="bg-card text-white font-extrabold rounded-l-2xl text-center py-12 sm:py-8 mb-4 mr-4
                    ease-in-out w-full z-10"
            @mouseover="hover = 'visible'"
            @mouseleave="hover = 'invisible'">
                <!--  -->
        <div class="absolute align-middle mt-5 ml-5">
            {{ name }}
        </div>
        <!-- Triangle -> Selection -->
        <div class="float-right" :class="hover">
            <div class="w-11 overflow-hidden">
                <div class="h-16 bg-teal-200 -rotate-45 transform origin-top-right"></div>
            </div>
        </div>
    </button>
</template>
