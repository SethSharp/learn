<script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import LessonCard from '@/Components/LessonCard.vue';
    import LessonItem from '@/Components/LessonItem.vue';
    export default {
        components: { AuthenticatedLayout, LessonCard, LessonItem },
        props: ['lessonData'],
        data() {
            return {
                'title': 'Default title',
                'desc': 'Default description',
                'img': '/images/placeholder.png',
                'prevSelected': 0
            }
        },created() {
            this.changeLessonCard(0);
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
            }
        }
    }
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <!-- <div class=" w-full h-screen z-10 absolute">
            <div class="bg-black w-3/4 h-4 z-20 mt-20"></div>
        </div> -->

        <div class="w-full flex flex-wrap justify-center absolute pt-4 pb-4 z-20">
            <div class="w-3/4 justify-center">
                <LessonCard
                    :title="title"
                    :description="desc"
                    :image="img"
                />
                <div class="flex flex-wrap">
                    <div class="flex flex-wrap custom1:w-1/2 justify-center">
                        <LessonItem v-for="(lesson, index) in lessonData" :title="lesson.title" :unlocked="lesson.unlocked" :selected="lesson.selected" v-on:click="changeLessonCard(index)"/>
                    </div>
                    <div class="custom1:w-1/2">
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
