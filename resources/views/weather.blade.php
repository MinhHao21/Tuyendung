<!DOCTYPE html>
<html>
<head>
    <title>Weather</title>
</head>
<body>
    <h1>Weather Information</h1>

    @if(isset($data))
        <h2>City: {{ $data['name'] }}</h2>
        <h3>Temperature: {{ $data['main']['temp'] }}°C</h3>
        <h3>Weather: {{ $data['weather'][0]['description'] }}</h3>
    @endif
</body>
</html>
