// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })

    
  }, false)
}())

// INCREMENT DECREMENT QTY
const addBtn = document.getElementsByClassName('add');
const subBtn = document.getElementsByClassName('sub');

// INCREMENT
for(var i = 0; i < addBtn.length; i++) {
  const btn = addBtn[i];
  btn.addEventListener('click', () => {
    const btnClicked = event.target;
    const input = btnClicked.parentElement.children[1];
    const inputValue = input.value;
    const newValue = parseInt(inputValue) + 1;
    input.value = newValue;

    let total = document.getElementsByClassName('item-total');
    console.log(total.innerHTML);
  })
}
// DECREMENT
for(var i = 0; i < subBtn.length; i++) {
  const btn = subBtn[i];
  btn.addEventListener('click', () => {
    const btnClicked = event.target;
    const input = btnClicked.parentElement.children[1];
    const inputValue = input.value;
    const newValue = parseInt(inputValue) - 1;

    if(inputValue > 1) {
      input.value = newValue;
    } else {
      input.value = 1;
    }
  })
}

// TOTAL
// const price = getElementsByClassName('item-price');
// const qty = getElementsByClassName('item-qty').children[1];
// let total = 0;

// for(let i = 0; i < subtotal.length; i+=1) {
//   total += subtotal[i].price * subtotal[i].qty
// }


// let bin = document.querySelector('.remove');
// let order = document.querySelector('#submit');

// order.addEventListener('click', () => {
//   Swal.fire(
//     'The Internet?',
//     'That thing is still around?',
//     'question'
//   ).then(() => {
//     bin.disabled = true;
//   });
// });