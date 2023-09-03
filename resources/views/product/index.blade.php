<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
<main class="table">
    <section class="table__header">
        <h1>Registros</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <i class='bx bx-search-alt'></i>
        </div>
        <a href="{{ route('product.create') }}"><p class="status delivered">Agregar </p></a>
        <div class="export__file">
            <a href="{{ route('home') }}"><label for="export-file" class="export__file-btn" title="Export File"></label></a>
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th class="icon-arrow"> Id </th>
                    <th class="icon-arrow"> Nombre</th>
                    <th class="icon-arrow"> Descripcion</th>
                    <th class="icon-arrow"> Imagen </th>
                    <th class="icon-arrow"> Precio</th>
                    <th class="icon-arrow"> Concentracion </th>
                    <th class="icon-arrow"> idTemporada</th>
                    <th class="icon-arrow"> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $products)
                    <tr>
                        <td>{{ $products->id }} </td>
                        <td>{{ $products->name }}</td>
                        <td>{{ $products->description }}</td>

                        <td>
                            @if ($products->image)

                            <img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->name }}" width="100">

                           @endif
                        </td>
                        
                    
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->concentration }}</td>
                        <td>{{ $products->idSeason }}</td>
                        <td>
                            <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="status delivered">Eliminar</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('product.edit', $products->id) }}"><p class="status delivered">Editar</p></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
</body>

{{-- http://localhost/laravelBasic/public/storage/product/producto1.jpg --}}
