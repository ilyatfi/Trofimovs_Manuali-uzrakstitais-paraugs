const subForm = document.querySelector("#notif-subscribe");
subForm.onsubmit = (event) => {

    const input = document.querySelector('#notif-subscribe [name="email"]');
    const message = document.querySelector('#subscribed');
    if(input.value == "")
        return;
    message.innerHTML = "Successfully subscribed!";
}

const newMesage = (message) => {
    const messageBox = document.querySelector("#message");
    messageBox.innerHTML = message;
}

const productsHandler = (products, checkPage) => {

    const card_wrapper = document.querySelector("#catalog .card-wrapper");

    for (let i = 0; i < products.length; i++) {

        const card = document.createElement("div");
        card.classList.add("card");

        const image = document.createElement("img");
        image.src = products[i].image;

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
        if(checkPage == "home-page")
            wish_btn.innerHTML = "Add to Wish list";
        else
            wish_btn.innerHTML = "Remove from Wish list";

        card.appendChild(image);
        card.appendChild(name_span);
        card.appendChild(price_span);
        card.appendChild(quantity_span);
        card.appendChild(wish_btn);
        card_wrapper.appendChild(card);
    }

    activateWishListener(products);
}
