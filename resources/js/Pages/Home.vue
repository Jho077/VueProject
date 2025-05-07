<script setup>
import { Link } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';

// Puedes incluir cualquier lógica que necesites aquí
</script>

<template>
    <Head title="Inicio" />
    
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
                <h1 class="text-4xl font-bold text-center mb-6">¡Bienvenido a la aplicación de actividades!</h1>
                
                <div class="text-center">
                    <p class="mb-6">Aquí puedes gestionar todas tus actividades de manera eficiente.</p>
                    
                    <div class="flex justify-center space-x-4">
                        <Link :href="route('login')" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Iniciar sesión
                        </Link>
                        
                        <Link :href="route('register')" class="px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600">
                            Registrarse
                        </Link>
                        
                        <Link :href="route('activities.index')" class="px-4 py-2 bg-purple-500 text-white rounded hover:bg-purple-600">
                            Ver actividades
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>