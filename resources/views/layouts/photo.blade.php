<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
@include ('layouts.header')


<img src={{ asset('storage/app/public/EggRoll.jpg') }}/>
<img src="{{ URL::to('/Restaurant/EggRoll.jpg') }}">




</html>

