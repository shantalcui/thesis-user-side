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

// CART EVENTS
let addBtn = document.querySelector('#add');
let subBtn = document.querySelector('#sub');
let qty = document.querySelector('#qty');

addBtn.addEventListener('click', () => {
  qty.value = parseInt(qty.value) + 1;
});

subBtn.addEventListener('click', () => {

  if(qty.value > 1) {
    qty.value = parseInt(qty.value) - 1;
  } else {
    qty.value = 1;
  }
});


(function() {

})