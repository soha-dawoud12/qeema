<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Edit-Mentor-profile</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>
<body>

<div class="pages">

    <?php include 'blocks/layouts/header-2.php' ?>


    <div class="container">
        <div class="  p-2 p-lg-3    m-auto ">
            <div class="edit-profile p-4">
                <div class="img-course-details-mentor  m-auto border-0">
                    <img src="uploads/p1.jpg" alt="img-admin" class="img-fluid">
                </div>

                <div class="  p-2 m-auto">

                    <form class=" pt-2  ">

                        <div class="">
                            <input type="text" class="form-control form-control-lg mb-2 " id="name"
                                   placeholder="Name" name="name">
                            <input type="text" class="form-control form-control-lg mb-2 " id="country"
                                   placeholder="Country" name="Country">

                            <input type="text" class="form-control form-control-lg mb-2 " id="email"
                                   placeholder="Email" name="email">

                            <input type="text" class="form-control form-control-lg mb-2 " id="phone"
                                   placeholder="phone" name="name">
                            <div class="form-group mb-2">
                                <textarea class="form-control form-control-lg " id="exampleFormControlTextarea1"
                                          placeholder="Bio" rows="3"></textarea>
                            </div>
                            <input type="text" class="form-control form-control-lg mb-2 " id="inputAddress"
                                   placeholder="1234 Main St">

                            <input type="password" class="form-control form-control-lg mb-2" id="inputPassword4"
                                   placeholder="Password">
                            <input type="password" class="form-control form-control-lg mb-2" id="inputPassword4"
                                   placeholder="New Password">
                            <input type="password" class="form-control form-control-lg mb-2" id="inputPassword4"
                                   placeholder="Create Password">

                        </div>


                        <div class="d-flex justify-content-end">
                            <a href="" class=" col-12 p-0 mt-3" title="">
                                <button type="button" class="btn btn-primary  text-white w-100 mb-1">Save</button>
                            </a>
                        </div>
                    </form>


                </div>
            </div>

        </div>


    </div>
</div>


<?php include 'blocks/pages/test.php' ?>





<?php include 'blocks/layouts/footer.php' ?>

<?php include 'blocks/layouts/foot-resources.php' ?>


</body>

</html>