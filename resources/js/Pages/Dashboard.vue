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
        <div class="flex justify-center mt-10">
            <LessonCard
                :title="title"
                :description="desc"
                :image="img"
            />
        </div>
        <div class="flex justify-center">
            <div v-for="(lesson, index) in lessonData"
                class="">
                <LessonItem :title="lesson.title" :unlocked="lesson.unlocked" :selected="lesson.selected" v-on:click="changeLessonCard(index)"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
