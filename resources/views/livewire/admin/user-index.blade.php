<div>
    <div class="card">

        <div class="card-header row">
            <input wire:model="search" class="mr-2 form-control col" type="text" placeholder="Buscar usuario...">
            <a class="float-right ml-4 btn btn-primary" href="#">
                <i class="fa-solid fa-user-plus"></i></a>
        </div>

        @if ($users->count())
            <div class="card-body">
                @if (session('info'))
                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-thumbs-up"></i> {{ session('info') }}
                    </div>
                @endif
                <table class="table table-striped table-hover table-responsive-lg">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo Eléctronico</th>
                            <th>Número de teléfono</th>
                            <th>Rol</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>

                    {{-- Body --}}
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>rol del usuario</td>
                                <td style="width: 10px">
                                    <a class="btn btn-primary btn-sm" href="#"><i
                                            class="fa-solid fa-pencil"></i></a>
                                </td>

                                <td style="width: 10px">
                                    <a type="submit" class="btn btn-danger btn-sm"
                                        wire:click="$emit('deleteUser', {{ $user->id }})">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <strong class="text-center card-body text-danger">No hay usuarios registrados con ese nombre</strong>
        @endif


        @push('js')
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                $('.delete').submit(function(event) {
                    event.preventDefault();
                });

                Livewire.on('deleteUser', userId => {
                    Swal.fire({
                        title: '¿Desea eliminar el usuario?',
                        text: "Esta acción eliminara de forma permanente el usuario",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminar',
                        confirmButtonCancel: 'Cancelar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emit('delete', userId);
                            Swal.fire(
                                'Eliminado el usuario!',
                                'El usuario se elimino de forma permanente.',
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
