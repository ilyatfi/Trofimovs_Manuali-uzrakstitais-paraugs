const card_wrapper = document.querySelector("#catalog .card-wrapper");

function printProducts(products) {
    for (let i = 0; i < products.length; i++) {

        const card = document.createElement("div");
        card.classList.add("card");

        const name_par = document.createElement("p");
        name_par.classList.add("name");
        const name = document.createTextNode(products[i].name);
        name_par.appendChild(name);

        const price_par = document.createElement("p");
        price_par.classList.add("price");
        const price = document.createTextNode(products[i].price);
        price_par.appendChild(price);

        const quantity_par = document.createElement("p");
        quantity_par.classList.add("quantity");
        const quantity = document.createTextNode("Quantity: "+products[i].quantity);
        quantity_par.appendChild(quantity);

        card.appendChild(name_par);
        card.appendChild(price_par);
        card.appendChild(quantity_par);
        card_wrapper.appendChild(card);
    }
}

async function fetchProducts() {
    const response = await fetch("products.json");
    const products = await response.json();
    console.log(products);
    printProducts(products);
}

fetchProducts();