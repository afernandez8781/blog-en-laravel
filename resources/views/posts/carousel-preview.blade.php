<div class="gallery-photos masonry" >
    @foreach($post->photos->take(4) as $photo)
    <figure class="grid-item grid-item--height2">
        @if($loop->iteration === 4)
            <div class="overlay">{{ $post->photos->count() }} Fotos</div>
        @endif{{--{{ url($photo->url) }}--}}
        <img src="/storage/{{ $photo->url }}" class="img-responsive" alt="">
    </figure>
    @endforeach
</div>