// Tableau pour stocker les articles du panier
var cart = [];

// Fonction pour ajouter un article au panier
function addToCart(itemName) {
    var itemExists = cart.some(item => item.name === itemName);
    if (itemExists) {
        // L'article existe déjà, augmentez la quantité
        cart.forEach(item => {
            if (item.name === itemName) {
                item.quantity++;
            }
        });
    } else {
        // L'article n'existe pas encore, ajoutez-le
        cart.push({ name: itemName, quantity: 1 });
    }

    // Mettez à jour l'affichage du panier
    displayCart();
}

// Fonction pour supprimer un article du panier
function removeFromCart(itemName) {
    cart = cart.filter(item => item.name !== itemName);

    // Mettez à jour l'affichage du panier
    displayCart();
}

// Fonction pour afficher le panier
function displayCart() {
    var cartContainer = document.getElementById('cart-items-list');
    cartContainer.innerHTML = ''; // Effacez le contenu actuel du conteneur du panier

    // Parcourez le tableau du panier et créez des éléments pour chaque article
    cart.forEach(function(item) {
        var cartItem = document.createElement('li');
        cartItem.textContent = `${item.name} x ${item.quantity}`;

        var removeButton = document.createElement('button');
        removeButton.textContent = 'Supprimer';
        removeButton.addEventListener('click', function() {
            removeFromCart(item.name); // Appel de la fonction pour supprimer l'article du panier
        });

        cartItem.appendChild(removeButton); // Ajoutez le bouton de suppression à l'article du panier
        cartContainer.appendChild(cartItem); // Ajoutez l'article du panier au conteneur
    });
}