<!DOCTYPE html>
<hmtl lang="en">
<head>
  <meta charset="utf-8">
  <title>Chung King Palace Website</title>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>
div.div1{
    position:relative;
    top:100px;
}
</style>


@include ('layouts.header')
<div class="div1"> 
<div class="container">
    <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium"
        @click="addNewForm">
        New order
    </button>
    <div v-for="(order, index) in orders">
        <form action="{{ route('placeOrder')}}" method="post" id="placeOrder">Order @{{index}}
            @csrf
            <div class="form-group">
                <select class="form-control mt-5 mb-5" name="menu_item" v-model="order.menu_item">
                    @foreach($menu as $menu)
                    <option value="{{$menu->id}}">{{$menu->item_Name}} {{$menu->price}}</option>
                    @endforeach
                    @foreach($menu1 as $menu1)
                    <option value="{{$menu1->id_alt}}">{{$menu1->item_Name}} {{$menu1->price}}</option>
                    @endforeach
                    @foreach($menu2 as $menu2)
                    <option value="{{$menu2->id_alt}}">{{$menu2->item_Name}} {{$menu2->price}}</option>
                    @endforeach
                    @foreach($menu3 as $menu3)
                    <option value="{{$menu3->id_alt}}">{{$menu3->item_Name}} {{$menu3->price}}</option>
                    @endforeach
                    @foreach($menu4 as $menu4)
                    <option value="{{$menu4->id_alt}}">{{$menu4->item_Name}} {{$menu4->price}}</option>
                    @endforeach
                    @foreach($menu5 as $menu5)
                    <option value="{{$menu5->id_alt}}">{{$menu5->item_Name}} {{$menu5->price}}</option>
                    @endforeach
                    @foreach($menu6 as $menu6)
                    <option value="{{$menu6->id_alt}}">{{$menu6->item_Name}} {{$menu6->price}}</option>
                    @endforeach
                    <select name="quantity">
                        <input type="number" name="quantity" id="quantity" placeholder="How many do you want (Numeric Value)?" v-model="order.quantity"></input>
                    </select>

                </select>
                    <!-- <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" onclick="add()" name="count">Place Order</button> -->
                    <input type="hidden" name="count" id="count" value="0"></input>
        </form>
    </div>
</div>
<button class="bg-blue-500 text-white px-4 py-3 rounded font-medium" type="submit" form="placeOrder">Place Order</button>
</div>

<script>
    var app = new Vue({
        el:'.container',
        data:{
            orders:[
                {
                    menu_item:'',
                    quantity:''
                }
            ]
        },
        methods:{
            addNewForm(){
                this.orders.push({
                    menu_item:'',
                    quantity:''
                })
            },
            deleteForm(index){
                this.orders.splice(index,1)

            }
        }
    })
    document.getElementById('count').value = index;
</script>


@if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong></strong> {{ Session::get('message', '') }}
    </div>
@endif

</html>
