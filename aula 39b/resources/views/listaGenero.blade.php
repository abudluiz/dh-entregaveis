
{{$genero->name}}
<br>
Raking: {{$genero->ranking}}
<br>
<br>
Ativo: {{$genero->getIsActive()}}
<br>
<br>

{!! $genero->filmes->implode('title', '<br>') !!}
