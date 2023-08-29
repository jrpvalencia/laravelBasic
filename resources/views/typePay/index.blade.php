
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
         <a href="{{ route('typePay.create') }}"><p class="status delivered">Agregar </p></a>
        <div class="export__file">
            <a href="{{ route('home') }}"><label for="export-file" class="export__file-btn" title="Export File"></label></a>
        </div>
    </section>
  
   
    
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th class="icon-arrow"> Id </th>
                    <th class="icon-arrow"> nombre</th>
                    <th class="icon-arrow"> Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($typePay as $typePays)
                <tr>
                    <td>{{ $typePays->id }}</td>
                    <td>{{ $typePays->name }}</td>
                    <td>
                        <form action="{{ route('typePay.destroy', $typePays->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="status delivered">Eliminar</button>
                        </form>

                    </td>
                    <td>
                    <a href="{{ route('typePay.edit',$typePays->id) }}"><p class="status delivered">Editar </p></a>
                </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </section>
</main>
</body>
