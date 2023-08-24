const wishArray = localStorage.getItem("wish-list") ? JSON.parse(localStorage.getItem("wish-list")) : [];

const fetchProducts = async (callback) => {
    const response = await fetch("products.json");
    const products = await response.json();
    callback(products);
}

const productsHandler = (products) => {

    const card_wrapper = document.querySelector("#catalog .card-wrapper");

    for (let i = 0; i < products.length; i++) {

        const card = document.createElement("div");
        card.classList.add("card");

        const name_span = document.createElement("span");
        name_span.classList.add("name");
        const name = document.createTextNode(products[i].name);
        name_span.appendChild(name);

        const price_span = document.createElement("span");
        price_span.classList.add("price");
        const price = document.createTextNode(products[i].price);
        price_span.appendChild(price);

        const quantity_span = document.createElement("span");
        quantity_span.classList.add("quantity");
        const quantity = document.createTextNode("Quantity: "+products[i].quantity);
        quantity_span.appendChild(quantity);

        const wish_btn = document.createElement("button");
        wish_btn.classList.add("wishBtn");
        wish_btn.innerHTML = "Add to Wish list";

        card.appendChild(name_span);
        card.appendChild(price_span);
        card.appendChild(quantity_span);
        card.appendChild(wish_btn);
        card_wrapper.appendChild(card);
    }

    activateWishListener(products);
}

const activateWishListener = (products) => {
    let wishBtn = document.querySelectorAll(".wishBtn");
    wishBtn.forEach((wb, i) => {
        wb.addEventListener("click", () => { addToWish(i, products); })
    })
}

const addToWish = (i, products) => {

    if (wishArray.length == 0) {

        wishArray.push(products[i]);
        localStorage.setItem("wish-list", JSON.stringify(wishArray));
        newMesage("Product " + products[i].name + " has been added to the Wish list!");
    }
    else {

        let alreadyIs = false;
        for (let j = 0; j < wishArray.length; j++) {
            if (products[i].id == wishArray[j].id) {
                alreadyIs = true;
            }
        }
        if (alreadyIs) {
            newMesage("You have already added that product to the Wish list!");
        }
        else {
            wishArray.push(products[i]);
            localStorage.setItem("wish-list", JSON.stringify(wishArray));
            newMesage("Product " + products[i].name + " has been added to the Wish list!");    
        }
    }
}

const newMesage = (message) => {
    const messageBox = document.querySelector("#message");
    messageBox.innerHTML = message;
}

fetchProducts(productsHandler);
