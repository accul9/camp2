@foreach ($sets as $set)
    <p>{{ $set->set_name }}</p>
    <div><img src="{{ asset($set->set_image) }}" alt="Set Image"></div>
@endforeach
