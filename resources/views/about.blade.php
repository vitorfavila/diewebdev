@extends('layouts.app')

@section('title', 'DieWebDev - About')

@section('content')
<h1 class="ui header">DieWebDev Code</h1>

<p class="justified">
    A ideia deste blog sempre foi repassar conhecimento de qualidade. As postagens refletem a opinião do autor e não devem ser consideradas regra ou única verdade, estamos aqui para provocar o pensamento e a imaginação. Feito com carinho e atenção por Vitor Ávila.
</p>

<div class="ui two column grid">
    <div class="column">
        <div class="ui fluid card">
            <div class="content">
                <div class="header">Equipe</div>
            </div>
            <div class="content">
                <h4 class="ui sub header">Membros</h4>
                <div class="ui small feed">
                    <div class="event">
                        <div class="content">
                            <div class="summary">
                                <a>Vitor Ávila</a> (Autor/Administrador) - <a href="https://github.com/vitorfavila">Github</a> | <a href="http://facebook.com/vitorfavila">Facebook</a> | <a href="http://twitter.com/vitorfavila">Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="extra content"> --}}
            {{-- <button class="ui button">Faça Parte</button> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection

@section('js-complement')
    @include('layouts.menu-update', ['menu' => 'about'])
@endsection
