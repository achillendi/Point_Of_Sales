<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Point Of Sales</title>
</head>

<body>
  <div class="content " style="margin-top:5rem;">
    <div class="container-fluid ">
      <div class="col-md-5 mx-auto p-5 ">
        <div class="card border border-0">
          <div class="card-header card-header-primary border border-0">
            <h5 class="title text-center text-primary fw-bold">Login</h5>
          </div>
          <form action="loginpros.php" method="post" enctype="multipart/form-data" class=" border border-primary " style="border-radius:20px;">
            <div class="card-body">


              <div class="col-12">
                <label for="yourEmail" class="form-label text-primary fw-bold"> Email</label>
                <input type="email" name="email" class="form-control border-0 border-bottom border-2 border-success" id="yourEmail" required>
                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
              </div>



              <div class="col-md-12 ">
                <div class="form-group">
                  <label class="text-primary fw-bold">Password</label>
                  <input type="password" name="pwd" id="password" class="form-control  border-0 border-bottom border-2 border-success" value="">
                  <div class="invalid-feedback">Please enter a valid Password!</div>
                </div>
              </div>



            </div>
            <div class="card-footer d-flex justify-content-center border border-0">
              <button class="btn btn-primary  rounded-pill  btn-md mt-2" name="login" style="background: linear-gradient(to right, #ff3366, #6600ff); width: 50%;">Login</button>
            </div>
          </form>
        </div>
      </div>


    </div>
  </div>

</body>

</html>