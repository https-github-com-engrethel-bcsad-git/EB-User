<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Barangay</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<style>
/* <!-- span logo style  --> */

#hero {
  width: 100%;
  height: 40vh;
  background-color: #4981C6;
  background-size: cover;
  background-repeat:   no-repeat;
  background-position: center center;  

}
.profilebg {
  margin-left:15%;
    width:1500px;
    display: flex;
    justify-content: center;
    align-items: center;
    
  }
#profilebg {
  
   background:  linear-gradient(
    to right,
    #fefefe 10%,
    #9cc9ed 50%,
    #fefefe 90%
    
  );
}
.container2 {
  width: 85%;
  margin: auto;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  background-color: white;
  padding-top: 35px;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 100px;
}

label{
    font-weight: bold;
}

.col-sm h4{
    color: #024AA2;
    font-weight: bold;
    font-size:40px;
}
.container5{
  padding-top: 30px;
  padding-left: 45px;
  padding-right: 40px;
width: 338px;
height: 483px;
left: 91px;
top: 149px;
background: linear-gradient(180deg, #81CEF4 0%, rgba(129, 206, 244, 0) 100%);
border-radius: 20px;
}
.img-format{
    width: 250px;
    height: 250px;
    object-fit: cover;
    border-radius: 50%;
}
.button {
  background-color: #024AA2;
  height:40px;
  padding-top:7px;
  border-radius: 25px;
  color: #fff;
  text-decoration: none;
  display: inline-block;
  transition: background-color 0.3s ease;
  text-align: center;

}
.button-container .button{
    display: block;
    width: 350px;
    margin-left: 500px;
    text-align: center;
  }
  .col-sm{
    margin-left: 0px;
  }

  .modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 600px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
/* Modal */
#modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  width: 500px;
  max-width: 90%;
  height: fit-content;
  border: 1px solid #888;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

/* Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Form Styling */
form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 10px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="tel"],
input[type="email"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  padding: 8px 16px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* Responsive Design */
@media (max-width: 600px) {
  .modal-content {
    width: 90%;
  }
}
 
</style>
</head>

<body>
  
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
  @include('include.navbar-inside')
    </div>
  </header><!-- End Header -->
  
<br>
<br>

    
  <!-- ======= Header ======= -->


  <section id="profilebg" class="profilebg">
      <div class="container2" data-aos="fade-up">
        <div class="personal-info">
        <div class="row">
        <div class="col-sm">
            <div class="container5">
            <img class="img-format " src="assets/img/deku.jpg">

        </div>
        
 </div>

        <div class="col-sm" >
        <h4>Personal Information</h4> 
        <br>
        <label for="firstname" class="underline-label">First Name: </label>
        <span>{{ Auth::user()->firstname }}</span>
        <br>
        <br>
        <label for="middlename" class="underline-label">Middle Name: </label>
        <span>{{ Auth::user()->middlename }}</span>
        <br><br>
        <label for="lastname" class="underline-label">Last Name: </label>
        <span>{{ Auth::user()->lastname }}</span>
        <br><br>
        <label for="lastname" class="underline-label">Address: </label>
        <span>{{ Auth::user()->house_number}} ,{{ Auth::user()->street}} ,{{ Auth::user()->brgy }} ,{{ Auth::user()->city}}</span>
        <br><br>
        <label for="sitio" class="underline-label">Sitio: </label>
        <span>{{ Auth::user()->sitio }}</span>
        </div>

        
        <div class="col-sm">
        <br>
        <br>
        <h4 style="color: white;">blank</h4>
        <br>
        <label for="gender" class="underline-label">Gender: </label>
        <span>{{ Auth::user()->gender }}</span>
        <br><br>
        <label for="phone" class="underline-label">Contact Number: </label>
        <span>{{ Auth::user()->phone }}</span>
        <br><br>
        <label for="email" class="underline-label">Email Address: </label>
        <span>{{ Auth::user()->email }}</span>
        </div>
        </div>
        <br>
        <div class="button-container">
        <button id="editButton" class="button">EDIT PERSONAL INFORMATION</button>


        </div>
    
        </div>
       </div>
    </section><!-- End Section -->
    
    <!-- ======= Portfolio Section ======= -->
   
  </main><!-- End #main -->

  <div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Personal Information</h2>
    <form id="editForm">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>
      
      <label for="middleName">Middle Name:</label>
      <input type="text" id="middleName" name="middleName" required>
      
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>
      
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
      
      <label for="sitio">Sitio:</label>
      <input type="text" id="sitio" name="sitio" required>
      
      <label for="gender">Gender:</label>
      <input type="text" id="gender" name="gender" required>
      
      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" name="contactNumber" required>
      
      <label for="emailAddress">Email Address:</label>
      <input type="email" id="emailAddress" name="emailAddress" required>
      
      <input type="submit" value="Save">
    </form>
  </div>
</div>

  <!-- ======= Footer ======= -->
  @include('include.footer')
  
  </footer><!-- End Footer -->
    
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js">
    
  </script>

<script>
// Get the modal
const modal = document.getElementById("modal");

// Get the button that opens the modal
const editButton = document.getElementById("editButton");

// Get the <span> element that closes the modal
const closeSpan = document.getElementsByClassName("close")[0];

// Open the modal when the button is clicked
editButton.addEventListener("click", function() {
  modal.style.display = "block";
});

// Close the modal when the <span> element is clicked
closeSpan.addEventListener("click", function() {
  modal.style.display = "none";
});

// Close the modal when the user clicks outside of it
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
</script>
</body>

</html>
<script>



  </script>