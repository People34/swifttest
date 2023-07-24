function updateOrderInfo() {
    const cards = document.querySelectorAll('.services__card');
    let totalCost = 0;

    cards.forEach(card => {
        const quantityField = card.querySelector('.sum');
        const quantity = parseInt(quantityField.value);
        const price = parseFloat(card.querySelector('.services__card-button.active').dataset.price);

        if (!isNaN(quantity) && quantity > 0) {
            const totalPrice = (price * quantity).toFixed(2);
            totalCost += parseFloat(totalPrice);
        }
    });

    const errmsgElement = document.getElementById('errmsg');

    if (totalCost > 0) {
        errmsgElement.innerHTML = `До сплати ${totalCost.toFixed(2)} грн`;
        errmsgElement.classList.remove('error');
    } else {
        errmsgElement.innerHTML = 'Оберiть послугу';
        errmsgElement.classList.remove('error');
    }

    // Добавляем класс "error" если общая стоимость меньше 70 грн
    if (totalCost < 70) {
        errmsgElement.classList.add('error');
    }
}

// Вызываем функцию для обновления информации о заказе при загрузке страницы
updateOrderInfo();

// Находим все кнопки "Замовити" и добавляем обработчик клика для каждой из них
const orderButtons = document.querySelectorAll('.services__card-done');
orderButtons.forEach(button => button.addEventListener('click', updateOrderInfo));

// Добавляем обработчик изменения для поля с количеством
const quantityFields = document.querySelectorAll('.services__card-input.sum');
quantityFields.forEach(field => field.addEventListener('input', updateOrderInfo));