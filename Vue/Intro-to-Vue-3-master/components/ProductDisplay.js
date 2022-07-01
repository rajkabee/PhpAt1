app.component('product-display',{
    props:{
        premium: {
            type : Boolean,
            required : true
        }
    },
    template:
    /*html*/
    `<div class="product-display">
    <div class="product-container">
      <div class="product-image">
        <!--<img -bindv:src="image" alt="green_)socks">-->
        <img :src="image" alt="green_)socks">
      </div>
      <div class="product-info">
        <h1>{{product}}</h1>
        <h3 v-show="onSale">{{saleLabel}}</h3>
        <!-- <p v-show="inStock">In Stock</p> -->
        <p v-if="inStock>10">In Stock</p>
        <p v-else-if="inStock<=10 && inventory>0">Almost Sold Out</p>
        <p v-else>Out Of Stock</p>
        <p>Shipping : {{ shipping }}</p>
        <p v-show="onSale">On Sale</p>
        <ul>
          <li v-for="detail in details">{{ detail }}</li>
        </ul>
        <div v-for="(variant, index) in variants" :key="variant.id" @mouseover="updateVariant(index)" class="color-circle" :style="{backgroundColor : variant.color}"></div>
        <div v-for="size in sizes">{{ size }}</div>
        <button class="button" :class="{disabledButton : !inStock}" @click="addToCart" :disabled="!inStock">Add To Cart</button>
      </div>
    </div>
    <review-list v-if="reviews.length" :reviews="reviews"></review-list>
    <review-form @review-submitted='addReview'></review-form>
   
  </div> `,
  data(){
    return {
        brand : 'Vue Mastery', 
        product : 'socks',
        selectedVariant : 0, 
        inventory : 4 , 
        onSale : true ,
        details : ['50% Cotton', '30% Wool', '20% Polyester'],
        variants: [
            {id: 1234, color: 'Green', image : './assets/images/socks_green.jpg', quantity: 50},
            {id: 5678, color: 'Blue', image : './assets/images/socks_blue.jpg', quantity: 0}
        ],
        sizes : ['sm', 'm', 'l', 'xl'],
        reviews: [


        ],

    }
},
computed:{
    image(){
        return this.variants[this.selectedVariant].image
    },
    inStock(){
        return this.variants[this.selectedVariant].quantity
    },
    saleLabel(){
        return this.brand+" "+this.product+" is on sale";
    }, 
    shipping(){
        if(this.premium){
            return "FREE"
        }else{
            return 2.99
        }
    }

},
methods:{
    addToCart(){
        this.$emit('add-to-cart', this.variants[this.selectedVariant].id)
    },
    updateVariant(index){
        this.selectedVariant = index
        //console.log(index) 
    },
    addReview(review){
        this.reviews.push(review)
    }
    
}
})