<!DOCTYPE HTML>  
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body  class="container">  

<div class="row mt-3">
    <div class="col-md-6">
      <h4 class="mb-3">Form Validation in PHP - <a href="https://aspire-srv.github.io/Portfolio/" target="_blank" rel="noopener noreferrer">aspire-srv</a>
      </h4>
      <form id="form">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="tel" class="form-control" name="contact" id="contact" pattern="[0-9]+">
        </div>
        <div class="form-group">
          <label for="website">Website</label>
          <input type="text" class="form-control" name="website" id="website">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" id="insert" />
      </form>
    </div>
  </div>
  <div id = "msg"></div>



</body>
<style>
  .error {
    color: red;
  }
  </style>

  <script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        contact: {
          required: true,
          rangelength: [10, 12],
          number: true
        },
        website: {
          required: true,
        },
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        contact: {
          required: 'Please enter Contact.',
          rangelength: 'Contact should be 10 digit number.'
        },
        website: {
          required: 'Please enter website',
        },
      },
      submitHandler: function (form) {
        $("#insert").click(function(e) {
        $.ajax({
               type:'POST',
               url:'contact.php',
              data:jQuery("#form").serialize(),
              success:function(data) {
                $('#msg').html(data)
                $("form").hide();

            
            }
         });
       });
      }
    }); 
  });

  
</script>
 

</html>