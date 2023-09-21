<link rel="stylesheet" href="CSS/style.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
<main class="table">
    <section class="table__header">
        <h1>Registros</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <i class='bx bx-search-alt'></i>
        </div>
        <a href="{{ route('shoppingCart.create') }}"><p class="add-button">Agregar </p></a>
        <div class="export__file">
            <a href="{{ route('inicio') }}"><label for="export-file" class="export__file-btn" title="Export File"></label></a>
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th class="icon-arrow"> Id </th>
                    <th class="icon-arrow"> CantidadProducto </th>
                    <th class="icon-arrow"> Persona </th>
                    <th class="icon-arrow"> Producto </th>
                    <th class="icon-arrow"> Acciones </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shoppingCart as $shoppingCarts)
                <tr>
                    <td>{{ $shoppingCarts->id }}</td>
                    <td>{{ $shoppingCarts->product_quantity }}</td>
                    <td>{{ $shoppingCarts->idUser }}</td>
                    <td>{{ $shoppingCarts->idProduct }}</td>
                    <td>
                        <div class="button-group">
                        <form action="{{ route('shoppingCart.destroy', $shoppingCarts->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="delete-button">X</button>
                        </form>
                    
                        <a href="{{ route('shoppingCart.edit',$shoppingCarts->id) }}"class="edit-button"><i
                            class='bx bxs-edit-alt'></i></a>
                    </div>
                    </td>

          
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
</body>
