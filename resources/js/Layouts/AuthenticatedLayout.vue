<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import NavLink from '@/Components/NavLink.vue';
    import ProfileCard from '@/Components/ProfileCard.vue';
    const props = defineProps(['lessons']);
</script>

<template>
    <div class="pl-12 pt-12">
        <ProfileCard name="Seth Sharp" email="sesharp@outlook.com"/>
    </div>
</template>
