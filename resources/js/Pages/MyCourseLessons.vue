<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Header from '@/Layouts/Header.vue';
    import LessonGrid from '@/Components/LessonGrid.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    const props = defineProps(['name', 'lessons']);
</script>

<template>
    <Header>
        <AuthenticatedLayout>
            <p class="text-orange">
                <Link href="/dashboard/mycourses">
                    Back
                </Link>
            </p>
            <LessonGrid :name="name" :lessons="lessons" />
        </AuthenticatedLayout>
    </Header>
</template>
