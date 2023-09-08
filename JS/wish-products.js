const wishArray = localStorage.getItem("wish-list") ? JSON.parse(localStorage.getItem("wish-list")) : [];

if(wishArray.length == 0) {
    newMesage("Your Wish list is empty!");
}

const activateWishListener = (products) => {
    let wishBtn = document.querySelectorAll(".wishBtn");
    wishBtn.forEach((wb, i) => {
        wb.addEventListener("click", () => { deleteFromWish(i, products); })
    })
}

const deleteFromWish = (i, products) => {
    wishArray.splice(i, 1);
    localStorage.setItem("wish-list", JSON.stringify(wishArray));
    location.reload();
}

productsHandler(wishArray, "wish-page");
