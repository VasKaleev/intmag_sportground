const template = document.querySelector('.cards-wrapper');
const card = document.querySelector('.card');

getData().forEach(art => {
  const artElem = document.importNode(card, true);
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


function getData() {
  return [
    {
      "img": "./assets/imgmo/psg.jpg",
      "img1": "./assets/imgmo/psg1.jpg",
      "img2": "./assets/imgmo/psg2.jpg",
      "img3": "./assets/imgmo/psg.jpg",
      "title": "Футболка PSG",
      "razm": "Размер: S",
      "cenaold": "73 руб.",
      "cena": "70 руб.",
      "catalog-item__list": " Футболка Paris Saint-Germain из хлопка обеспечивает комфорт на весь день. Тонкий трикотаж: 100% хлопок. Состав: 100% хлопок. Цвет модели: Black."
    },
    {
      "img": "./assets/imgmo/nmatt.jpg",
      "img1": "./assets/imgmo/psg1.jpg",
      "img2": "./assets/imgmo/psg2.jpg",
      "img3": "./assets/imgmo/nmatt.jpg",
      "title": "Майка Nike Matthew Williams NRG cotton T-SHIRT",
      "razm": "Размер: S,M",
      "cenaold": "85 руб.",
      "cena": "80 руб.",
      "catalog-item__list": "Ткань Nike для максимального комфорта. Эргономичный крой для естественной свободы движений. Цвет модели: White."
    },
    {
      "img": "./assets/imgmo/swoosh.jpg",
      "img1": "./assets/imgmo/psg1.jpg",
      "img2": "./assets/imgmo/psg2.jpg",
      "img3": "./assets/imgmo/swoosh.jpg",
      "title": "Nike Nrg Swoosh Logo",
      "razm": "Размеры: S,M,L",
      "cenaold": "82 руб.",
      "cena": "79 руб.",
      "catalog-item__list": "Легкая футболка с культовыми тремя полосками. Тонкий трикотаж: 100% хлопок. Цвет модели: Black / White. "
    },
    {
      "img": "./assets/imgmo/atmos1.jpg",
      "img1": "./assets/imgmo/psg1.jpg",
      "img2": "./assets/imgmo/psg2.jpg",
      "img3": "./assets/imgmo/atmos1.jpg",
      "title": "Футболка 3-stripes  Adidas originals",
      "razm": "Размеры: S,M,L",
      "cenaold": "83 руб.",
      "cena": "80 руб.",
      "catalog-item__list": "Новинки коллекции Nike. Летняя коллекция 2020. Состав: 100% хлопок. Цвет: Белый,чёрный."
    },
    {
      "img": "./assets/imgmo/stripes.jpg",
      "img1": "./assets/imgmo/psg1.jpg",
      "img2": "./assets/imgmo/psg2.jpg",
      "img3": "./assets/imgmo/stripes.jpg",
      "title": "Футболка 3-stripes Adidas originals",
      "razm": "Размеры: S,M,L",
      "cenaold": "70 руб.",
      "cena": "65 руб.",
      "catalog-item__list": "Новинки коллекции Nike. Летняя коллекция 2020. Состав: 100% хлопок. Цвет: Белый,чёрный."
    },
  ];
}

