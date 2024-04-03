function update_goods() {
  let result_price = 0;
  let goods = JSON.parse(localStorage.getItem('goods'))
  if (goods.length) {
    for (let i = 0; i < goods.length; i++) {
      // Сумировать цену в общий результат
      result_price += parseInt(goods[i][6]);
      document.querySelector('.cartt').insertAdjacentHTML('beforeend',
        `
        <tr class="align-middle">
          <td>${i + 1}</td>
          <td class="price_name">${goods[i][1]}</td>
          <td class="price_one">${goods[i][2]}</td>
          <td class="price_count"><button class="minus" data-minus="${goods[i]}">-</button>${goods[i][3]}<button class="plus" data-plus="${goods[i]}">+</button></td>
          <td>${goods[i][6]}</td>
          <td><button class="good_delete" data-delete="${goods[i]}">Удалить</button></td>
          <td><button class="good_buy" id="myBtn" data-buy="${goods[i]}">Купить</button></td>
        </tr>
        `)
    }
  }
  // Вывести цену в итог
  document.querySelector('.price_result').innerHTML = 'Итого в корзине: <span class="">' + result_price + ' бел. руб.</span>'
}

// Обновление отображаемых товаров
update_goods()

if (localStorage.getItem('goods')) {
  const goods = JSON.parse(localStorage.getItem('goods'));
  var prizn = false;
  document.querySelector('.cartt').addEventListener('click', (event) => {
    for (let i = 0; i < goods.length; i++) {
      let arrayString = goods[i].join(',');
      if (arrayString == event.target.dataset.delete) {
        goods.splice(i, 1);
        localStorage.setItem('goods', JSON.stringify(goods))
        localStorage.getItem('goods')
        window.location.reload();
      }
      if (arrayString == event.target.dataset.plus) {
        goods[i][3] += 1
        goods[i][6] = goods[i][2].split(" ")[0] * goods[i][3]
        localStorage.setItem('goods', JSON.stringify(goods))
        localStorage.getItem('goods')
        window.location.reload();
      }
      if (arrayString == event.target.dataset.minus) {
        if (goods[i][3] > 0) {
          goods[i][3] -= 1
          goods[i][6] = goods[i][2].split(" ")[0] * goods[i][3]
        }
        localStorage.setItem('goods', JSON.stringify(goods))
        localStorage.getItem('goods')
        window.location.reload();
      }
      if (arrayString == event.target.dataset.buy) {
        var modal = document.getElementById("myModal");
        // Получить кнопку, которая открывает модальный
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        modal.style.display = "block";
        span.onclick = function () {
          modal.style.display = "none";
          document.querySelector('#modal_dos').innerHTML = '';
        }
        let aa = document.querySelector('#modalzag').innerHTML =
          `<p><br>Ваш заказ:<br>${goods[i][1]}<br>Количество: ${goods[i][3]}</p>`;
        prizn = true;
        let naim = `${goods[i][1]}`;
        document.getElementById("modalzag").value = naim;
        let kol = `${goods[i][3]}`;
        document.getElementById("kol").value = kol;
        let cena = `${goods[i][6]}`;
        document.getElementById("cena").value = cena;
        //Выбираем способ доставки товара
        let mySelect = document.getElementById('mod_dost');
        mySelect.addEventListener('click', function (event) {
          let selectedOption = event.target.value;
          if (selectedOption == "Самовывоз") {
            document.querySelector('#modal_dos').innerHTML =
              `<p>Оплата через ERIP<br>Путь в Erip: Интернет-магазины/сервисы<br>Номер заказа для Erip находится:<br> Главная страница<br>-Мои заказы<br>-Вводим номер телефона-находим колонку номер заказа</p>`
          } else {
            document.querySelector('#modal_dos').innerHTML =
              `<p>Оплата при получении</p>`
          }

        });

      }
    }
  })
}

function cartbtn_reload() {
  let goods = JSON.parse(localStorage.getItem('goods'))
  let cartbtn = document.querySelector('.cartbtn');
  if (localStorage.getItem('goods')) {
    cartbtn.innerHTML = `${goods.length}`;
  }
};
cartbtn_reload();