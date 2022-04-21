@props(['color' => 'red', 'titulo', 'descripcion'])

<div role="alert" class="{{$attributes['class']}}">
    <div class="bg-{{$color}}-500 text-white font-bold rounded-t px-4 py-2">
      {{$titulo}}
    </div>
    <div class="border border-t-0 border-{{$color}}-400 rounded-b bg-{{$color}}-100 px-4 py-3 text-{{$color}}-700">
      <p>{{$descripcion}}</p>
    </div>
</div>