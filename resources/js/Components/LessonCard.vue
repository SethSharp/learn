<script>
    export default {
        props: ['title', 'description', 'image', 'progress'],
    }
</script>



<template>
    <div class="">
        <div class="dark:bg-gray-800 opacity-90 p-4">
            <h1 v-if="title" class="font-black text-orange-500">{{ title }}</h1>
            <h1 v-else="title" class="font-black">No lesson title given</h1>
        </div>
        <div class="flex flex-wrap w-full p-3 bg-gray-200 opacity-90">
            <div class="w-full lg:w-1/2 grid place-items-center mb-4 md:mb-0 p-4 sm:p-0">

                <transition name="fade" mode="out-in">
                    <div :key="image">
                        <img class="border-black border-2 z-20 aspect-video"
                            :src="image"
                            :alt="image"
                        />
                    </div>
                </transition>

            </div>
            <div class="w-full lg:w-1/2 sm:p-5">
                <p class="text-center md:text-left px-2">
                    <!-- {{description}} -->
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris luctus ipsum quis sollicitudin tincidunt. Fusce feugiat
                    nibh sit amet urna ultricies rutrum. Donec pellentesque libero
                    vel turpis laoreet congue. Sed lobortis velit sit amet odio
                    fringilla dapibus. Aliquam odio nisi, vehicula id hendrerit at,
                    scelerisque non velit. Donec bibendum fermentum.
                </p>
                <div class="w-full px-2 py-2">
                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 px-0.5 py-0.5">
                        <div class="bg-green-400 text-xs font-medium text-blue-100 text-center
                                    p-0.5 leading-none rounded-full"
                            :style="{'width':progress}">
                            {{progress}}
                        </div>
                    </div>
                </div>

                <div class="w-full px-2">
                    <button class="bg-orange-500 text-white rounded-lg py-2 px-4">
                        <p v-if="progress == '0%' || progress == '100%'">
                            Play
                        </p>
                        <p v-else>
                            Continue
                        </p>
                    </button>
                </div>

            </div>
        </div>
    </div>
</template>
