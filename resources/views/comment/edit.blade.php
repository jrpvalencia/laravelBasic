@extends('layouts.plantilla')

@section('content')
    

    <h1>Editar</h1>

<form action="{{ route('comment.update', $comment) }}" method="POST">

    @csrf
    @method('put')
    
<label>
    <br>
    comment_id:
    <br>
    <input type="number" name="comment_id" value="{{$comment->comment_id}}">
</label>
<br>
<label>
    comment_type:
    <br>
    <input type="text" name="comment_type" value="{{$comment->comment_type}}">
</label>
<br>
<label>
    mensaje:
    <br>
    <input type="text" name="mensaje" value="{{$comment->mensaje}}">
</label>
<br><br>
<label>
    id persona
    <br>
    <select name="idUser" value="{{$comment->idUser}}">
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
