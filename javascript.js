// Example starter Javascript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
     // Fetch all the forms we want to applycustom Bootstrap validation styles to 
     var forms = document.querySelectorAll('.needs-validation')

     // Loop over them and prevent submission
     Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventlistener('submit', function (event) {
           if (!form.checkBalidity)()) {
             event.preventDefault()
             event.stopPropagation()
           }
 
           form.classList.add('was-validated')
          }, false)
        }
    })()
    