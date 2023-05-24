<div>
    <div class="card">

        <div class="card-header row">
            <input wire:model="search" class="mr-2 form-control col" type="text" placeholder="Buscar candidato...">
            <a class="float-right ml-4 btn btn-primary" href="{{ route('candidatos.create') }}">
                <i class="fa-solid fa-user-plus"></i></a>
        </div>

        @if ($candidates->count())
            <div class="card-body">
                <table class="table table-striped table-hover table-responsive-lg">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del candidato</th>
                            <th>Foto del candidato</th>
                            <th>Nombre del partido</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>

                    {{-- Body --}}
                    <tbody>
                        @foreach ($candidates as $candidate)
                            <tr>
                                <td>{{ $candidate->id }}</td>
                                <td>{{ $candidate->nombre }}</td>
                                <td>
                                    @if ($candidate->image->url)
                                        <img width="100px" class="rounded"
                                            src="{{ Storage::url($candidate->image->url) }}"
                                            alt="{{ $candidate->nombre }}">
                                    @else
                                        <img src="https://wiki.ead.pucv.cl/images/e/e0/Sin-foto.png" alt="Sin imagen">
                                    @endif
                                </td>
                                <td>{{ $candidate->party->nombre_partido }}</td>

                                <td style="width: 10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('candidatos.edit', $candidate) }}"><i
                                            class="fa-solid fa-pencil"></i></a>
                                </td>

                                <td style="width: 10px">
                                    <a type="submit" class="btn btn-danger btn-sm"
                                        wire:click="$emit('deleteCandidate', {{ $candidate->id }})">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $candidates->links() }}
            </div>
        @else
            <strong class="text-center card-body text-danger">No hay candidatos registrados con ese nombre</strong>
        @endif


        @push('js')
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                $('.delete').submit(function(event) {
                    event.preventDefault();
                });

                Livewire.on('deleteCandidate', candidateId => {
                    Swal.fire({
                        title: '¿Desea eliminar el candidato?',
                        text: "Esta acción eliminara de forma permanente al candidato",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminar',
                        confirmButtonCancel: 'Cancelar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emit('delete', candidateId);
                            Swal.fire(
                                'Eliminado el candidato!',
                                'El candidato se elimino de forma permanente.',
                                'success'
                            )
                        }
                    })
                });
            </script>

            {{-- Toastr --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

            <script>
                @if (Session::has('info'))
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                    }
                    toastr.success("{{ session('info') }}");
                @endif
            </script>
        @endpush

    </div>
</div>
