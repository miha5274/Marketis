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
console.log(inputs);
form.addEventListener('submit', (event) =>
{
  event.preventDefault();
});
console.log(form);
  const nameInput = inputs[0];
  const addressInput = inputs[1];
  const telInput = inputs[2];
  const payButton = document.getElementById('order2');


console.log(payButton);
// добавляем обработчик клика на кнопку оплаты
payButton.addEventListener('click', () => {
  // получаем массив товаров из localStorage
  const cart = JSON.parse(localStorage.getItem('cart'));
  console.log(payButton);
  console.log(nameInput.value);
  console.log(addressInput.value);
  console.log(telInput.value);
// Создаем объект с данными заказа
const orderData = {
  name: nameInput.value,
  address: addressInput.value,
  tel: telInput.value,
  cart: cart
};
console.log(orderData);
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

// Получаем корзину из localstorage
console.log(cart);
// Формируем тело запроса
let data = {cart: cart};
console.log(data);
// Отправляем POST запрос на сервер
fetch('total_price.php', {
  method: 'POST',
  body: JSON.stringify(data)
})
.then(response => response.json())
.then(data => {
    let priceElement = document.querySelector('.order__price');
    console.log(priceElement);
    priceElement.innerText = data.total_price + '$';
})
.catch(error => console.error(error));
