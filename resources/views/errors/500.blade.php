@extends('errors.layout')

@section('title', '500 — Error del Servidor | AVE Arquitectura')
@section('code', '500')
@section('badge', 'Error 500 • Falla Estructural')

@section('icon')
<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
</svg>
@endsection

@section('title_heading')
Falla <em>Estructural Temporal</em>
@endsection

@section('message')
@php
    $defaultMessage = 'Hemos detectado una incidencia imprevista en el servidor. Nuestro equipo técnico ya se encuentra trabajando para restaurar la estabilidad del sistema.';
    $msg = (isset($exception) && $exception->getMessage()) ? $exception->getMessage() : null;
    $isGeneric = !$msg || str_contains($msg, 'Server Error') || str_contains($msg, 'Internal Server');
@endphp
{{ $isGeneric ? $defaultMessage : $msg }}
@endsection

@section('actions')
<button type="button" onclick="window.location.reload();" class="btn-ave-primary">
    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
    </svg>
    Reintentar Carga
</button>
<a href="{{ url('/') }}" class="btn-ave-secondary">
    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
    </svg>
    Volver al Inicio
</a>
@endsection
