<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    activity: Object,
});

const form = useForm({
    name: props.activity.name,
    description: props.activity.description,
});

const submit = () => {
    form.put(route('activities.update', props.activity.id), {
        onSuccess: () => {
        },
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-xl font-semibold mb-4 text-center">Editar actividad</h2>
                        
                        <form @submit.prevent="submit" class="mt-6 space-y-6 max-w-xl mx-auto">
                            <div>
                                <InputLabel for="name" value="Nombre" />
                                <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus />
                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>
                            
                            <div class="mt-4">
                                <InputLabel for="description" value="Descripción" />
                                <textarea id="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" v-model="form.description" rows="4" required></textarea>
                                <InputError class="mt-2" :message="form.errors.description" />
                            </div>
                            
                            <div class="flex items-center justify-center mt-4">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Actualizar actividad
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>