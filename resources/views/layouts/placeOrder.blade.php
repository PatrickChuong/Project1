<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>
</style>



@include ('layouts.header')
<div>
<table>
@foreach($select as $key => $data)
    <tr>    
      <th>{{$data->id}}</th>
      <th>{{$data->item_Name}}</th>
      <th>{{$data->Price}}</th>
      <form>

      </form>
    </tr>
@endforeach
</table>
</div>


</html>
