<h3 class="mb__4">
    A continuación se muestra el testimonio más reciente.
</h3>

<h4>Cliente</h4>

<p>
    {{ $testimonial->name }}
</p>

<p class="small">
    {{ $testimonial->position }} <br>
    {{ $testimonial->company }}
</p>

<h4>Descripción del testimonio</h4>

<p>
    {{ $testimonial->description }}
</p>

<a href="{{ route('testimonials.show', $testimonial) }}">
    Ver testimonio
</a>