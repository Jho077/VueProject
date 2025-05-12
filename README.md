sail artisan up -d
sail down
sail artisan migrate:fresh
sail artisan make:model Pop -mc
sail artisan storage:link
docker ps
mysql -u root -p
docker exec -it mysql -u root -p

sail artisan route:cache
sail artisan route:clear 

en editAdvertisment:
<div class="grid gap-2">
                                <Label for="title">Categorias</Label>
                                <select id="category_id" v-model="form.category_id" class="mt-1 block w-full border-1 shadow-md border-gray-800">
                                    <option v-for="category in category" :key="category.id">
                                    <option class="font-bold text-black"> {{ category.id }} </option>
                                    </option>
                                </select>
                            </div>
Arreglar errores de rounded border label, ids


las cookies:
<script setup>
import { ref } from 'vue';

const mostrarCookies = ref(true);

const aceptarCookies = () => {
    mostrarCookies.value = false;
};
</script>

<template>
    <div v-if="mostrarCookies" class="cookies-container">
        <p>Esta página utiliza cookies, aceptas?</p>
        <button @click="aceptarCookies" class="bg-red-500 rounded w-20">Aceptar</button>
    </div>
</template>

<style scoped>
</style>

validate:

<template>
  <form @submit.prevent="submit">
    <input
      v-model="password"
      type="password"
      required
      @input="checkSpaces"
    />
    <span v-if="error" style="color: red;">{{ error }}</span>
    <button type="submit">Enviar</button>
  </form>
</template>

<script setup>
import { ref } from 'vue'

const password = ref('')
const error = ref('')

const checkSpaces = () => {
  error.value = password.value.includes(' ')
    ? 'La contrasenya no pot contenir espais.'
    : ''
}

const submit = () => {
  checkSpaces()
  if (!error.value) {
    // Aquí va tu lógica para enviar con Inertia, por ejemplo:
    // router.post('/ruta', { password: password.value })
    alert('Formulario enviado ✅')
  }
}
</script>

const submit = () => {
  checkSpaces()
  if (!error.value) {
    // Aquí va la lógica para enviar el formulario, por ejemplo con Inertia:
    // router.post('/ruta', { password: password.value })
    alert('Formulario enviado ✅')
  }
}

siteimprove accesibility checker




