<section class="testimonials">
    <div class="container">
        <div class="owl-carousel">
            @foreach($testimonials as $testimonial)
            <div class="testimonial">
                <h4>{{ $testimonial->name }}</h4>
                <h6>
                    {{ $testimonial->position }}
                </h6>
                <p>
                    <b>{{ $testimonial->company }}</b>
                </p>
                <p>
                    {{ $testimonial->description }}
                </p>
                @if($testimonial->link)
                    <a href="{{ $testimonial->link }}" target="_blank">
                        {{ '@' . $testimonial->username }}
                    </a>
                @endif
            </div>
            @endforeach
        </div>

        <a href="#" class="customNextBtn">
            <i class="fas fa-chevron-right"></i>
        </a>

        <a href="#" class="customPrevBtn">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>
</section>