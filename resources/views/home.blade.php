@extends('template')
@section('content')

<div class="container mt-5">
    <div class="my-2">
        <h1>Event Management Course</h1>
        <h1>Find Your <span class="Typed"></span></h1>
        <p>GunturCodingID adalah sebuah platform dan informasi untuk kamu yang ingin belajar didunia teknologi.</p>
        <img src="{{ asset('assets/Artcode.jpg')}}" alt="hero" class="img-fluid" style="width: 100%; height: 20rem; object-fit:cover">
    </div>
    <div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="/add">Add Event</a>
        </div>
        <div class="row">
            @foreach ($events as $event)
            <div class="col-md-3 d-flex justify-content-center my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('uploads/'.$event->poster)}}" class="card-img-top" alt="..." style="width: 100%; height: 18rem; object-fit:cover">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title}}</h5>
                        <p class="card-text">{{ $event->description}}</p>
                        <a href="/detail/{{$event->id}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    const success = @json(session()->get('success'));

    if (success) {
        Toastify({
            text: success,
            duration: 3000,
            gravity: 'top',
            position: 'right',
            backgroundColor: 'green',
            stopOnFocus: true,
        }).showToast();
    }

    var typed = new Typed(".Typed", {
        strings: ["Passion.","Skills.","Love."],
        typeSpeed: 100,
        backSpeed: 80,
        loop: true
    })
</script>

@endsection