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

    p{
        text-align:center;
        position:relative;
        top:50px;
    }
</style>

<body>
<p><span style=font-size:40px>Chung King Palace</span><br>Address: 110 East Market St, Louisville KY 40202<br>Tele: (502)584-8880
  </p>
  <div style="position:relative; padding:300px">Want to get directions?
  <div style="postion:relative; padding:100px">
  <form action="http://maps.google.com/maps" method="get" target="_blank">
     <label for="saddr">Enter your location</label>
     <input type="text" name="saddr" />
     <input type="hidden" name="daddr" value="110 East Market Street Louisville, KY 40202" />
     <input type="submit" value="Get directions" />
  </form>

  </div>
  </div>
</body>

</html>
