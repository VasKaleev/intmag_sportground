// --------------------------------------------------------//
function storePagePosition() {
  var page_y = window.pageYOffset;
  localStorage.setItem("page_y", page_y);
}
window.addEventListener("scroll", storePagePosition);
var currentPageY;
try {
  currentPageY = localStorage.getItem("page_y");

  if (currentPageY === undefined) {
    localStorage.setItem("page_y") = 0;
  }
  window.scrollTo(0, currentPageY);
} catch (e) {
  // no localStorage available
}
// --------------------------------------------------------//

let cart = document.querySelector(".cart").onclick = function () {
  return window.open('card.php', '_self');
};

function cartbtn_reload() {
  let goods = JSON.parse(localStorage.getItem('goods'))
  let cartbtn = document.querySelector('.cartbtn');
  if (localStorage.getItem('goods')) {
    cartbtn.innerHTML = `${goods.length}`;
  }
};
window.onload = function () {
  cartbtn_reload();
  let card2 = document.getElementsByClassName('card2');
  let btn1 = document.getElementsByClassName('btn1');
  let btn2 = document.getElementsByClassName('btn2');
  let img = document.getElementsByClassName('img');
  let img1 = document.getElementsByClassName('img1');
  let img2 = document.getElementsByClassName('img2');
  let img3 = document.getElementsByClassName('img3');
  let button_mini = document.getElementsByClassName('button_mini');
  let name = document.getElementsByClassName('title');
  let cena = document.getElementsByClassName('cena');
  let aler = document.getElementsByClassName('aler');
  let count = 1;
  let pricetov;

  for (let i = 0; i < btn1.length; i++) {
    btn1[i].onclick = function () {
      card2[i].style.zIndex = '2';
    }
    img[i].onclick = function () {
      card2[i].style.zIndex = '2';
    }
    btn2[i].onclick = function () {
      card2[i].style.zIndex = '1';
    }

    //Клик по img1 или img2
    img1[i].onclick = function () {
      img[i].src = img1[i].src;
    }
    img2[i].onclick = function () {
      img[i].src = img2[i].src;
    }
    img3[i].onclick = function () {
      img[i].src = img3[i].src;
    }

    //Клик по button_mini
    button_mini[i].onclick = function () {

      name = name[i].innerHTML;
      price = cena[i].innerHTML;
      kolvo = count;

      pricetov = parseInt(price) * parseInt(kolvo);

      if (name && price && count) {
        // Добавить счетчик числа товаров в локальное хранилище
        if (!localStorage.getItem('goods')) {
          localStorage.setItem('goods', JSON.stringify([]))
        }
        let goods = JSON.parse(localStorage.getItem('goods'))
        goods.push(['good_' + goods.length, name, price, kolvo, kolvo, 0, pricetov])
        localStorage.setItem('goods', JSON.stringify(goods))
        cartbtn_reload();
      }
      aler[i].innerHTML = "Товар добавлен в корзину.";
      aler[i].style.backgroundColor = '#dff0d8';
    }
    //Обновляем страницу
    button_mini[i].onmouseout = function () {
      location.reload();
    }
  }
};
//Кнопка вверх сайта pageup
let scrollMax = window.document.documentElement.scrollTopMax;
let butUp = document.querySelector('.pageup');
if (scrollMax > 50) {
  butUp.style.opacity = 0.9;
} else {
  butUp.style.opacity = 1;
};
butUp.onclick = () => {
  let sc = window.pageYOffset;
  window.scrollBy({
    top: -sc,
    behavior: 'smooth'
  });
}

// нажатие на кнопку мои заказы
var btnzak = document.getElementById("btn-zakaz");
btnzak.onclick = function () {
  window.location.href = "myzakaz.php";
}

// нажатие на кнопку мои заказы
var btnzak = document.getElementById("super-Btn");
btnzak.onclick = function () {
  window.location.href = "admin.php";
}