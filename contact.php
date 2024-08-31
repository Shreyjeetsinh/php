<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="fonts/icomoon/style.css"> -->
  <style>
    body {
  font-family: "Roboto", sans-serif;
  background-color: #fff;
  line-height: 1.9;
  color: #8c8c8c; }
  input{
    margin-top: 10px;
  }
  textarea{
    margin-top: 10px;
    
  }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", sans-serif;
  color: #000; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.text-black {
  color: #000; }

.content {
  padding: 5rem 0; }

.heading {
  font-size: 2.5rem;
  font-weight: 900; }

.form-control {
  border: none;
  background: #f3f3f3; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000;
    background: #f3f3f3; }

.col-form-label {
  color: #000; }

.btn, .form-control, .custom-select {
  height: 50px; }

.custom-select:active, .custom-select:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #000; }

.btn {
    margin-top: 10px;
  border: none;
  border-radius: 4px !important; }
  .btn.btn-primary {
    background: #000;
    color: #fff;
    padding: 15px 20px; }
  .btn:hover {
    color: #fff; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

.box {
  padding: 40px;
  background: #fff;
  -webkit-box-shadow: -30px 30px 0px 0 rgba(0, 0, 0, 0.08);
  box-shadow: -30px 30px 0px 0 rgba(0, 0, 0, 0.08); }
  .box h3 {
    font-size: 14px;
    margin-bottom: 30px;
    text-align: center; }

label.error {
  font-size: 12px;
  color: red; }


    #message {
  width: 59ch; /* sets the width to 50 characters */
  height: 10em; /* sets the height to 10 lines */
}


#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }
  </style>
  <title>Contact Form #6</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <img src="WhatsApp Image 2024-08-30 at 12.51.24_ea9af8e7.jpg" alt="im" width="50px" height="50px"> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        

      </ul>
   
    </div>
  </div>
</nav>
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p>I am consistently available whenever you need me.You can count on me to be here at all times.I am always present to support and assist you.</p>
              <p><img src="undraw-contact.svg" alt="Image" class="img-fluid"></p>
            </div>
            <div class="col-md-6">
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" cols="50" rows="10" name="message" id="message" placeholder="Write your message"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary rounded-0 py-2 px-4">Send Message</button>
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
              <div id="form-message-warning mt-4"></div>
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8bbbc0a628997938","serverTiming":{"name":{"cfL4":true}},"version":"2024.8.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>