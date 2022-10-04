<script setup>
    import ApplicationLogo from '@/Components/ApplicationLogo.vue';
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div>
        <div class="min-h-screen">
            <nav class="">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo class="block h-9 w-auto" />
                                </Link>
                            </div>

                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class=" inline-flex items-center px-3 py-2
                                                    border border-transparent text-sm leading-4 font-medium rounded-md
                                                    text-white bg-orange hover:text-backgroundFrom
                                                    focus:outline-none transition ease-in-out duration-150">
                                        Logouta
                                    </button>
                                </span>
                            </div>
                        </div>




                    </div>
                </div>

            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
