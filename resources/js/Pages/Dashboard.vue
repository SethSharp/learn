<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
import LessonCard from "@/Components/LessonCard.vue";

// NOTE:
/*
    Lesson data will be loaded and passed through to the grid component
    When the component is interacted with, the component will handle its own
    interaction event, but here another event will be made and it will
    change current lesson data
*/

// Current lesson data
defineProps(["curTitle", "curDesc", "curImage"]);

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="flex justify-center mt-10">
            <LessonCard
                :title="curTitle"
                :description="curDesc"
                :image="curImage"
            />
            <div class="flex">
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<!-- <template #header>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
    </h2>
</template>

<h2> SOmein</h2>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!
            </div>
        </div>
    </div>
</div> -->
