<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import NavLink from '@/Components/NavLink.vue';
    import ProfileCard from '@/Components/ProfileCard.vue';
    const props = defineProps(['lessons']);
</script>

<template>

    <div class="pl-12 pt-12">
        <ProfileCard name="Seth Sharp" email="sesharp@outlook.com"/>
        <ul
            class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400">
            <li class="mr-2">
                <NavLink :href="route('dashboard.profile')" :active="route().current('dashboard.profile')">
                    Profile
                </NavLink>
            </li>
            <li class="mr-2">
                <NavLink :href="route('dashboard.courses')" :active="route().current('dashboard.courses')">
                    My Courses
                </NavLink>
            </li>
            <li class="mr-2">
                <NavLink :href="route('dashboard.achievements')" :active="route().current('dashboard.achievements')">
                    Achievements
                </NavLink>
            </li>
        </ul>
    </div>

    <main>
        <div class="pl-12 pt-6">
            <slot />
        </div>
    </main>
</template>
