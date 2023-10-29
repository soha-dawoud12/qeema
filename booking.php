<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Book Now</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>
<body>

        <div class="pages">

            <?php include 'blocks/layouts/header-2.php' ?>

            <div class="booking">

                <div class="container">

                    <div class="mb-4">
                        <div class="head text-center mt-4 mb-4">
                            <h2 class=" font-weight-bold text-primary ">Book Now</h2>
                            <span class="font-weight-bold text-dark">Your trust means a lot</span>
                        </div>

                        <div class="row">


                            <div class=" col-auto col-md-7 col-lg-8 p-2 p-lg-3 shadow-sm articles-details mb-4  ">
                                <form class=" p-lg-4  mt-1  ">

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <input type="text" class="form-control form-control-lg mb-2 " id="name"
                                                   placeholder="Section Name" name="name" >

                                            <input type="text" class="form-control form-control-lg mb-2 " id="name"
                                                   placeholder="#34445" name="name" >

                                            <input type="text" class="form-control form-control-lg mb-2 " id="email"
                                                   placeholder="Email" name="email">




                                        </div>


                                        <div class="col-lg-6">

                                            <input type="text" class="form-control form-control-lg mb-2 " id="email"
                                                   placeholder="First Name/ Commentator " name="First Name">

                                            <input type="text" class="form-control form-control-lg mb-2 " id="email"
                                                   placeholder="Full Name " name="Full-Name">


                                            <input type="text" class="form-control form-control-lg mb-2 " id="country"
                                                   placeholder="Country" name="Country">


                                        </div>

                                    </div>

                                    <div class="form-group mb-2">
                                        <textarea class="form-control form-control-lg " id="exampleFormControlTextarea1" placeholder="The text of message" rows="3" ></textarea>
                                    </div>

                                    <div class="mb-2  ">
                                        <label for="name">Attach the description file</label>
                                        <div class="custom-file ">

                                            <input type="file" class="custom-file-input" id="customFile" style="cursor:pointer;">
                                            <label class="custom-file-label" for="customFile" >
                                                <div class="text-center "> <img src="assets/images/upload.png" alt="" class="img-fluid upload-img "></div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-2">
                                        <pictute><img src="assets/images/error.svg" class="img-fluid"
                                                      style="max-width: 21px" alt=""></pictute>
                                        <span class="text-primary ">All fields are required</span>
                                    </div>

                                    <div class="text-right ">
                                        <button type="submit" class="btn btn-primary col-3 ">
                                            <a href="" class="text-white">Send</a></button>
                                    </div>
                                </form>

                            </div>

                            <div class=" col-12 col-md-4 col-lg-3 voice-record  p-2 p-lg-3   m-auto ">


                                <div class="p-2 mb-2 shadow-sm bg-secondary text-white" style="border-radius: 4px">
                                    <div class="row d-flex m-1 justify-content-between">
                                        <div>Minute rate</div>
                                        <div>30$</div>
                                    </div>
                                </div>
                                <article class=" p-3 mb-4 shadow-sm position-relative">

                                    <div class="d-flex justify-content-between">

                                        <div class="like  mb-4">
                                            <i class="fa-heart fas"></i>
                                            <span class="view-like " style="opacity: .7; font-size: 13px"> 30</span>
                                        </div>
                                        <div>
                                            <i class="fas fa-volume-up" id="mute" style="opacity: .4"></i>
                                        </div>

                                    </div>

                                    <div class="player">
                                        <div class="main">
                                            <audio></audio>


                                            <div class="controls d-flex justify-content-between">
                                                <div>
                                                    <span id="minute">0</span>:<span id="second">00</span>
                                                </div>
                                                <div class="prev-control ">

                                                    <i class="fas fa-step-backward"></i>
                                                </div>
                                                <div class="play-pause-control paused">
                                                    <form name="form_main">

                                                        <button type="button" name="start" id="start" style="
                                                                            width: 10px;
                                                                            height: 10px;
                                                                            background-color: white ;border: none ;outline: 0">
                                                            <i class="fas fa-play"></i>
                                                            <i class="fas fa-pause"></i>
                                                        </button>

                                                    </form>
                                                </div>
                                                <div class="next-control">
                                                    <i class="fas fa-step-forward"></i>
                                                </div>

                                                <div>
                                                    <span id="period-minute">7</span>:<span
                                                            id="period:second">10</span>
                                                </div>
                                            </div>


                                            <div class="seekbar">
                                                <input type="range">
                                            </div>

                                            <div class="details" style="float: left">
                                                <p></p>
                                                <h2></h2>
                                            </div>

                                        </div>
                                        <div class="player-list">
                                            <div class="toggle-list">
                                            </div>
                                            <div class="list">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry-body ">
                                        <div class="d-flex justify-content-between">
                                            <div><span>Section Name</span></div>
                                            <div><h6 class="text-primary"> 10$</h6></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div><span>First Name</span></div>
                                            <div><h6 class="text-primary"> #000577</h6></div>
                                        </div>


                                        <!-- Rating Stars Box -->
                                        <div class="rating-stars text-center">
                                            <ul id="stars" class="list-unstyled d-flex">
                                                <li class="star" title="Poor" data-value="1">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Fair" data-value="2">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Good" data-value="3">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Excellent" data-value="4">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="WOW!!!" data-value="5">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                            </ul>
                                        </div>


                                    </div>
                                    <div>
                                        <a href="booking.php">
                                            <button type="submit" class="btn-danger  btn cancel  w-100 mt-2  mb-1 mb-md-0">
                                                Cancel
                                            </button>
                                        </a>
                                    </div>
                                </article>


                            </div>
                        </div>



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