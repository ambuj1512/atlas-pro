<!DOCTYPE html>
<html>
<head>
	<title>Restaurant App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  
  <script>
  var country_code = document.getElementById("country_code");
  var phone_input = document.getElementById("phone");
  phone_input.value = country_code.options[country_code.selectedIndex].text;
  
  country_code.addEventListener("change", function() {
    phone_input.value = country_code.options[country_code.selectedIndex].text;
  });
</script>
 
</head>

<body class="bg">
	<div class="black-plate animate__animated animate__bounceInDown animate-delay-2s"></div>
	<div class="welcome-text animate__animated animate__bounceInLeft animate-delay-2s">
		
	<input id="phone" type="tel" name="phone"/>
	<div>
		<p class=text-ln>Verify Phone Number
		<span class="text-white">	
		<br>We will Send a code to your <br>phone to verify your number<span>
		</p>
	</div>

	<div class="welcome-text1"><a href="otp-code.php"><button class="btn2">Sent</button></a></div>

	</div>
</body>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
</html>