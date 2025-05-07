<script setup>
import { ref } from 'vue';

const emit = defineEmits(['search']);
const searchQuery = ref('');

const handleInput = (event) => {
    emit('search', event.target.value);
};
</script>

<template>
    <div class="search-container mb-4">
        <input
            v-model="searchQuery"
            @input="handleInput"
            placeholder="Buscar..."
            class="w-full px-4 py-2 border rounded-md"
            type="text"
        />
    </div>
</template>