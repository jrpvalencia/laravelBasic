@extends('layouts.plantilla')

@section('content')
    
    
    <h1>Formulario Pqr</h1>

<form action="{{ route('pqr.update', $pqr) }}" method="POST">

    @csrf
    @method('put')
    
<label>
    Motivo:
    <br>
    <input type="text" name="reason" value="{{$pqr->reason}}">
</label>
<br><br>
<label>
    id persona
    <br>
    <select name="idUser" value="{{$pqr->idUser}}">
    @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} {{ $user->name }}</option>
            @endforeach
    </select>
   
</label>

<button type="submit">Enviar formulario</button>
</form>



</body>
</html>
@endsection





