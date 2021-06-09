<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
@include ('layouts.header')


<style>
    div{
        text-align:center;
    }
</style>

<body>

  <div>
  <form action="http://maps.google.com/maps" method="get" target="_blank">
     <label for="saddr">Enter your location</label>
     <input type="text" name="saddr" />
     <input type="hidden" name="daddr" value="110 East Market Street Louisville, KY 40202" />
     <input type="submit" value="Get directions" />
  </form>

  </div>
</body>

</html>
