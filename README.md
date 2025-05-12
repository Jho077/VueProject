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
