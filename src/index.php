<html>

<head>
  <title>PHP Form Validation</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <?php
  // define variables and set to empty values
  $name = $email = $fatherName = $phno = $address = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phno = test_input($_POST["phno"]);
    $address = test_input($_POST["address"]);
    $fatherName = test_input($_POST["fatherName"]);
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>


  <div class="container">
    <div class="row main">
      <div class="panel-heading">
        <div class="panel-title text-center">
          <h1 class="title">Employee Form</h1>
          <hr />
        </div>
      </div>
      <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="#">

          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Your Name</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Your Email</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="fatherName" class="cols-sm-2 control-label">Father Name</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="fatherName" id="fatherName" placeholder="Enter your father Name" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="phno" class="cols-sm-2 control-label">Phone No</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="phno" id="phno" placeholder="Enter your Phone Number" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="cols-sm-2 control-label">Address</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Address" />
              </div>
            </div>
          </div>

          <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
  echo "<h2>Your Given details are as :</h2>";
  echo "<b>$name</b>";
  echo "<br>";

  echo "<b>$email</b>";
  echo "<br>";

  echo "<b>$fatherName</b>";
  echo "<br>";

  echo "<b>$phno</b>";
  echo "<br>";

  echo "<b>$address</b>";
  echo "<br>";
  ?>

</body>

</html>