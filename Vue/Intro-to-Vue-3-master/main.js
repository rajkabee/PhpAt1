    const app = Vue.createApp({
        data(){
            return {
                cart : [],
                premium : false,
            }
        },
        computed:{

        },
        methods:{
            updateCart(id){
                this.cart.push(id)
            }
        }
        
    })