@if($recent)
    <section class="website__projects">
        @if($recent)
        <div class="container recent">
            <div class="recent__project" style="background-image: url({{ asset('uploads/' . $recent->cover) }})">
                <div class="recent__project__desc">
                    <h4>Proyecto más reciente</h4>
                    <h1>
                        {{ $recent->title }}
                    </h1>
                    <h4>
                        {{ $recent->client }}
                    </h4>
                    <p>
                        {{ $recent->description }}
                    </p>
                    <p class="small">
                        {{ $recent->created_at->format('d M, Y') }}
                    </p>
                </div>
            </div>
        </div>
        @endif
        @if($projects->count())
        <div class="container">
            <h2>Más proyectos</h2>

            <div class="projects__grid">
                @foreach($projects as $project)
                    <div class="project__card" style="background-image: url({{ asset('uploads/' . $project->cover) }})">
                        <div class="project__card__desc">
                            <h4>
                                {{ $project->title }}
                            </h4>
                            <h5>
                                {{ $project->client }}
                            </h5>
                            <p class="small">
                                {{ $project->description }}
                            </p>
                            <p class="small">
                                {{ $project->created_at->format('d M, Y') }}
                            </p>
                        </div>
                    </div>
                @endforeach
        </div>
        @endif
    </section>
@else
    <section>
        <div class="container">
            <h4>No hay proyectos</h4>
        </div>
    </section>
@endif 
