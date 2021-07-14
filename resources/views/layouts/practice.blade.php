<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">






<div class="container">
    <button class="btn btn-success mt-5 mb-5"
    @click="addNewForm">
    New order

    </button>

    <div class="card mb-3" v-for="(order, index) in orders">
        <div class="card-body">
            <span class="float-right"
                @click="deleteForm(index)">
                X
            </span>

            <h4 class="card-title">Add Order (index:{{index}})</h4>

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
            deleteForm(abc){
                this.orders.splice(index,1)

            }
        }
    })
</script>
