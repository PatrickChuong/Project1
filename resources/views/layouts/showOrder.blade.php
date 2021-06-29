<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>
div.div1{
    position:relative;
    top:50px;
}

th, td{
    padding:10px;
}
</style>



@include ('layouts.header')
<div class="div1">
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Item ID</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menu as $menu)
                <tr>
                    <td>{{$menu->order_id}}</td>
                    <td>{{$menu->item_id}}</td>
                    <td>{{$menu->quantity}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
       
</div>

</html>
