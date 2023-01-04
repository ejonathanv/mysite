@if($project)
<section class="latest__project">
    <div class="container">
        <div class="latest__project__image">
            <div class="latest__project__image__container animate__animated animate__fadeInUp wow" 
                style="background-image: url({{ asset('uploads/' . $project->cover) }})"></div>
            <div class=" latest__project__image__container__2 animate__animated animate__fadeInUp wow"
                style="background-image: url({{ asset('uploads/' . $project->image_1) }})"></div>
        </div>
        <div class="latest__project__text">
            <h2>Proyecto más reciente</h2>

            <h4>
                {{ $project->title }}
            </h4>

            <p>
                {{ $project->description }}
            </p>

            <a href="#" class="btn__primary mt__2">
                Ver proyecto
            </a>

            <div>
                <a href="#" class="btn__link mt__2">
                    Ver todos los proyectos
                </a>
            </div>
        </div>
    </div>
</section>
@endif