<script setup>
    const props = defineProps(['name']);
</script>

<template>
    <button class="bg-black text-white font-extrabold rounded-l-2xl text-center py-12 sm:py-8 mb-4 mr-4
                ease-in-out w-full z-10">
                <!-- hover:scale-x-125 hover:-translate-x-6 hover:delay-75 duration-150 -->
        <!-- <div class=" align-middle">
            {{ name }}
        </div> -->
        <div class="relative">
            <div class="w-11 overflow-hidden float-right">
                <div class="h-16 bg-teal-200 -rotate-45 transform origin-top-right"></div>
            </div>
        </div>
    </button>
</template>
