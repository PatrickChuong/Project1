<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->

<div class="container">
    <button class="btn btn-success mt-5 mb-5"
    onclick="function1()">
    Start Order
    </button>
    <div id="div1">
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

<script>
var x = document.getElementById("div1");
  x.style.display = "none";

function function1() {
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
