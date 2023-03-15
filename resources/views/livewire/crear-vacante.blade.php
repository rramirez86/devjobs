<form class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required
            autofocus autocomplete="titulo" placeholder="Titulo Vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select id="salario" name="salario"
            class="'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="">-- Seleccione un Salario--</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="salario" :value="__('Categoría')" />
        <select id="categoria" name="categoria"
            class="'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
        </select>
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" required
            autofocus autocomplete="empresa" placeholder="Nombre de la Empresa" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"
            required autofocus autocomplete="ultimo_dia" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del puesto')" />
        <textarea name="descripcion" placeholder="Descripcion del puesto"
            class="'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"></textarea>
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" required autofocus />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>
</form>
