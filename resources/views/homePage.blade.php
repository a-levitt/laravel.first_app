<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello, this is a blade template.</h1>
    <a href="/about">Explore our company.</a>
    <h3>{{$name}}, {{$job}}</h3>
    <p>Current year: {{date('Y')}}</p>
    <ul>
        @foreach($workSkills as $skill)
        <li>{{$skill}}</li>
        @endforeach
    </ul>
</body>
</html>