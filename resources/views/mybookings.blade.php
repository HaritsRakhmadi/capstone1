<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@isset($events)
    
    @if(count($events) > 0)
    
        <ul>
            @foreach($events as $event)
                <li><strong>Event Type:</strong>{{$event['event_type'] ?? 'N/A'}}</li>
                <li><strong>Event Type:</strong>{{$event['start_time'] ?? 'N/A'}}</li>
                <li><strong>Event Type:</strong>{{$event['end_time'] ?? 'N/A'}}</li>
                <li><strong>Event Type:</strong>{{$event['status'] ?? 'N/A'}}</li>
            @endforeach

        </ul> 
    @else
        <p>No events found</p>       
    @endif
@endisset
</body>
</html>