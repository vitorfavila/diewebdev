@extends('layouts.app')
@section('content')
    @if (!empty($post))
    <form class="ui form" method="POST" action="{{route('post.store', $post)}}">
    @else
	<form class="ui form" method="POST" action="{{route('post.store')}}">
    @endif
	    {{ csrf_field()  }}
		<div class="field">
            <label>Título</label>
            <input type="text" name="title" placeholder="Título da Postagem" value="@if (!empty($post)) {{ $post->title }} @else {{ old('title') }} @endif">
        </div>
        <div class="field">
            <label>Chamada</label>
            <textarea rows="2" name="subtitle" placeholder="Subtítulo">@if (!empty($post)){{ $post->subtitle }}@endif</textarea>
        </div>
        <div class="field">
            <label>Postagem</label>
            <textarea name="content" class="editor" rows="18">@if (!empty($post)){{ $post->content }}@endif</textarea>
        </div>
        <button class="ui button teal" type="submit">Salvar</button>
    </form>
@endsection
