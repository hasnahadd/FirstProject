const addToCartBtn = document.querySelectorAll(".addToCartBtn");
const deleteFromCartBtn = document.querySelectorAll(".deleteFromCartBtn");
const cartIcon = document.querySelector(".cartIcon");
const cartIconM = document.querySelector("#cartIconM");

updateCartNum();
function addToCart(e) {
  let id = e.target.dataset.id;
  let cart = getCookie("cart");
  let qty = getQty(e.target);
  
  let item = {
    [id]: qty,
  };
  if (Object.keys(cart).length) {
    document.cookie = `cart=${JSON.stringify({ ...cart,...item })}`; //frgha
  } else {
    document.cookie = `cart=${JSON.stringify(item)}`;
  }
  updateCartNum();
}
function removeFromCart(e) {
  let confirmation = confirm("are you sure you want to delete this item ?");
  if (confirmation) {
    let cart = getCookie("cart");
    let id = e.target.dataset.id;
    delete cart[id];
    document.cookie = `cart=${JSON.stringify(cart)}`;
    location.reload();
  }
  updateCartNum();
}

function updateCartNum() {
  let cart = getCookie("cart");
  let number = Object.keys(cart).length;
  if (number) {
    cartIcon.style.display = "inline";
    cartIcon.textContent = number;

    cartIconM.style.display = "inline";
    cartIconM.textContent = number;
  } else {
    cartIcon.style.display = "none";
    cartIconM.style.display = "none";
  }
}

addToCartBtn.forEach((btn) => {
  btn.addEventListener("click", addToCart);
});
deleteFromCartBtn.forEach((btn) => {
  btn.addEventListener("click", removeFromCart);
});

function getCookie(cart) {
  const cookies = document.cookie.split("; ");
  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].split("=");
    if (cookie[0] === cart) {
      return JSON.parse(cookie[1]);
    }
  }
  return [];
}

function getQty(element) {
  if (element && element.parentElement) {
    let input = element.parentElement.querySelector("input.quantity-input");
    if (input && input.value) {
      return input.value;
    }
  }
  return 1;
}

// function setCookie(cname, cvalue, exdays) {
//   const d = new Date();
//   d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
//   let expires = "expires=" + d.toUTCString();
//   document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
// }
