<script>

    import Popup from '@/Components/Popup.vue';
    import LessonCard from '@/Components/LessonCard.vue';
    import LessonItem from '@/Components/LessonItem.vue';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    export default {
        components: { AuthenticatedLayout, LessonCard, LessonItem, Popup, Popup },
        props: ['lessonData'],
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
    transition: opacity 0.75s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>

<template>
    <AuthenticatedLayout>

        <div class="h-full w-full absolute">
            <transition name="fade" mode="out-in">
                <div :key="lesson.src">
                    <img :src="lesson.src" class="blur-md w-full" />
                </div>
            </transition>
        </div>

        <div class="w-full flex flex-wrap justify-center relative mt-8">
            <h1 class="text-5xl w-3/4 font-title font-extrabold">
                lesson select
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
                    <div class="flex flex-wrap custom1:w-1/2 justify-center">
                        <LessonItem v-for="(lesson, index) in lessonData"
                                    :unlocked="lesson.unlocked"
                                    :selected="lesson.selected"
                                    v-on:click="changeLessonCard(index)"
                        />
                    </div>

                    <div class="custom1:w-1/2 bg-gray-200 opacity-50 sm:mt-3">
                        <h1 class="mt-2 pl-2 sm:mt-8 sm:px-6 font-semibold text-3xl"> Placeholder </h1>
                        <p class="pb-2 px-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris luctus ipsum quis sollicitudin tincidunt.
                            Fusce feugiat nibh sit amet urna ultricies rutrum.
                            Donec pellentesque libero vel turpis laoreet congue.
                            Sed lobortis velit sit amet odio fringilla dapibus.
                            Aliquam odio nisi, vehicula id hendrerit at, scelerisque non velit.
                            Donec bibendum fermentum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
