<script setup>
defineProps(["title", "description", "image"]);
</script>

<template>
    <div class="bg-gray-300 w-3/4 border-2">
        <div class="bg-gray-500 p-4">
            <h1 v-if="title">{{ title }}</h1>
            <h1 v-else="title">No lesson title given</h1>
        </div>
        <div class="flex wrap w-full pb-8">
            <div class="pl-12 pt-8 w-1/2">
                <img
                    class="border-black border-2 "
                    src="/images/placeholder.png"
                />
            </div>
            <div class="pt-8 w-1/2">
                <p class="">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque elementum erat vitae lorem condimentum, a
                    rutrum tellus molestie. Proin tincidunt eros sit amet
                    posuere dapibus. Maecenas fermentum et eros imperdiet
                    tempor. Sed vestibulum ex leo, ut ultrices tortor cursus
                    non.
                </p>
            </div>
        </div>
    </div>
</template>
