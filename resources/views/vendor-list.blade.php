<h1>{{ $title }}</h1>
<h2>{{ $vendors[0] }}</h2>

@if($name === 'Fardin')
    <p>Welcome back, {{ $name }}!</p>
@else 
    <p>User Not Found.</p>
@endif    

<!-- Display the list of vendors only if there is more than one vendor -->
@if(count($vendors) > 1)
    <ul>
        @foreach($vendors as $vendor)
            <li>{{ $vendor }}</li>
        @endforeach
    </ul>
@endif

<!-- For Loop to display vendors with their index -->
@for($i = 0; $i < count($vendors); $i++)
    <p>Vendor {{ $i + 1 }}: {{ $vendors[$i] }}</p>
@endfor