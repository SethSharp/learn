<script setup>
    const props = defineProps(['date']);
</script>
<template>
    <div class="absolute w-4 h-4 rounded-full mt-4 -left-2.5 bg-defaultTeal"> </div>
    <div class="text-md font-extrabold leading-none text-gray-400 dark:text-gray-500
                flex pl-4">
        <div class="bg-defaultTeal p-4 font-black text-card w-fit"> Larascape </div>
        <div class="p-4 w-fit text-white font-black"> {{ date }} </div>
    </div>
</template>
