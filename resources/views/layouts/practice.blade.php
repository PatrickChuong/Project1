<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">






<div class="container">
    <button class="btn btn-success mt-5 mb-5"
    @click="addNewForm">
    New order

    </button>

    <div class="card mb-3"
        v-for="(order, index) in orders">
        <div class="card-body">
            <span class="float-right"
                @click="deleteForm(index)">
                X
            </span>

            <h4 class="card-title">Add Order (index: ()</h4>

            <div class="order-form">
                <input type="text" class="form-control mb-2" placeholder="Menu Item"
                v-model="order.menu_item"></input>
                <input type="text" class="form-control mb-2" placeholder="Quantity"
                v-model="order.quantity"></input>
            </div>
        </div>
    </div>
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
</script>
