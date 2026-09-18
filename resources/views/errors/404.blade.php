@extends('errors.layout')

@section('title', '404 — Plano no encontrado | AVE Arquitectura')
@section('code', '404')
@section('badge', 'Error 404 • Plano No Encontrado')

@section('icon')
<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
</svg>
@endsection

@section('title_heading')
Espacio <em>Fuera de Plano</em>
@endsection

@section('message')
@php
    $defaultMessage = 'La coordenada o página que buscas no existe en nuestra plataforma, ha sido trasladada o aún se encuentra en etapa de diseño conceptual.';
    $msg = (isset($exception) && $exception->getMessage()) ? $exception->getMessage() : null;
    $isGeneric = !$msg || str_starts_with($msg, 'The route') || str_contains($msg, 'not be found');
@endphp
{{ $isGeneric ? $defaultMessage : $msg }}
@endsection

@section('actions')
<a href="{{ url('/') }}" class="btn-ave-primary">
    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
    </svg>
    Volver al Inicio
</a>
<a href="{{ url('/#fh5co-proyectos') }}" class="btn-ave-secondary">
    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
    </svg>
    Explorar Proyectos
</a>
@endsection
