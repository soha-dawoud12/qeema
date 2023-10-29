<!-- popup                -->
<div class="log-in signup">


    <div class="container">
        <div class="popup first-popup">
            <!-- Login -->
            <div class="inner-popup active login">
                <button class="tablink bg-white " onclick="openPopup('login' ); return false;" id="defaultOpen">login</button>
                <button class="tablink text-white active-right" onclick="openPopup('entry' ); return false;">Singup</button>

                   <div id="login" class="tabcontent mt-4">

                       <form>
                           <div class="col-12 col-lg-10 m-auto">
                               <input type="text" class="form-control form-control-lg mb-2 " id="email" placeholder="Email" name="email" style="font-size: 90%;border-width: 2px;border-color: var(--secondary)">

                               <input type="password" class="form-control form-control-lg mb-2" id="password" placeholder="password" name="password" style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">


                               <div class="d-flex  mb-4 position-relative">
                                   <div class="remmber-check">
                                       <label class="container">
                                           <input type="checkbox" checked="checked">
                                           <span class="checkmark"></span>
                                       </label>

                                   </div>
                                   <div class="remember">
                                       <span class="text-secondary " style=" line-height: 2">Remember the password</span>
                                   </div>

                               </div>
                               <div class=" d-flex mb-2  ">
                                   <button type="submit" class="btn btn-secondary " style="width: 159px;">
                                       <a href="" class="text-white">Send</a></button>
                               </div>
                               <div class="d-flex">
                                   <a class="show-popup" onclick="openPopup('forget-password' ); return false;">
                                    <span class="text-secondary   " style="font-size: 90% ;line-height: 2">
                                        Forget Pasword !
                                    </span>
                                   </a>
                               </div>

                           </div>

                       </form>

                   </div>


            </div>
            <!-- Signup -->
            <div class="inner-popup entry">
                <button class="tablink text-white active-left" onclick="openPopup('login' ); return false;" id="defaultOpen">login</button>
                <button class="tablink bg-white" onclick="openPopup('entry' ); return false;">Singup</button>

                <div id="Singup" class="tabcontent ">
                    <h3 class="mt-5 font-weight-bold">Are You ?</h3>

                    <div class=" row  m-auto p-4 ">
                        <div class="d-flex col">
                            <div>
                                <label class="custom-radio">
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <h6>Voiceover </h6>
                        </div>

                        <div class="d-flex col-5 m-auto "  onclick="openPopup('sign-up-find'); return false;" >
                            <div onclick="openPopup('sign-up-find' ); return false;">

                                    <label class="custom-radio show-popup  " data-popup=".entry-popup">
                                    <input type="" checked="checked" name="radio" >
                                        <span class="checkmark"></span>
                                    </label>

                            </div>
                            <h6>Find A Voiceover </h6>
                        </div>

                        <div class="d-flex col m-auto"  onclick="openPopup('signup-Trainer'); return false;" >
                            <div onclick="openPopup('signup-Trainer' ); return false;">
                                <label class="custom-radio">
                                    <input type="" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <h6>Trainer </h6>
                        </div>

                    </div>
                    <div class=" mb-4 mt-2 entry">
                        <a href="" class="text-white" onclick="openPopup('signup' ); return false;">
                            <button type="" class="btn btn-secondary show-popup m-auto " data-popup=".entry-popup" style="      width: 159px;">
                           Entry</button></a>
                    </div>
                </div>


            </div>

            <div class="inner-popup signup">
                <button class="tablink text-white active-left" onclick="openPopup('entry'); return false;" >back</button>
                <button class="tablink bg-white" onclick="openPopup('signup'); return false;" id="defaultOpen">Sinup</button>

                <div id="sign-up" class="tabcontent ">
                    <form class="mt-4">
                        <div class="col-12 col-lg-10 m-auto">


                            <input type="text" class="form-control form-control-lg mb-2" id="password"
                                   placeholder="Full Name"
                                   name="password"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <input type="text" class="form-control form-control-lg mb-2" id="Country"
                                   placeholder="Country"
                                   name="Country"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2" id="phone"
                                   placeholder="phone"
                                   name="phone"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2 " id="email" placeholder="Email"
                                   name="email"
                                   style="font-size: 90%;border-width: 2px;border-color: var(--secondary)">

                            <input type="password" class="form-control form-control-lg mb-2" id="password"
                                   placeholder="password"
                                   name="password"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <div class=" d-flex mb-2 mt-3 justify-content-between ">
                                <a href="" class="text-white">   <button  onclick="openPopup('signup-2') ; return false;" type="submit" class="btn btn-secondary " style="width: 159px;">
                                    Next</button></a>

                                <div class=" row d-flex p-0 ">
                                    <div class="d-flex col p-2">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="radio" checked="checked" name="radio" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-flex col p-2 ">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="" checked="checked" name="radio"    onclick="openPopup('signup-2' ); return false;">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-flex col p-2 ">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="" checked="checked" name="radio"    onclick="openPopup('signup-3' ); return false;">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>

                    </form>
                </div>
            </div>


            <!-- Forget Password -->
            <div class="inner-popup forget-password">
                <button class="tablink text-white active-left" onclick="openPopup('login' ); return false;">back</button>
                <button class="tablink bg-white" onclick="openPopup('forget-password' ); return false;" id="defaultOpen"> Forget Pasword !</button>

                <div id="forget" class="tabcontent ">


                    <form>
                        <div class="col-12 col-lg-10  m-auto">
                            <div class="mb-4">
                                <h3 class="mt-5   d-flex ">Enter Your Email</h3>
                            </div>
                            <input type="text" class="form-control form-control-lg mb-2 " id="email" placeholder="Email" name="email" style="font-size: 90%;border-width: 2px;border-color: var(--secondary)">


                            <div class="offset-1"></div>
                            <div class=" mb-4 mt-4 d-flex">
                                <button type="submit" class="btn btn-secondary  " style="width: 159px;">
                                    <a href="" class="text-white">Send</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        

            <!-- Sign up 2 -->
            <!-- <div class="inner-popup signup-2">
                <button class="tablink" onclick="openPopup('signup' ); return false;">back</button>
                <button class="tablink" onclick="openPopup('signup-2' ); return false;" id="defaultOpen">Sinup</button>


                <div id="back" class="tabcontent mt-4">



                </div>

                <div id="sign-up-voice-over" class="tabcontent ">
                    <form class="mt-4">
                        <div class="col-10 m-auto">


                            <input type="text" class="form-control form-control-lg mb-2" id="password" placeholder="Full Name" name="password" style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <input type="text" class="form-control form-control-lg mb-2" id="Country" placeholder="Country" name="Country" style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2" id="phone" placeholder="phone" name="phone" style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2 " id="email" placeholder="Email" name="email" style="font-size: 90%;border-width: 2px;border-color: var(--secondary)">

                            <input type="password" class="form-control form-control-lg mb-2" id="password" placeholder="password" name="password" style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <div class=" d-flex mb-2 mt-3  ">
                                <div>


                                    <a href="" onclick="openPopup('signup-3' ); return false;" class="text-white"> <button type="submit" class="btn btn-secondary " style="width: 159px;">
                                            Next</button></a>

                                </div>
                                <div>

                                    <div>
                                        <label class="custom-radio">
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </form>
                </div>
            </div> -->

            <!-- Sign up 2 -->
            <div class="inner-popup signup-2">
                <button class="tablink text-white active-left" onclick="openPopup('signup' ); return false;">back</button>
                <button class="tablink bg-white" onclick="openPopup('signup-2' ); return false;" id="defaultOpen">Sinup</button>


                <div id="sign-up-voice-over" class="tabcontent ">
                    <form class="mt-4">
                        <div class="col-12 col-lg-10 m-auto ">
                            <h6 class="mt-4 font-weight-bold d-flex">Level</h6>

                            <div class=" row  m-auto  ">
                                <div class="d-flex col">
                                    <div>
                                        <label class="custom-radio">
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h6>Beginner </h6>
                                </div>

                                <div class="d-flex col">
                                    <div>
                                        <label class="custom-radio">
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h6>Intermediate </h6>
                                </div>

                                <div class="d-flex col ">
                                    <div>
                                        <label class="custom-radio">
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h6>Professional </h6>
                                </div>

                            </div>



                            </div>

                        <div class="col-12 col-lg-10 m-auto ">
                            <h6 class="mt-2 font-weight-bold d-flex">Do You Have A Studio?</h6>

                            <div class=" row  m-auto  ">
                                <div class="d-flex col-4">
                                    <div>
                                        <label class="custom-radio">
                                            <input type="radio" checked="checked" name="radio-2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h6>Yes </h6>
                                </div>

                                <div class="d-flex col">
                                    <div>
                                        <label class="custom-radio">
                                            <input type="radio" checked="checked" name="radio-2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h6>No </h6>
                                </div>
                            </div>
                                <form>
                                    <div class="form-group mt-2">

                                        <textarea class="form-control" placeholder="What Tools And Equipment Do You Use?" id="exampleFormControlTextarea1" rows="3" style="border:2px solid var(--secondary)"></textarea>
                                    </div>
                                </form>







                            <div class=" d-flex mb-2 mt-3 justify-content-between ">

                                <a href="" onclick="openPopup('signup-3' ); return false;" class="text-white"> <button type="submit" class="btn btn-secondary " style="width: 159px;">
                                        Next</button></a>

                                <div class=" row d-flex p-0 ">
                                    <div class="d-flex col p-2">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="" checked="checked" name="radio-3"    onclick="openPopup('signup' ); return false;" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-flex col p-2 ">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="radio" checked="checked" name="radio-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-flex col p-2 ">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="" checked="checked" name="radio-3"   onclick="openPopup('signup-3' ); return false;">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>


                                </div>
                            </div>


                        </div>


                    </form>
                </div>
            </div>

            <!-- Sign up 3 -->
            <div class="inner-popup signup-3">
                <button class="tablink text-white active-left" onclick="openPopup('signup-2' ); return false;">back</button>
                <button class="tablink bg-white" onclick="openPopup('signup-3' ); return false;" id="defaultOpen">Sinup</button>


                <div id="sign-up-voice-over" class="tabcontent ">
                    <form class="mt-4">
                        <div class="col-12 col-lg-10 m-auto">

                            <div class=" row  d-flex align-items-center ">

                            <div class="col-8 text-justify">
                                <p>
                                    Registration Minute Rate
                                </p>
                            </div>
                                <div class="col ">
                                    <div class="input-group mb-3" style="border: 2px solid var(--secondary);border-radius: 4px;">
                                        <input type="text" class="form-control border-0" placeholder="" aria-label="" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-white border-0 font-weight-bold" id="basic-addon2">$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" row  d-flex align-items-center ">

                                <div class="col-8 text-justify">
                                    <p>
                                        Hourly Registration Price
                                    </p>
                                </div>
                                <div class="col ">
                                    <div class="input-group mb-3" style="border: 2px solid var(--secondary);border-radius: 4px;">
                                        <input type="text" class="form-control border-0" placeholder="" aria-label="" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-white border-0 font-weight-bold" id="basic-addon2">$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <form>
                                <div class="form-group mt-2">

                                    <textarea class="form-control" placeholder="Attach Your Business Link" id="exampleFormControlTextarea1" rows="3" style="border:2px solid var(--secondary)"></textarea>
                                </div>
                            </form>




                                <div class=" d-flex mb-2 mt-3 justify-content-between ">
                                   <div>
                                       <a href="membership.php" class="text-white">
                                           <button type="button" class="btn btn-secondary " style="width: 159px;">
                                               Sign up</button>
                                       </a>
                                   </div>

                                    <div class=" row d-flex p-0 ">
                                        <div class="d-flex col p-2">
                                            <div>
                                                <label class="custom-radio">
                                                    <input type="" checked="checked" name="radio"  >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="d-flex col p-2 ">
                                            <div>
                                                <label class="custom-radio">
                                                    <input type="" checked="checked" name="radio"    onclick="openPopup('signup-2' ); return false;">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="d-flex col p-2 ">
                                            <div>
                                                <label class="custom-radio">
                                                    <input type="radio" checked="checked" name="radio"    onclick="openPopup('signup-3' ); return false;">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>




                    </form>
                </div>
            </div>

            <div class="inner-popup signup-4">
                <button class="tablink text-white active-left" onclick="openPopup('signup-Trainer' ); return false;">back</button>
                <button class="tablink bg-white" onclick="openPopup('signup-4' ); return false;" id="defaultOpen">Sinup</button>


                <div id="signup-Trainer" class="tabcontent ">
                    <form class="mt-4">
                        <div class="col-12 col-lg-10 m-auto">
                            <div class="wrapper">
                            <div class="form-group mt-2">

                                    <textarea class="form-control"  name="the-textarea" id="the-textarea" maxlength="300" placeholder="Bio"autofocus rows="4" style="border:2px solid var(--secondary)" spellcheck="false"></textarea>
                                    <div id="the-count" class="text-justify" style="opacity: .6">
                                        <span id="current">0</span>
                                        <span id="maximum">/ 300</span>
                                    </div>
                                </div>


                            </div>




                            <div class=" d-flex mb-2 mt-3 justify-content-between ">
                                <div>


                                    <a href="membership.php" class="text-white"> <button type="button" class="btn btn-secondary " style="width: 159px;">
                                            Signup</button></a>

                                </div>

                                <div class=" row d-flex p-0 ">
                                    <div class="d-flex col p-2">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="" checked="checked" name="radio" onclick="openPopup('signup-Trainer' ); return false;">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-flex col p-2 ">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="radio" checked="checked" name="radio" onclick="openPopup('signup-4' ); return false;">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>



                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>




            <div class="inner-popup sign-up-find">
                <button class="tablink text-white active-left" onclick="openPopup('entry'); return false;" >back</button>
                <button class="tablink bg-white" onclick="openPopup('signup'); return false;" id="defaultOpen">Sinup</button>

                <div id="sign-up-find" class="tabcontent ">
                    <form class="mt-4">
                        <div class="col-12 col-lg-10 m-auto">


                            <input type="text" class="form-control form-control-lg mb-2" id="password"
                                   placeholder="Full Name"
                                   name="password"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <input type="text" class="form-control form-control-lg mb-2" id="Country"
                                   placeholder="Country"
                                   name="Country"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2" id="phone"
                                   placeholder="phone"
                                   name="phone"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2 " id="email" placeholder="Email"
                                   name="email"
                                   style="font-size: 90%;border-width: 2px;border-color: var(--secondary)">

                            <input type="password" class="form-control form-control-lg mb-2" id="password"
                                   placeholder="password"
                                   name="password"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <div class=" d-flex mb-2 mt-3 justify-content-between ">
                                <a href="membership.php" class="text-white">
                                    <button  type="button" class="btn btn-secondary " style="width: 159px;">
                                        Signup
                                    </button>
                                </a>


                            </div>


                        </div>

                    </form>
                </div>
            </div>



            <div class="inner-popup signup-Trainer">
                <button class="tablink text-white active-left" onclick="openPopup('entry'); return false;" >back</button>
                <button class="tablink bg-white" onclick="openPopup('signup'); return false;" id="defaultOpen">Sinup</button>

                <div id="signup-Trainer" class="tabcontent ">
                    <form class="mt-4">
                        <div class="col-12 col-lg-10 m-auto">


                            <input type="text" class="form-control form-control-lg mb-2" id="password"
                                   placeholder="Full Name"
                                   name="password"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <input type="text" class="form-control form-control-lg mb-2" id="Country"
                                   placeholder="Country"
                                   name="Country"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2" id="phone"
                                   placeholder="phone"
                                   name="phone"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">

                            <input type="text" class="form-control form-control-lg mb-2 " id="email" placeholder="Email"
                                   name="email"
                                   style="font-size: 90%;border-width: 2px;border-color: var(--secondary)">

                            <input type="password" class="form-control form-control-lg mb-2" id="password"
                                   placeholder="password"
                                   name="password"
                                   style="font-size: 90%;border-width: 2px ;border-color: var(--secondary)">




                            <div class=" d-flex mb-2 mt-3 justify-content-between ">
                                <a href="" class="text-white">   <button  onclick="openPopup('signup-4') ; return false;" type="submit" class="btn btn-secondary " style="width: 159px;">
                                        Next</button></a>

                                <div class=" row d-flex p-0 ">
                                    <div class="d-flex col p-2">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="radio" checked="checked" name="radio" onclick="openPopup('signup-Trainer' ); return false;">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-flex col p-2 ">
                                        <div>
                                            <label class="custom-radio">
                                                <input type="" checked="checked" name="radio"    onclick="openPopup('signup-4' ); return false;">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>



                                </div>
                            </div>


                        </div>

                    </form>
                </div>
            </div>




        </div>


    </div>


</div>