<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 text-gray-900 bg-white border-b  border-gray-200 md:flex justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{ route('vacantes.show', $vacante->id) }}"
                        class="text-xl font-bold">{{ $vacante->titulo }}</a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacante->empresa }}</p>
                    <p class="text-sm text-gray-500">Último día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                </div>
                <div class="flex flex-row items-stretch gap-3  mt-5 md:mt-0">
                    <a href="#"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Candidatos</a>
                    <a href="{{ route('vacantes.edit', $vacante->id) }}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Editar</a>
                    <button wire:click="$emit('mostrarAlerta', {{ $vacante->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Eliminar</button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">Aún no has agegado ninguna vacante.</p>
        @endforelse ($vacantes as $vacante)
    </div>

    @if ($vacantes)
        <div class="justify-center mt-10">
            {{ $vacantes->links() }}
        </div>
    @endif

</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @php
            if ($vacante) {
        @endphp
        document.addEventListener("DOMContentLoaded", function(event) {
            Livewire.on('mostrarAlerta', vacanteId => {
                Swal.fire({
                    title: 'Eliminar Vacante?',
                    text: "Una vacente eliminada no se puede recuperar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //Eliminar la Vacante
                        Livewire.emit('eliminarVacante', {{ $vacante->id }});
                        Swal.fire(
                            'Se ha elminado la vacante!',
                            'Eliminada Correctamente.',
                            'success'
                        )
                    }
                })
            });
        });
        @php
            }
        @endphp
    </script>
@endpush
