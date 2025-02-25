let shop = document.getElementById("shop");

// let shopitemsdata = [{id:"img", name: "geko", price: 45, desc: "nice one with plenty of color", img: "MainBefore.jpg"},
//     {id:"img2", name: "johan", price: 15, desc: "nice one with plenuiovusiity of color", img: "MainBefore.jpg"},
//     {id:"img3", name: "nope", price: 20, desc: "nice one got color asdasdadasdasd", img: "MainBefore.jpg"},
//     {id:"img4", name: "geko2", price: 25, desc: "nice one with pleksfdjnty of color", img: "MainBefore.jpg"}
// ];

let basket = JSON.parse(localStorage.getItem("data")) || []

let generate = () => {
    return (shop.innerHTML= shopitemsdata
        .map((x) => {
            let {id, name, price, desc, img} = x;
            let search = basket.find((x)=> x.id == id) || [];
        return `  
    <div id=product-id-${id} class="item">
            <img width="220" src="${img}" alt="geko">
            <div class="details">
                <h3>${name}</h3>
                <p>${desc}.</p>
                <div class="price-quantity">
                    <h2>$${price}</h2>
                    <div class="buttons">

                        <i onclick="decrement(${id})"  class="bi bi-dash-lg"></i>

                        <div id=${id} class="quantity">
                        ${search.item == undefined? 0: search.item}</div>

                        <i onclick="increment(${id})"  class="bi bi-plus-lg"></i>

                    </div>
                </div>
            </div>
        </div>
    `
    }).join(""));
};

generate();

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
}

let decrement = (id) => {
    let selectid = id
 
    let search = basket.find((x) => x.id === selectid.id)

    if(search === undefined) return;

    else if (search.item === 0) return;

    else{
        search.item -= 1
    }
    // console.log(basket)
    update(selectid.id)
    basket = basket.filter((x) => x.item !== 0)
    

    localStorage.setItem("data", JSON.stringify(basket))
}

let update = (id) => {
   
    let search = basket.find((x) => x.id === id)
    // console.log(search.item)
    document.getElementById(id).innerHTML = search.item
    calculation()

 
}

let calculation = () => {

    let cart = document.getElementById("cartamount")
    cart.innerHTML = basket.map((x) => x.item).reduce((x, y) => x+y, 0)

}
calculation()