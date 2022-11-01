<script setup>
    const props = defineProps(['name', 'email', "pfp"]);
</script>

<template>
    <div class="display flex flex-wrap">
        <div class="font-bold text-gray-700 rounded-full bg-white flex items-center justify-center font-mono
                    w-32 h-32">
        </div>
        <div class="py-8 pl-8">
            <p class="text-white pb-2 text-4xl"> {{ name }} </p>
            <p class="text-sm text-white"> {{ email }} </p>
        </div>
    </div>
</template>
