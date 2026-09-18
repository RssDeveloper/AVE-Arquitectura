@extends('errors.layout')

@section('title', '419 — Sesión Expirada | AVE Arquitectura')
@section('code', '419')
@section('badge', 'Error 419 • Sesión Caducada')

@section('icon')
<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
@endsection

@section('title_heading')
Sesión <em>Caducada</em>
@endsection

@section('message')
@php
    $defaultMessage = 'El tiempo de validación o token de seguridad del formulario ha caducado debido a inactividad. Por favor, refresca la página para reactivar tu sesión.';
    $msg = (isset($exception) && $exception->getMessage()) ? $exception->getMessage() : null;
    $isGeneric = !$msg || str_contains($msg, 'CSRF') || str_contains($msg, 'Page Expired');
@endphp
{{ $isGeneric ? $defaultMessage : $msg }}
@endsection

@section('actions')
<button type="button" onclick="window.location.reload();" class="btn-ave-primary">
    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
    </svg>
    Recargar Página
</button>
<a href="{{ url('/') }}" class="btn-ave-secondary">
    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
    </svg>
    Volver al Inicio
</a>
@endsection
