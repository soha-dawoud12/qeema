<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Qeema</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>
<body class="home-foot ">


        <?php include 'blocks/layouts/header.php'?>

        <?php include 'blocks/pages/slider.php'?>


        <div class="fixed container-fluid d-flex ml-lg-5 " style="width: 85%">

            <a href="javascript:;"  class="mt-4 icon-toggle" onclick="return hidemenu();" id="sel" style="position: absolute;z-index: 40 ">
                <i class="fas fa-angle-left p-1 mt-1   ml-1"></i>
            </a>

            <div class="menu-box bg-white   " id="menu-box">

                <div class=" row link1 menu-horezital d-flex justify-content-center ">
                    <div class="d-flex  col-10  col-md-3 col-lg-3 pt-3">
                        <span class="" style="font-size: 85%"> How much does 60 sec of video cost?</span>
                    </div>

                    <div class="d-flex col-12 col-md-2  col-lg-2 ">
                        <div class=" " style="background-color: #F5F5F5">
                             <span class="p-2 mt-2"><i class="fas fa-user-alt  pt-3 text-primary"></i></span>
                        </div>
                        <div class="pt-2">
                            <input type="text" class="form-control form-control-lg " id="name" placeholder="Full Name" name="name" style="font-size: 90%;border-width: 0 ">
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 ">
                        <div class=" d-flex">

                            <div class=" " style="background-color: #F5F5F5">
                              <span class="p-2 mt-3 "><i class=" fas fa-border-all  pt-3 text-primary"></i></span>
                            </div>
                            <div class="pt-2 col-md-12">
                                <select id="inputState" class="form-control " style="font-size: 90%;border-width: 0 ">
                                    <option selected>Service Type</option>
                                    <option>White Board Animation</option>
                                    <option>Social Media Designs</option>
                                    <option>Translation</option>
                                    <option>Motion Graphic</option>
                                    <option>Voice Over</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex col-12  col-md-3 col-lg-3 ">
                        <div class=" " style="background-color: #F5F5F5">
                         <span class="p-2"><i class="fas fa-envelope pt-3 text-primary"></i></span>
                    </div>
                            <div class="pt-2">
                                <input type="text" class="form-control form-control-lg  " id="email" placeholder="Email" name="email" style="font-size: 90%;border-width: 0" >
                            </div>
                    </div>

                    <div class=" d-flex  col-11 col-md-1 col-lg-1 bg-primary ">
                        <a href="" class="mx-auto"> <span class="m-auto"><i class="fas fa-arrow-right text-white pt-2"></i></span></a>
                    </div>


                    </div>

            </div>
                </div>



        <a href="" class="scroll-to-top shadow-sm" style="display: inline;">
            <i class="fas fa-chevron-up"></i>
        </a>
        <?php include 'blocks/pages/test.php' ?>
        
        <?php include 'blocks/pages/aboutus.php'?>

        <?php include 'blocks/pages/services.php'?>

        <?php include 'blocks/pages/portfolio.php'?>

        <?php include 'blocks/pages/clients.php'?>

        <?php include 'blocks/pages/contactus.php'?>

        <?php include 'blocks/layouts/footer.php' ?>

        <?php include 'blocks/layouts/foot-resources.php' ?>


</body>

</html>