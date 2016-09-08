@extends('layouts.app')
@section('content')
	<form class="ui form" method="POST" action="{{route('post.store')}}">
	    {{ csrf_field()  }}
		<div class="field">
            <label>Título</label>
            <input type="text" name="title" placeholder="Título da Postagem">
        </div>
        <div class="field">
            <label>Chamada</label>
            <textarea rows="2" name="subtitle" placeholder="Subtítulo"></textarea>
        </div>
        <div class="field">
            <label>Postagem</label>
            <textarea name="content" class="editor" rows="18"></textarea>
        </div>
        <button class="ui button teal" type="submit">Salvar</button>
    </form>
@endsection
