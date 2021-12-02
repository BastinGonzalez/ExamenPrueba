<div wire:init="cargando">

    <div class="row mb-3">
        <div class="col-3">
            <div class="input-group">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-labaria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-9 ">
            <a href="{{ route('createLibros') }}" class="btn btn-success float-right">Nuevo <i
                    class="fas fa-plus-square"></i></a>
        </div>
    </div>
    @if (count($libros) > 0)

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)


                    <tr>
                        <th scope="row">{{ $libro->id }}</th>
                        <td><img style="width: 50px; height:70px"
                                src="{{ Storage::disk('public')->url($libro->foto != null ? $libro->foto : 'images/libros/default.png') }}"
                                alt=""></td>
                        <td>{{ $libro->nombrel }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->año }}</td>
                        <td>{{ $libro->precio }}€</td>
                        <td>
                            <a title="Ver Libro" style="font-size: 1.3rem" class="text-info mr-1"
                                href="{{ route('showLibros', $libro) }}"><i class="fas fa-eye"></i></a>
                            <a title="Editar Libro" style="font-size: 1.3rem" class="text-warning mr-1"
                                href="{{ route('editLibros', $libro) }}"><i class="fas fa-pen"></i></a>
                            <a wire:click="delete title=" Eliminar Libro" style="font-size: 1.3rem"
                                class="text-danger mr-1" href="{{ route('deleteLibros', $libro) }}"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <img class="d-block mx-auto" src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">

        <h2 class="text-center">Cargando...</h2>
    @endif
</div>
