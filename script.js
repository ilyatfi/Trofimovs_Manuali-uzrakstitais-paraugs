fetch('products.json')
    .then(response => response.json())
    .then(obj => console.log(obj))
    .catch(function (error) {
        console.error('smth went wrong');
        console.error(error);
    });
