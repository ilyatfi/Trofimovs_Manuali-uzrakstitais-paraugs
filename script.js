const fetchProducts = async (callback) => {
    const response = await fetch("products.json");
    const products = await response.json();
    console.log(products);
    callback(products)
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

        card.appendChild(name_span);
        card.appendChild(price_span);
        card.appendChild(quantity_span);
        card_wrapper.appendChild(card)
    }
}

fetchProducts(productsHandler);
