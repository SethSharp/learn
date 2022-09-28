<script>
    import Popup from '@/Components/Popup.vue';
    import LessonCard from '@/Components/LessonCard.vue';
    import LessonItem from '@/Components/LessonItem.vue';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    export default {
        components: { AuthenticatedLayout, LessonCard, LessonItem, Popup, Popup },
        props: ['lessonData', 'courseTitle', 'courseID'],
        data() {
            return {
                'title': 'Default title',
                'desc': 'Default description',
                'img': '/images/placeholder.png',
                'progress': '0%',
                'prevSelected': 0,
                'popUp': false,
                'lesson': ''
            }
        },created() {
            var i = 1;
            for (; i < this.lessonData.length; i++) {
                if (this.lessonData[i].unlocked) continue; else break;
            }
            this.changeLessonCard(i-1);
        }, methods: {
            changeLessonCard: function(index) {
                if (!this.lessonData[index].unlocked) {
                    this.lessonLocked();
                    return;}
                this.lessonData[this.prevSelected].selected=false;
                this.prevSelected = index;
                this.lessonData[index].selected=true;
                this.lesson = this.lessonData[index];
            },
            lessonLocked: function() {
                this.popUp = true;
                setTimeout(() => {
                    this.popUp = false;
                }, 3000);
            }
        }
    }
</script>

<style>
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.5s ease-out;
    }

    .fade-enter-from,
    .fade-leave-to {
        opacity: 0.1;
    }
</style>

<template>
    <div class="h-full w-full absolute">
        <transition name="fade" mode="out-in">
            <div :key="lesson.src">
                <img :src="lesson.src" class="blur-md w-full" />
            </div>
        </transition>
    </div>

    <div class="w-full flex flex-wrap justify-center relative mt-8">
        <h1 class="text-5xl w-3/4 font-title font-extrabold">
            {{ courseTitle }}
        </h1>
    </div>

    <div class="w-full flex flex-wrap justify-center relative pt-4 pb-4 z-20">
        <div class="w-3/4 justify-center">
            <LessonCard
                :title="lesson.title"
                :description="lesson.desc"
                :image="lesson.src"
                :progress="lesson.progress"
            />
            <!-- <Popup v-if="popUp">
                This level is locked
            </Popup> -->
            <div class="flex flex-wrap pt-4">
                <div class="flex flex-wrap w-full justify-center">
                    <LessonItem v-for="(lesson, index) in lessonData"
                                :unlocked="lesson.unlocked"
                                :selected="lesson.selected"
                                v-on:click="changeLessonCard(index)"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
