<script setup>
import {onMounted, ref} from "vue";
import unityGameSetUp from '../../GameViewJava';
import {Head, Link} from '@inertiajs/inertia-vue3';

onMounted(() => {
    unityGameSetUp();
    window.addEventListener("stateFromUnity", (e) => receivedJsonSaveFromUnity(e));
    window.addEventListener("requestData", (e) => requestLoadGameData(e));
    window.addEventListener("StartChallenge", (e) => receivedChallengeFromUnity(e));
})

const props = defineProps({
    lesson: Object,
    course: Object,
})

let showChallengeWindow = ref(false);
let resultWarning = ref(false);
let challengeUserAnswer = ref("");
let challengeAnswer = ref("");

const receivedChallengeFromUnity = async (e) => {
    challengeAnswer.value = e.detail.challenge;
    console.log(challengeAnswer.value);
    showChallengeWindow.value = true;
}

const checkAnswer = (e) => {
    if (challengeUserAnswer.value.trim() === challengeAnswer.value) {
        showChallengeWindow.value = false;
        gameInstance.SendMessage('GameController', 'CorrectAnswer');
    } else {
        resultWarning.value = true;
    }
}

const receivedJsonSaveFromUnity = async (e) => {
    try {
        await axios.post(route('courses.lessons.save', {
            course: props.course,
            lesson: props.lesson
        }), {
            game_state: e.detail.gamestate
        });
    } catch (e) {
        window.alert("failed to add to database, error: " + e);
    }
}

const requestLoadGameData = async (e) => {
    try {
        let response = await axios.get(route('courses.lessons.load', {course: props.course, lesson: props.lesson}))
        let gameMessage = response.data['gameLoaded'];

        if (response.data['gameLoaded'] == null) {
            gameInstance.SendMessage('GameController', 'newGame');
        } else {
            gameInstance.SendMessage('GameController', 'loadedDataFromWeb', gameMessage);
        }
    } catch (e) {
        gameInstance.SendMessage('GameController', 'newGame');
        console.log("axios error: " + e);
    }
}

</script>
<template>
    <Head title="GameView"/>
    <div class="">
        <div id="unity-container" class="unity-desktop flex flex-col">
            <canvas ref='canvas' id="unity-canvas" width=960 height=600
                    class="border border-solid border-8 border-blue-400 rounded-3xl">
            </canvas>
            <div id="unity-loading-bar">
                <div id="unity-logo"></div>
                <div id="unity-progress-bar-empty">
                    <div id="unity-progress-bar-full"></div>
                </div>
            </div>
            <Transition
                enter-active-class="transition-opacity duration-300"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition-opacity duration-150"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div v-if="showChallengeWindow">
                    <form @submit.prevent="checkAnswer" class="mb-6 flex flex-col bg-zinc-500 p-3 ">
                        <label for="large-input" class=" mb-2 text-lg font-medium text-gray-900 dark:text-gray-300">
                            Answer here
                        </label>
                        <div v-show="resultWarning">
                            <div
                                class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                     viewBox="0 0 20 20"></svg>
                                <div>
                                    <span class="font-medium">Attempt Incorrect! </span>
                                    Change a few things up and try submitting again.
                                </div>
                            </div>
                        </div>
                        <textarea
                            v-model="challengeUserAnswer"
                            type="text"
                            id="large-input"
                            class="block  h-40 p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        />
                        <div class="flex row-auto justify justify-center gap-5">
                            <button type="submit"
                                    class=" my-4 w-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </Transition>
        </div>
    </div>
</template>

