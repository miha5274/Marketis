const orderButton = document.getElementById('order1');
const orderForm = document.querySelector('.order__form');
const basketMiss = document.querySelector('.basket__miss');
const basketTrack = document.querySelector('.basket__track');
const orderRight = document.querySelector('.order__right');

orderButton.addEventListener('click', () => {
  orderForm.style.display = 'block';
  orderRight.style.display = 'block';
  basketMiss.style.display ='none';
  orderButton.style.display = 'none';
  basketTrack.style.display = 'none';
});


// получаем элементы формы и кнопку
const form = document.querySelector('.order__form');
const inputs = form.querySelectorAll('input');
form.addEventListener('submit', (event) =>
{
  event.preventDefault();
});
  const nameInput = inputs[0];
  const addressInput = inputs[1];
  const telInput = inputs[2];
  const payButton = document.getElementById('order2');


// добавляем обработчик клика на кнопку оплаты
payButton.addEventListener('click', () => {
  // получаем массив товаров из localStorage
  const cart = JSON.parse(localStorage.getItem('cart'));
// Создаем объект с данными заказа
const orderData = {
  name: nameInput.value,
  address: addressInput.value,
  tel: telInput.value,
  cart: cart
};
// Отправляем запрос на сервер
fetch('process_order.php', {
  method: 'POST',
  body: JSON.stringify(orderData),
  headers: {
    'Content-Type':'application/json'
  }
})
.then(response => {
  if (response.ok) {
    alert('Покупка прошла успешно');
    localStorage.removeItem('cart'); // удаление ключа cart из localStorage
  } else {
    alert('Ошибка отправки данных');
  }
})
.then(responseText => {
  console.log(responseText); // Выводим ответ от сервера в консоль
})
.catch(error => {
  console.error(error);
});

});

// Формируем тело запроса
let data = {cart: cart};
// Отправляем POST запрос на сервер
fetch('total_price.php', {
  method: 'POST',
  body: JSON.stringify(data)
})
.then(response => response.json())
.then(data => {
    let priceElement = document.querySelector('.order__price');
    priceElement.innerText = data.total_price + '$';
})
.catch(error => console.error(error));
