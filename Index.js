document.addEventListener("DOMContentLoaded", function () {
    console.log("Halaman sudah di load");
    getProduct();
});

function getProduct() {
    fetch('https://dummyjson.com/products')
        .then(response => response.json())
        .then(data => {
            var container = document.getElementById('product_container');
            data.products.forEach(product => {  // Mengakses array products
                product.description = shortText(product.description, 70);
                product.title = shortText(product.title, 20);
                container.insertAdjacentHTML('beforeend',
                    `<div class="card" style="width: 18rem;">
                        <img src="${product.thumbnail}" class="card-img-top" alt="Image Product">
                        <div class="card-body">
                            <h5 class="card-title">${product.title}</h5>
                            <p class="card-text">${product.description}</p>
                            <a href="details/detail.html?id=${product.id}" class="btn btn-primary">Details</a>
                        </div>
                    </div>`
                );
            });
        })
        .catch(error => console.error('Error fetching products:', error));
}

function shortText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + ' ...';
    } else {
        return text;
    }
}
