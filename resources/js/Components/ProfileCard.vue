<script setup>
    const props = defineProps(['name', 'email', "pfp"]);
</script>

<template>
    <div class="display flex flex-wrap pl-6 pt-6 sm:pl-12 sm:pt-12">
        <div class="font-bold text-gray-700 rounded-full bg-white font-mono
                    flex items-center justify-center
                    w-32 h-32">
        </div>
        <div class="py-8 pl-4 sm:pl-8">
            <p class="text-white pb-2 text-4xl"> {{ name }} </p>
            <p class="text-sm text-white"> {{ email }} </p>
        </div>
    </div>
</template>
