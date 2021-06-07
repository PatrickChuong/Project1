<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>


<body class="bg-gray-200">
<nav class ="p-6 bg-white flex justify-between mb-6">
<ul class ="flex item-center">
<li>
<a href="" class="p-3">Home</a>
</li>
<li>
<a href=""  class="p-3">Menu</a>
</li>
</ul>

</nav>
@yield('content')
</body>


</html>
