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
    <form action"{{ route('deleteOrder')}}" method="post">
        @csrf
        <select name="delete">
            <input type="number" name="delete" id="delete" placeholder="Which order ID do you want to delete?"</input>
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Delete Order</button>
    </form>
</div>

@if(Session::has('success'))
<div class="div1">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong></strong> {{ Session::get('message', '') }}
    </div>
    </div>
@endif

</html>
