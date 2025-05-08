<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    activity: Object,
});
</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h3 class="text-center font-bold">Actividad!</h3>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h1 class="text-2xl font-bold mb-4">{{ activity.name }}</h1>
                        
                        <div class="mb-4">
                            <h2 class="text-xl font-semibold mb-2">Descripción:</h2>
                            <p class="text-gray-700">{{ activity.description }}</p>
                        </div>
                        
                        <div class="mb-4">
                            <h2 class="text-xl font-semibold mb-2">Creado por:</h2>
                            <p class="text-gray-700">{{ activity.user.name }}</p>
                        </div>
                        
                        <div class="mt-6">
                            <Link :href="route('activities.index')" class="bg-blue-500 text-white px-4 py-2 rounded">
                                Volver a la lista
                            </Link>
                            
                            <div v-if="$page.props.auth.user.id === activity.user_id" class="mt-4">
                                <Link :href="route('activities.edit', activity.id)" class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">
                                    Editar
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>