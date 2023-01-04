<x-mail::message>
# Nuevo mensaje

Se ha recibido un nuevo mensaje desde el formulario de contacto.

    Nombre: {{ $name }}
    Email: {{ $email }}
    Resumen: {{ $summary }}
    Presupuesto: {{ $budget }}

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
