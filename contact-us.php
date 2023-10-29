<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>contact us</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>
<body>

<div class="pages">

    <?php include 'blocks/layouts/header-2.php' ?>


    <div class="container">

              <div class="mb-4">
                  <div class="head text-center mt-4 mb-4">
                      <h2 class=" font-weight-bold text-primary ">Contact Us</h2>
                      <span class="font-weight-bold text-muted">Your trust means a lot</span>
                  </div>

                  <div class=" col-auto col-md-9 col-xl-10  p-2 p-lg-3 shadow-sm articles-details m-auto  ">
                      <form class="container p-lg-4  mt-1  ">

                          <div class="row">

                              <div class="col-lg-6">
                                  <input type="text" class="form-control form-control-lg " id="name" placeholder="Full Name"
                                         name="name" style="font-size: 90%;border-width: 2px ">

                                  <input type="text" class="form-control form-control-lg mt-2 " id="email" placeholder="Email"
                                         name="email" style="font-size: 90%;border-width: 2px">

                                  <div class="d-flex mt-2">
                                      <pictute><img src="assets/images/error.svg" class="img-fluid" style="max-width: 21px"
                                                    alt=""></pictute>
                                      <span class="text-primary "
                                            style="font-size: 90% ;line-height: 2">All fields are required</span>
                                  </div>
                              </div>


                              <div class="col-lg-6">
                                  <div class="form-group">

                                        <textarea class="form-control form-control-lg " id="exampleFormControlTextarea1"
                                                  placeholder="The text of message" rows="3"
                                                  style="font-size: 94%;border-width: 2px"></textarea>
                                  </div>
                                  <div class="text-right">
                                      <button type="submit" class="btn btn-secondary  " style="width: 35%;">
                                          <a href="" class="text-white">Send</a></button>
                                  </div>

                              </div>

                          </div>


                      </form>

                  </div>

                  <br>

                  <div class=" col-auto col-md-9 col-xl-10  p-2 p-lg-3 shadow-sm articles-details m-auto  ">
                      <h3 class="text-primary mb-1">
                          Contact info
                      </h3>
                      <p class="w-50" style="opacity: .6">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci commodi consequuntur debitis dicta excepturi expedita fugiat illum modi non nulla odit provident quibusdam ratione similique, velit veniam voluptas, voluptate.
                      </p>
                  </div>
              </div>

        </div>
    </div>


<?php include 'blocks/pages/test.php' ?>
</div>


<?php include 'blocks/layouts/footer.php' ?>

<?php include 'blocks/layouts/foot-resources.php' ?>


</body>

</html>