const template = document.querySelector('.cards-wrapperg');
const cardg = document.querySelector('.cardg');

getDatag().forEach(art => {
  const artElem = document.importNode(cardg, true);
  for (const key in art) {
    if (key === 'img') {
      artElem.querySelector('.img').src = art.img;
    }
    if (key === 'img1') {
      artElem.querySelector('.img1').src = art.img1;
    }
    if (key === 'img2') {
      artElem.querySelector('.img2').src = art.img2;
    }
    if (key === 'img3') {
      artElem.querySelector('.img3').src = art.img3;
    }
    if ((key != 'img') || (key != 'img1') || (key != 'img2') || (key != 'img3')) {  
      artElem.querySelector('.' + key).textContent = art[key];
    }
  }
  template.appendChild(artElem)
});


function getDatag() {
  return [
    {
      "img": "./assets/imggo/ksubi1.png",
      "img1": "./assets/imggo/ksubi1.png",
      "img2": "./assets/imggo/ksubi2.png",
      "img3": "./assets/imggo/ksubi3.png",
      "title": " Майка Ksubi",
      "razm": "Размер: S",
      "cenaold": "73 руб.",
      "cena": "70 руб.",
      "catalog-item__list": " Размер на модели: S INT. Параметры модели: рост 174 см см, грудь 81 см, талия 59 см, бедра 86 см."
    },
    {
      "img": "./assets/imggo/adibr.jpg",
      "img1": "./assets/imggo/adibr1.jpg",
      "img2": "./assets/imggo/adibr.jpg",
      "img3": "./assets/imggo/adibr1.jpg",
      "title": "ADIDAS ADIBREAK PANT",
      "razm": "Размер: S,M",
      "cenaold": "120 руб.",
      "cena": "110 руб.",
      "catalog-item__list": " Модель прямого кроя;Детали: эластичный пояс, внутренняя кулиска, по бокам застежка на кнопки;adidas уже на протяжении многих лет разрабатывает лучшие спортивные изделия с уникальными характеристиками;Состав: Полиэстер - 100%. "
    },
    {
      "img": "./assets/imggo/basict1.jpg",
      "img1": "./assets/imggo/basict2.jpg",
      "img2": "./assets/imggo/basict1.jpg",
      "img3": "./assets/imggo/basict2.jpg",
      "title": "Майка Nike Sportswear Basic T-shirt",
      "razm": "Размер: s,m,l",
      "cenaold": "63 руб.",
      "cena": "60 руб.",
      "catalog-item__list": "Мягкая хлопковая ткань обеспечивает комфорт.;Эластичная горловина из рубчатой ткани не ограничивает движений;Цвет модели: белый; гарантируют спортсменам скорость, силу и высокие результаты. "
    },
    {
      "img": "./assets/imggo/spwear.jpg",
      "img1": "./assets/imggo/spwear1.jpg",
      "img2": "./assets/imggo/spwear.jpg",
      "img3": "./assets/imggo/spwear1.jpg",
      "title": "Платье Nike Sportswear",
      "razm": "Рамзеры: S,M",
      "cenaold": "83 руб.",
      "cena": "80 руб.",
      "catalog-item__list": "Мягкая хлопковая ткань обеспечивает комфорт.; "
    },
    {
      "img": "./assets/imggo/spw.jpg",
      "img1": "./assets/imggo/spw1.jpg",
      "img2": "./assets/imggo/spw.jpg",
      "img3": "./assets/imggo/spw1.jpg",
      "title": "Платье Nike Sportswear ",
      "razm": "Размеры: S,M",
      "cenaold": "70 руб.",
      "cena": "65 руб.",
      "catalog-item__list": "Платье Nike Sportswear из легкой сетчатой ткани и хлопкового материала джерси обеспечивает комфорт и защиту;Цвет модели: черный, белый; "
    },
  ];
}

