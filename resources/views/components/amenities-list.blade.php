@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

    @foreach($tags as $tag)
        <li>
            {{$tag}}
            {{--        todo: add route names--}}
        </li>
    @endforeach
