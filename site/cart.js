
let label = document.getElementById("label");
let cart = document.getElementById("shopping-cart")
let basket = JSON.parse(localStorage.getItem("data")) || []

let calculation = () => {
    let cart = document.getElementById("cartamount")
    cart.innerHTML = basket.map((x) => x.item).reduce((x, y) => x+y, 0)
}
calculation()

let generateCardItems = () => {
    if (basket.length !== 0) {
        return (cart.innerHTML = basket
            .map((x) => {
                let {id, item} = x;
                let search = shopitemsdata.find((y) => y.id === id) || []
            return `
             <div class="cart-item">
            <img width="100px"  src=${search.img} alt="">
            <div class="details">
                <div class="title-price-x">
                    <h4 class="title-price">
                        <p>${search.name}</p>
                         <p class="cart-item-price">$ ${search.price}</p>
                    </h4>
                    <i onclick="removeItem(${id})" class="bi bi-x-lg"> </i>
                 </div>

               <div class="buttons">

                        <i onclick="decrement(${id})" class="bi bi-dash-lg"></i>

                        <div id=${id} class="quantity">${item}</div>

                        <i onclick="increment(${id})"  class="bi bi-plus-lg"></i>

                    </div>

                <h3>$ ${item * search.price}</h3>
            </div>
            </div>`
        }).join(""))
    }
    else{
        console.log("no items in basket")
        cart.innerHTML = ``
        label.innerHTML = `
        <h2>cart is empty</h2>
        <a href="index.html"> 
        <button class="HomeBtn">Back to Home</button>
        </a>
    
        `;
    }
}
generateCardItems()

let increment = (id) => {
    let selectid = id
    let search = basket.find((x) => x.id === selectid.id)

    if (search === undefined) {
        basket.push({
            id:selectid.id, 
            item:1
        })
    }
    else{
        search.item += 1
    }


  
    // console.log(basket)
  
    update(selectid.id)
    localStorage.setItem("data", JSON.stringify(basket))
    generateCardItems()
}

let decrement = (id) => {
    let selectid = id
 
    let search = basket.find((x) => x.id === selectid.id)

    if(search === undefined) return;

    else if (search.item === 0) return;

    else{
        search.item -= 1
    }
    
    update(selectid.id)
    basket = basket.filter((x) => x.item !== 0)
    generateCardItems()
    localStorage.setItem("data", JSON.stringify(basket))
}

let update = (id) => {
   
    let search = basket.find((x) => x.id === id)
    // console.log(search.item)
    document.getElementById(id).innerHTML = search.item
    calculation()

 
}

let removeItem = (id) => {
    let selectedItem = id
    console.log(selectedItem.id)

    basket = basket.filter((x) => x.id !== selectedItem.id)
    generateCardItems()

    localStorage.setItem("data", JSON.stringify(basket))
   
}
