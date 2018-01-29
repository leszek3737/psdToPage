<?php get_header(); ?>
<div class="header align-items-center d-flex">
    <div class="container d-flex flex-row">
        <a class="btn  align-items-center d-flex" aria-hidden="true" href="#" role="button"><i class="header--icon far fa-play-circle text-white"></i></a>
        <div class="pt-5">
            <h2 class="font-weight-light text-white">Let me show you a few things.</h2>
            <h6 class="lead text-primary">Click to play video </h6>
        </div>
    </div>
</div>
<div class="content">
    <div class="content__services bg-primary">
        <div class="services container">
            <div class="services__items row bg-primary">
                <div class="col-lg-4 col-md-6 col-12">
                    <h1 class="font-weight-bold text-white title-white text-uppercase">Our <br> Services.</h1>
                </div>
                <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="d-flex flex-row pb-5">
                        <div class=" col-4  text-white">
                            <div class="services__items--icon align-items-center justify-content-center d-flex">
                                <i class="fas fa-cloud"></i>
                            </div>
                        </div>
                        <div class="pl-5">
                            <h6 class="font-weight-bold text-white">Feature 1</h6>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row pb-5">
                        <div class=" col-4  text-white">
                            <div class="services__items--icon align-items-center justify-content-center d-flex">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="pl-5">
                            <h6 class="font-weight-bold text-white">Feature 1</h6>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-6 offset-lg-0 col-12 ">
                    <div class="d-flex flex-row pb-5">
                        <div class=" col-4  text-white">
                            <div class="services__items--icon align-items-center justify-content-center d-flex">
                                <i class="fas fa-utensils"></i>
                            </div>
                        </div>
                        <div class="pl-5">
                            <h6 class="font-weight-bold text-white">Feature 1</h6>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row pb-5">
                        <div class=" col-4  text-white">
                            <div class="services__items--icon align-items-center justify-content-center d-flex">
                                <i class="fas fa-gavel fa-rotate-270"></i>
                            </div>
                        </div>
                        <div class="pl-5">
                            <h6 class="font-weight-bold text-white">Feature 1</h6>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content__icons bg-white">
        <div class="icons container">
            <div class="d-flex flex-row justify-content-around align-items-center">
                <h4 class="icons--icon fas fa-lightbulb text-primary text-center"></h4>
                <h4 class="icons--icon fas fa-globe text-primary text-center"></h4>
                <h4 class="icons--icon fas fa-camera-retro text-primary text-center"></h4>
                <h4 class="icons--icon fas fa-wrench text-primary text-center"></h4>
                <h4 class="icons--icon fas fa-microphone text-primary text-center"></h4>
                <h4 class="icons--icon fas fa-money-bill-alt text-primary text-center"></h4>
            </div>
        </div>
    </div>
    <div class="content__icons2 bg-black">
        <div class="icons2 container d-flex flex-row justify-content-around align-items-center flex-wrap">
            <div class="d-flex flex-column text-white text-center m-4">
                <h1 class="icons2--icon fas fa-gift text-white text-center "></h1>
                <h1 class="font-weight-light">2009</h1>
                <h5 class="text-uppercase">Perspiciatis</h5>
            </div>
            <div class="d-flex flex-column text-white text-center m-4">
                <h1 class="icons2--icon far fa-comments text-white text-center "></h1>
                <h1 class="font-weight-light">13,562</h1>
                <h5 class="text-uppercase">Comments</h5>
            </div>
            <div class="d-flex flex-column text-white text-center m-4">
                <h1 class="icons2--icon fas fa-coffee text-white text-center "></h1>
                <h1 class="font-weight-light">8,710</h1>
                <h5 class="text-uppercase">Coffee cups</h5>
            </div>
            <div class="d-flex flex-column text-white text-center m-4">
                <h1 class="icons2--icon fas fa-trophy text-white text-center "></h1>
                <h1 class="font-weight-light">715</h1>
                <h5 class="text-uppercase">Awards</h5>
            </div>
        </div>
    </div>
    <div class="content__works bg-gray-200">
        <div class="container">
            <h1 class="font-weight-bold text-gray-700 title-black text-uppercase">Our <br> Works.</h1>
            <ul class="nav nav-pills mb-5 mt-5" id="pills-tab" role="tablist">
                <li class="nav-item mr-3">
                    <a class="border border-primary nav-link active btn-size" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="border border-primary nav-link btn-size" id="pills-website-tab" data-toggle="pill" href="#pills-website" role="tab" aria-controls="pills-website" aria-selected="false">Website</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="border border-primary nav-link btn-size" id="pills-branding-tab" data-toggle="pill" href="#pills-branding" role="tab" aria-controls="pills-branding" aria-selected="false">Branding</a>
                </li>
            </ul>
            <div class="tab-content pt-5" id="pills-tabContent">
                <?php get_template_part("archive", "all") ?>
                <?php get_template_part("archive", "1") ?>
                <?php get_template_part("archive", "2") ?>
            </div>
            <h4 class="text-primary fas fa-plus-circle"></h4>

        </div>
    </div>
    <div class="content__quotation">
        <div class="container">
            <div id="carouselExampleIndicators" class="quotation__carousel carousel slide pt-5" data-ride="carousel">
                <ol class="quotation__carousel__dots carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active dot"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="dot"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="dot"></li>
                </ol>
                <div class="quotation__carousel__items carousel-inner text-center d-flex justify-content-center">
                    <div class="quotation__carousel__items--item carousel-item active pt-5">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white">“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiamvoluptatem.”</h4>
                            <p class="quotation__carousel__items--item--image"></p>
                            <p class="font-weight-bold text-white">Jack Efron</p>
                        </div>
                    </div>
                    <div class="quotation__carousel__items--item carousel-item pt-5">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white">“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiamvoluptatem.”</h4>
                            <p class="quotation__carousel__items--item--image"></p>
                            <p class="font-weight-bold text-white">Jack Efron</p>
                        </div>
                    </div>
                    <div class="quotation__carousel__items--item carousel-item pt-5">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white">“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiamvoluptatem.”</h4>
                            <p class="quotation__carousel__items--item--image"></p>
                            <p class="font-weight-bold text-white">Jack Efron</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content__team bg-white">
        <div class="team container font-weight-bold">
            <h1 class="font-weight-bold text-gray-700 title-black text-uppercase">Our <br> Team.</h1>
            <div class="team__items row">
                <div class="col-12 col-md-6 col-xl-4  mb-2">
                    <div class="d-flex align-items-center pb-3">
                        <p class="team__items--img"></p>
                        <div class="d-flex row">
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <div class="team__items__content col-10 offset-2 pt-5">
                        <h5 class="text-primary">Michael Joe</h5>
                        <p class="text-14px text-gray-500">CEO &#38; Founder</p>
                        <p class="team__items__content--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="d-flex align-items-center pb-3">
                        <p class="team__items--img"></p>
                        <div class="d-flex row">
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <div class="team__items__content col-10 offset-2 pt-5">
                        <h5 class="text-primary">Jeremy Scott</h5>
                        <p class="text-14px text-gray-500">Designer</p>
                        <p class="team__items__content--text">Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim!</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="d-flex align-items-center pb-3">
                        <p class="team__items--img"></p>
                        <div class="d-flex row">
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="team__items--icon align-items-center justify-content-center d-flex text-white">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <div class="team__items__content col-10 offset-2 pt-5 pb-5">
                        <h5 class="text-primary">Justin West</h5>
                        <p class="text-14px text-gray-500">Manager</p>
                        <p class="team__items__content--text">Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                </div>
            </div>
            <h4 class="text-primary fas fa-plus-circle"></h4>
        </div>
    </div>
    <div class="content__subscribe bg-primary">
        <div class="subscribe container d-flex flex-row justify-content-center align-items-center flex-wrap">
            <h4 class="font-weight-light text-center text-white pr-5">Enter your e-mail here...</h4>
            <button class="btn btn-outline-primary bg-white">Subscribe</button>
        </div>
    </div>
    <div class="content__icons3 bg-black">
        <div class="icons3 container d-flex flex-row justify-content-center align-items-center flex-wrap">
            <div class=" d-flex justify-content-center align-items-center text-white m-3">
                <img src="./img/enva.png" class="img-responsive" alt="Image">
            </div>
            <div class=" d-flex justify-content-center align-items-center text-white m-3">
                <img src="./img/wp.png" class="img-responsive" alt="Image">
            </div>
            <div class=" d-flex justify-content-center align-items-center text-white m-3">
                <img src="./img/dribble_black.png" class="img-responsive" alt="Image">
            </div>
            <div class=" d-flex justify-content-center align-items-center text-white m-3">
                <img src="./img/enva.png" class="img-responsive" alt="Image">
            </div>
            <div class=" d-flex justify-content-center align-items-center text-white m-3">
                <img src="./img/wp.png" class="img-responsive" alt="Image">
            </div>
        </div>
    </div>
    <div class="content__contact bg-gray-200 pb-5">
        <div class="container pb-5">
            <h1 class="font-weight-bold text-gray-700 title-black text-uppercase">Contact<br> Us.</h1>
            <div class="row pb-5">
                <form class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 mt-5 mb-5 pt-2">
                            <p class="text-gray-500">123A Building, Road Street, Orlando District,<br> US +01 234 567 89 - +01 234 567 89 | contact@book.com</p>
                        </div>
                        <div class="col-11 p-0 ml-4 row">

                            <div class="form-group input-group col mb-5  p-0 border border-dark">
                                <div class="input-group-addon"><i class="fas fa-envelope"></i></div>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="EMAIL">
                            </div>
                            <div class="form-group input-group  col mb-5  ml-4 p-0 border border-dark">
                                <div class="input-group-addon"><i class="fas fa-user"></i></div>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="NAME">
                            </div>
                        </div>
                        <div class="form-group input-group col-11 mb-5 p-0 ml-4 border border-dark">
                            <div class="input-group-addon"><i class="fas fa-pencil-alt"></i></div>
                            <textarea class="form-control pr-5" id="exampleFormControlTextarea1" rows="2" placeholder="MASSAGE"></textarea>
                        </div>

                        <button type="submit" class="btn bg-white text-primary col-6 p-5 ml-4 mb-5"><i class="far fa-check-circle"></i>Submit</button>

                    </div>
                </form>
                <div class="col-12 col-lg-4">
                    <iframe class=" maps" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7009.916007699802!2d-81.38459245491791!3d28.540981989905017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s123A+Building%2C+Road+Street%2C+Orlando+District%2C+US!5e0!3m2!1spl!2spl!4v1514235654876" max-width="350" height="384" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
