<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import axios from 'axios';
import { onMounted, ref } from 'vue';
import SearchBar from '@/Components/SearchBar.vue';
import { usePage } from '@inertiajs/vue3';

// Obtener el usuario autenticado actual
const user = usePage().props.auth.user;

const props = defineProps({
    activity: Array,
});

const activities = ref(props.activity);
const filteredActivities = ref(props.activity);

const deleteActivity = (id) => {
    axios.delete(route('activities.destroy', id))
        .then(response => {
            activities.value = activities.value.filter(activity => activity.id !== id);
            filteredActivities.value = filteredActivities.value.filter(activity => activity.id !== id);
        })
        .catch(error => {
            console.error('Error al eliminar la actividad:', error);
        });
};


const handleSearch = (query) => {
    if (!query) {
        filteredActivities.value = activities.value;
        return;
    }
    
    query = query.toLowerCase();
    filteredActivities.value = activities.value.filter(activity => 
        activity.name.toLowerCase().includes(query) || 
        activity.description.toLowerCase().includes(query)
    );
};
</script>

<template>
    <AuthenticatedLayout>
    <div class="p-4 mt-6">
        <h2 class="text-xl mb-4 text-center">Lista de Actividades</h2>
        <div class="text-center mb-4">
            <Link :href="route('activities.create')" class="bg-blue-500 text-white p-2 rounded inline-block">
                Crear nueva actividad
            </Link>
        </div>
        <div class="max-w-xl mx-auto mb-4">
            <SearchBar @search="handleSearch" />
        </div>
        
        <div v-for="activity in filteredActivities" :key="activity.id" class="border p-3 mb-2 rounded text-center">
            <div v-if="user.id === activity.user_id">
                <Link :href="route('activities.edit', activity.id)" class="mr-5 bg-yellow-500 text-white p-2 rounded mb-2 inline-block">
                    Editar
                </Link>
                <button @click="deleteActivity(activity.id)" class="bg-red-500 text-white p-2 rounded mb-2 inline-block">
                    Eliminar
                </button>
            </div>
            <h3 class="font-bold">Nombre: {{ activity.name }}</h3>
            <p class="font-bold">Descripcion: {{ activity.description }}</p>
            <p class="font-bold">Creado por:  {{ activity.user.name }}</p>
        </div>
    </div>
    </AuthenticatedLayout>
</template>