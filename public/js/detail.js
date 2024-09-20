// Ambil ID dari URL
const urlParams = new URLSearchParams(window.location.search);
const productId = urlParams.get('id');

// Fetch detail produk berdasarkan ID
fetch(`https://dummyjson.com/products/${productId}`)
    .then(response => response.json())
    .then(product => {
        const container = document.getElementById('product-detail-container');
        container.innerHTML = `
            <img src="${product.thumbnail}" alt="${product.title}">
            <h2>${product.title}</h2>
            <p>${product.description}</p>
            <h2>Price: $${product.price}</h3>
            <a href="../product.html" class="btn btn-sm btn-outline-secondary">< Back</a>
        `;
    })
    .catch(error => console.error('Error fetching product details:', error));