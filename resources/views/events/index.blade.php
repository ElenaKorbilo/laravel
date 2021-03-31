<h1>
    Events list
</h1>

 @foreach($events as $event)
    <a href="{{route('events.edit', ['event' => $event])}}">{{ $event->title}}</a> <br>
@endforeach

{{--@foreach($users as $user)
    {{$user->name}}<br>
     @foreach()
    {{ $events->name }} <br> 
@endforeach --}}
