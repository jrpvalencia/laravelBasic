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
        <a href="{{ route('user.create') }}"><p class="add-button">Agregar </p></a>
        <div class="export__file">
            <a href="{{ route('inicio') }}"><label for="export-file" class="export__file-btn" title="Export File"></label></a>
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th class="icon-arrow"> Id </th>
                    <th class="icon-arrow"> nombre</th>
                    <th class="icon-arrow"> apellido</th>
                    <th class="icon-arrow"> tipo de documento</th>
                    <th class="icon-arrow"> documento</th>
                    <th class="icon-arrow"> telefono</th>
                    <th class="icon-arrow"> rol</th>
                    <th class="icon-arrow"> email</th>
                    <th class="icon-arrow"> password</th>
                    <th class="icon-arrow"> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $users)
                <tr>
                    <td>{{ $users['id']}}</td>
                    <td>{{ $users['name'] }}</td>
                    <td>{{ $users['lastName'] }}</td>
                    <td>{{ $users['typeDocument'] }}</td>
                    <td>{{ $users['document'] }}</td>
                    <td>{{ $users['phone'] }}</td>
                    <td>
                        @foreach ($users['roles'] as $role)
                            {{ $role['name'] }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $users['email'] }}</td>
                    @if (array_key_exists('password', $users))
                        <td>{{ $users['password'] }}</td>
                    @else
                        <td>Password no disponible</td>
                    @endif
            
                    <td>
                        <div class="button-group">
                            <a class="delete-button" href="{{ route('user.destroy', $users['id']) }}">x </a>
                            <a href="{{ route('user.edit', $users['id']) }}" class="edit-button"><i class='bx bxs-edit-alt'></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </section>
</main>
</body>
