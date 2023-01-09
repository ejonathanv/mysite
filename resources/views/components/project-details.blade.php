<section class="project__details">
    <div class="container container-sm">
        <h1>
        {{ $project->title }}
        </h1>
        <h3>
            {{ $project->client }}
        </h3>
        <p>
            {{ $project->description }}
        </p>

        <!-- Si el proyecto tiene una imagen de portada, la mostramos -->
        @if($project->cover)
        <div class="project__details__image">
            <img src="{{ asset('uploads/' . $project->cover) }}" alt="{{ $project->title }}">
        </div>
        @endif

        <!-- Si el proyecto tiene una imagen 1, la mostramos -->
        @if($project->image_1)
        <div class="project__details__image">
            <img src="{{ asset('uploads/' . $project->image_1) }}" alt="{{ $project->title }}">
        </div>
        @endif

        <!-- Si el proyecto tiene una imagen 2, la mostramos -->
        @if($project->image_2)
        <div class="project__details__image">
            <img src="{{ asset('uploads/' . $project->image_2) }}" alt="{{ $project->title }}">
        </div>
        @endif

        <!-- Si el proyecto tiene una imagen 3, la mostramos -->
        @if($project->image_3)
        <div class="project__details__image">
            <img src="{{ asset('uploads/' . $project->image_3) }}" alt="{{ $project->title }}">
        </div>
        @endif
    </div>
</section>