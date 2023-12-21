function showCart() {
    document.getElementById('cartOverlay').style.display = 'block';
    document.getElementById('cartContainer').style.display = 'block';
}

function hideCart() {
    document.getElementById('cartOverlay').style.display = 'none';
    document.getElementById('cartContainer').style.display = 'none';
}

function addToCart(id, name, price) {
    // Логика добавления товара в корзину
    var cartItems = document.getElementById('cartItems');
    var newItem = document.createElement('div');
    newItem.innerHTML = "<p>" + name + " - $" + price + "</p>";
    cartItems.appendChild(newItem);
}

function checkout() {
    // Логика оформления заказа (можно добавить обработчик на сервере)
    alert('Заказ оформлен! Спасибо за покупку!');
    hideCart();
}
