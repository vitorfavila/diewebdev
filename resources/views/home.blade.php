@extends('layouts.app')

@section('title', 'DieWebDev - O blog do Desenvolvedor Web')

@section('content')
    @forelse($posts as $post)
        <div class="ui segment">
            <div class="ui clearing segment">
                <h3 class="ui right floated header">
                    @forelse($post->categories as $category)
                        <a href="{{route('posts.category', $category->name)}}" class="ui image label"><img src="/img/label_{{$category->img}}.png">{{$category->name}}</a>
                    @empty
                        Sem categoria
                    @endforelse
                </h3>
                <h2 class="ui left floated header">
                    <a href="{{ route('post.show', $post->slug) }}">{{$post->title}}</a>
                    <div class="sub header" style="margin-top: 12px">
                        Por {{$post->user->name}} | Em {{$post->created_at->format('d/m/Y')}} | Última atualização {{$post->updated_at->format('d/m/Y H:i')}}
                        @if (Auth::check())
                            | <a href="{{route('post.edit', $post->id)}}">Editar</a>
                            @if ($post->active == "S")
                                | <a href="{{route('post.disable', $post)}}">Desativar</a>
                            @endif
                        @endif
                    </div>
                </h2>
            </div>

            <p style="font-family: 'Space Mono', monospace; background-color: #393B3D; color: #C54D59; text-align: left;">
            <|dwd_begin<span style="background-color: #55D5CA">\></span>
            </p>

            {!! nl2br($post->content) !!}

            <p style="font-family: 'Space Mono', monospace; background-color: #393B3D; color: #C54D59; text-align: right;">
            <|dwd_end<span style="background-color: #55D5CA">|></span>
            </p>
        </div>
    @empty
        <div class="ui segment">
            <p>Sem posts para exibir!</p>
        </div>
    @endforelse
@endsection
