@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('events.update', $event)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" value="{{$event->title}}"/>
    <button type="submit">Сохранить</button>
</form>