
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
        <div class="export__file">
            <a href="{{route('home')}}"><label for="export-file" class="export__file-btn" title="Export File"></label></a>

        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                    <th> nombre<span class="icon-arrow">&UpArrow;</span></th>
                    <th> apellido<span class="icon-arrow">&UpArrow;</span></th>
                    <th> tipo de documento<span class="icon-arrow">&UpArrow;</span></th>
                    <th> documento<span class="icon-arrow">&UpArrow;</span></th>
                    <th> telefono<span class="icon-arrow">&UpArrow;</span></th>
                    <th> rol<span class="icon-arrow">&UpArrow;</span></th>
                    <th> email<span class="icon-arrow">&UpArrow;</span></th>
                    <th> password<span class="icon-arrow">&UpArrow;</span></th>
                    <th> Acciones <span class="icon-arrow">&UpArrow;</span></th>

                </tr>
            </thead>
            @foreach ($user as $users)
            <tbody>
                <tr>
                    <td>{{$users->id}} </td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->lastName}}</td>
                    <td>{{$users->typeDocument}}</td>
                    <td>{{$users->document}}</td>
                    <td>{{$users->phone}}</td>
                    <td>{{$users->idRol}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->password}}</td>
                    
                     <a href="{{route('user.create')}}"><p class="status delivered">Agregar </p></a>
                    </td>


            </tbody>
            @endforeach</td>
        </table>
    </section>
</main>
</body>
