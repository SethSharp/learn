<script setup>
defineProps(["title", "description", "image"]);
</script>

<template>
    <div class="">
        <div class="bg-gray-900 opacity-90 p-4">
            <h1 v-if="title" class="font-black text-orange-500">{{ title }}</h1>
            <h1 v-else="title" class="font-black">No lesson title given</h1>
        </div>
        <div class="flex flex-wrap w-full p-3 bg-gray-200 opacity-90">
            <div class="w-full md:w-1/2 grid place-items-center mb-4 md:mb-0 p-4 sm:p-0">
                <!-- <div class="w-3/4 h-full border-black border-2"> </div> -->
                <img class="border-black border-2 z-20"
                    :src="image"
                    :alt="image"
                />
            </div>
            <div class="w-full md:w-1/2 ">
                <p class="px-6 text-center md:text-left">
                    <!-- {{description}} -->
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris luctus ipsum quis sollicitudin tincidunt. Fusce feugiat nibh sit amet urna ultricies rutrum. Donec pellentesque libero vel turpis laoreet congue. Sed lobortis velit sit amet odio fringilla dapibus. Aliquam odio nisi, vehicula id hendrerit at, scelerisque non velit. Donec bibendum fermentum.
                </p>
            </div>
        </div>
    </div>
</template>
