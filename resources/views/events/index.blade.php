<h1>
    Events list
</h1>

@foreach($events as $event)
    {{ $event->title}} {{ $event->user->name }}<br>
@endforeach

@foreach($users as $user)
    {{$user->name}}<br>
    @foreach
    {{ $events->name }} <br>
@endforeach
