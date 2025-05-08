<script setup>
const currentYear = new Date().getFullYear();
</script>

<template>
    <footer class="bg-gray-100 py-4 border-t mt-auto">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">© {{ currentYear }} - Aplicación de Actividades</p>
            <p class="text-gray-500 text-sm mt-1">Todos los derechos reservados</p>
        </div>
    </footer>
</template>