<script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import LessonCard from '@/Components/LessonCard.vue';
    import LessonItem from '@/Components/LessonItem.vue';
    import Popup from '@/Components/Popup.vue';
    export default {
        components: { AuthenticatedLayout, LessonCard, LessonItem, Popup },
        props: ['lessonData'],
        data() {
            return {
                'title': 'Default title',
                'desc': 'Default description',
                'img': '/images/placeholder.png',
                'prevSelected': 0,
                'popUp': false
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
                    // TODO: Some on screen msg to alert player they cannot select...
                    return;
                }
                this.lessonData[this.prevSelected].selected=false;
                this.prevSelected = index;
                this.lessonData[index].selected=true;
                this.title = this.lessonData[index].title;
                this.desc = this.lessonData[index].desc;
                this.img = this.lessonData[index].src;
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

<template>
    <AuthenticatedLayout>

        <div class="w-full h-screen absolute">
            <img :src="img" class="blur-md"/>
        </div>

        <div class="w-full flex flex-wrap justify-center relative">
            <h1 class="text-4xl w-3/4">
                Lesson Select
            </h1>
        </div>

        <div class="w-full flex flex-wrap justify-center relative pt-4 pb-4 z-20">
            <div class="w-3/4 justify-center">
                <LessonCard
                    :title="title"
                    :description="desc"
                    :image="img"
                />
                <div class="flex flex-wrap pt-4">

                    <div class="flex flex-wrap custom1:w-1/2 justify-center"
                        @click="lessonLocked()"
                        >
                        <LessonItem v-for="(lesson, index) in lessonData" :title="lesson.title" :unlocked="lesson.unlocked" :selected="lesson.selected" v-on:click="changeLessonCard(index)"/>
                    </div>
                    <div class="custom1:w-1/2 bg-gray-200 opacity-50">
                        <h1 class="mt-8 ml-12 font-semibold text-3xl"> Placeholder </h1>
                        <p class="ml-12 pr-4">
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
