const addToCartBtn = document.querySelectorAll('.addToCartBtn');
function addToCart() {

  let cart = getCookie('cart');
  let item = {
    '12': '1'
  };
  if (Object.keys(cart).length) {
    document.cookie =
      `cart=${JSON.stringify({ ...item, ...cart })}`;
  } else {
    document.cookie = `cart=${JSON.stringify(item)}`;
  }

}

addToCartBtn.forEach(btn => {
  btn.addEventListener('click', addToCart);
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

// function setCookie(cname, cvalue, exdays) {
//   const d = new Date();
//   d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
//   let expires = "expires=" + d.toUTCString();
//   document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
// }