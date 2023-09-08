const fetchProducts = async (callback) => {
    const response = await fetch("databases/products.json");
    const products = await response.json();
    callback(products, "home-page");
}

const activateWishListener = (products) => {
    let wishBtn = document.querySelectorAll(".wishBtn");
    wishBtn.forEach((wb, i) => {
        wb.addEventListener("click", () => { addToWish(i, products); })
    })
}

const wishArray = localStorage.getItem("wish-list") ? JSON.parse(localStorage.getItem("wish-list")) : [];

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

fetchProducts(productsHandler);
