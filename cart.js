const cartIcon = document.getElementById("cartIcon");
const cartSidebar = document.getElementById("cartSidebar");
const cartContent = document.getElementById("cartContent");

// Function to toggle the cart sidebar
function toggleCartSidebar() {
  cartSidebar.classList.toggle("show");
}

// Function to update the cart information in the sidebar
function updateCartInfo() {
  // Replace this with your logic to retrieve the cart information from cookies
  const cartItems = getCookies("cart");

  // Clear the existing content
  cartContent.innerHTML = "";

  // Loop through the cart items and create elements for each item
  for (let i = 0; i < cartItems.length; i++) {
    const cartItem = cartItems[i];

    // Create a div element for the cart item
    const cartItemElement = document.createElement("div");
    cartItemElement.textContent = `${cartItem.name} - $${cartItem.price}`;

    // Append the cart item element to the cart content
    cartContent.appendChild(cartItemElement);
  }
}

// Function to get the value of a cookie by name
function getCookie(cart) {
  const cookies = document.cookie.split("; ");
  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].split("=");
    if (cookie[0] === name) {
      return JSON.parse(cookie[1]);
    }
  }
  return [];
}

// Function to add an item to the cart
function addToCart(item) {
  // Retrieve existing cart items from cookies
  const cartItems = getCookie("cart");

  // Add the new item to the cart
  cartItems.push(item);

  // Update the cart information in cookies
  document.cookie = `cartItems=${JSON.stringify(cartItems)}; expires=Thu, 31 Dec 2023 23:59:59 UTC; path=/`;

  // Display a success message or perform any other necessary actions
}

// Add click event listener to the cart icon
cartIcon.addEventListener("click", function() {
  toggleCartSidebar();
  updateCartInfo();
});

// Example usage: Adding an item to the cart
const addItemToCart = (name, price) => {
  const item = { name, price };
  addToCart(item);
};

// Example usage: Calling addItemToCart function on icon click
const addItemIcon = document.getElementById("addItemIcon");
addItemIcon.addEventListener("click", function() {
  const itemName = "Product Name";
  const itemPrice = 10;
  addItemToCart(itemName, itemPrice);
});
