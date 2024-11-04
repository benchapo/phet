<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css"
    rel="stylesheet" interrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script>// Example starter Javascript for disabling form submissions if there are invalid fields
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
    })
})()</script>
    <title>ฟอร์มไปรษณีย์ไทย</title>
</head>
<body>
<form class="row g-3 needs-validation" novalidate>
<h1>ชื่อ-ที่อยู่ผู้ส่ง/FROM</h1>
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div class="invalid-feedback">
       Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div class="invalid-feedback">
      please provide a valid zip.
    </div>
  </div>





        <h1>ชื่อ-ที่อยู่ผู้รับ/TO</h1>
        <div class="col-md-4">
      <label for="validationCustom01" class="form-lable">first name</label>
      <input type="text" class="from-control" id="validationCustom01" value="Mark" required>
      <div class="valid-feedback">
        LOOKS good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-lable">last name</label>
      <input type="text" class="from-control" id="validationCustom02" value="Otto" required>
      <div class="valid-feedback">
        LOOKS good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-lable">username</label>
      <div class="input-group has-validation">
      <span class="input-group-text" id="inputgroupprepend">@</span>
      <input type="text" class="from-control" id="validationCustomusername" aria-describedby="inputGroupprepend" required>
      <div class="valid-feedback">
        please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-lable">last name</label>
      <input type="text" class="from-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
    <label for="validationCustom04" class="form-lable">city</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value=""choose...</option>
      <option>...</option>
    </section>
    <div class="invalid-feedback">
    please provide a valid state.
    </div>
  </div>
  <div class="col-md-3">
      <label for="validationCustom03" class="form-lable">zip</label>
      <input type="text" class="from-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        please provide a vaid zip.
      </div>
    </div>
    <div class="col-md-12">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidcheck" required>
      <label class="form-check-lable" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">submit form</button>
    </div>
        </form>
        
</body>
</html>