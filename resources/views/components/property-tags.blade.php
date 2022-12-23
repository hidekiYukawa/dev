

@props(['tagsCsv'])

@php
    $tags = explode(', ', $tagsCsv);
@endphp
<ul class="flex">
    @foreach($tags as $tag)
        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
            <a href="/properties?tag={{$tag}}">{{$tag}}</a>
            {{--        todo: add route names--}}
        </li>
    @endforeach
</ul>
