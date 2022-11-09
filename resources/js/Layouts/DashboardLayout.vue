<script setup>
    import AuthenticatedLayout from './AuthenticatedLayout.vue';
    import NavLink from '@/Components/Links/NavLink.vue';
    import Header from '@/Layouts/Header.vue';
    // let tabs = [
    //     {
    //         name: 'Profile',
    //         href: route('dashboard.profile'),
    //         current: route().current('.profile'),
    //     },
    //     {
    //         name: 'My Courses',
    //         href: route('dashboard.mycourses'),
    //         current: route().current('.mycourses'),
    //     },
    //     {
    //         name: 'Achievements',
    //         href: route('dashboard.achievements'),
    //         current: route().current('.achievements'),
    //     },
    // ];
</script>

<template>
    <Header>
        <AuthenticatedLayout/>
        <div class="pl-6 pr-6 sm:pl-12 pt-6">
            <ul class="flex flex-wrap
                            text-sm font-medium text-center
                            text-gray-500 border-b border-gray-200 dark:text-gray-400">
                <li class="mr-2">
                    <NavLink :href="route('dashboard.profile')" :active="route().current('dashboard.profile')">
                        Profile
                    </NavLink>
                </li>
                <li class="mr-2">
                    <NavLink :href="route('dashboard.mycourses')" :active="route().current('dashboard.mycourses') || route().current('dashboard.mycourse')">
                        My Courses
                    </NavLink>
                </li>
                <li class="mr-2">
                    <NavLink :href="route('dashboard.achievements')" :active="route().current('dashboard.achievements')">
                        Achievements
                    </NavLink>
                </li>
            </ul>
            <div class="mt-3">
                <slot> </slot>
            </div>
        </div>
    </Header>
</template>
