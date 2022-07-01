const app = Vue.createApp({
        data(){
            return{
                cart: 0,
                product: "Socks",
                description: "A warm hugs to your toes",
                selectedVariant: 0,
                url: 'http://www.dursikshya.com',
                selectedVariant: 0,
                variations: [
                    {id: 1234, color: 'green', image:'./assets/images/socks_green.jpg', inventory:21},
                    {id: 5678, color: 'blue', image:'./assets/images/socks_blue.jpg', inventory:0} 
                ],
                inventory: 0,
                details: ['50% cotton', '30% wool', '20% polyester'],
                sizes: ['S', 'M', 'L', 'XL'],
                onSale: true,
            }
        },
        computed:{
            inStock(){
                return this.variations[this.selectedVariant].inventory;
            },
            image(){
                return this.variations[this.selectedVariant].image;
            }
        }

        ,
        methods:{
            //update image
            updateImage(variantImage){
                this.image = variantImage;
            },
            addToCart(){
                this.cart++;
            },
            removeFromCart(){
                if(this.cart!=0){
                    this.cart--;
                }
            },
            updateProduct(index){
                // this.variations.forEach((variant)=>{
                //     if(variant.id===variantId){
                //         this.updateImage(variant.image);
                //         this.inventory = variant.inventory;
                //     }
                // });
                this.selectedVariant = index;


            }
        }
    
});