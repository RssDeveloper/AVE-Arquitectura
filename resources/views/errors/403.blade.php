@extends('errors.layout')

@section('title', '403 — Acceso Prohibido | AVE Arquitectura')
@section('code', '403')
@section('badge', 'Error 403 • Zona Restringida')

@section('icon')
<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
</svg>
@endsection

@section('title_heading')
Acceso <em>Restringido</em>
@endsection

@section('message')
@php
    $defaultMessage = 'No cuentas con las credenciales o permisos requeridos para ingresar a esta sección. Si consideras que se trata de un error, ponte en contacto con nuestro equipo.';
    $msg = (isset($exception) && $exception->getMessage()) ? $exception->getMessage() : null;
    $isGeneric = !$msg || str_contains($msg, 'unauthorized') || str_contains($msg, 'Forbidden');
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
<a href="https://wa.me/525583531829" target="_blank" class="btn-ave-secondary">
    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
    </svg>
    Contactar Soporte
</a>
@endsection
