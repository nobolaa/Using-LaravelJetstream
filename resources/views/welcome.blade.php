@php
    $color = 'red';
    $alert = 'alert2';    
@endphp

<x-app-layout>
    <div class="container mx-auto">
        <x-alert color="red" class="mt-4 mb-4">
            <x-slot name="titulo">
                Error
            </x-slot>
            <x-slot name="descripcion">
                Usted no tiene permisos para acceder a esta página.
            </x-slot>
        </x-alert>
        
        <x-alert2 color="blue" class="mt-5">
            <x-slot name="titulo">
                Saludos
            </x-slot>
            <x-slot name="descripcion">
                Soy una alerta de un componente anonimo.
            </x-slot>
        </x-alert2>

        <x-dynamic-component :component="$alert" color="teal" class="mt-4">
            <x-slot name="titulo">
                Eyy
            </x-slot>
            <x-slot name="descripcion">
                Soy una alerta dinamica.
            </x-slot>
        </x-dynamic-component>

    </div>
</x-app-layout>