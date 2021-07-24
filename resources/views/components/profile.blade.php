<div class="card" style="width: 18rem;">
    <img src="{{ $url }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $fullname }}</h5>
        <p class="card-text">This is cat</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>

    <hr>
    <p class="card-text">{{ $getOwner('Tan') }}</p>
    <p class="card-text">Weight: {{ $getWeight }}</p>
</div>
