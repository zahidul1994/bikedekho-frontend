<?php                 
include "header.php";                 
?>
  <style>
      #header{
        z-index: 9;
        position: relative;
        background-color: #fff;
      }
        .section-box-main {
            background: #fff;
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            margin-top: 34px;
        }

        .section-box {
            background: #fff;
            padding: 19px 24px 21px;
        }

        .sidebar-product {
            border: 0;
            border-radius: 0;
        }

        .sidebar-product img {
            border-radius: 0 !important;
        }

        .sidebar-product .card-body {
            padding: 0 0 0 5px;
        }

        .sidebar-header {
            font-size: 20px;
            color: #24272c;
            font-weight: 500;
            padding-bottom: 16px;
        }

        .sidebar-product .card-text a {
            font-size: 14px;
            margin-top: -3px;
            display: block;
            color: #24272c;
        }

        .sidebar-product .card-text {
            font-size: 16px;
            font-weight: 400;
            margin: 2px 0 0;
            color: #24272c;
            line-height: 24px;
        }

        .section-box-footer {
            padding: 17px 24px;
            border-top: 1px solid rgba(36, 39, 44, .15);
        }

        .section-box-footer a {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #529ec1;
        }

        .w-33 {
            border-top: 1px solid rgba(36, 39, 44, .1);
            border-right: 1px solid rgba(36, 39, 44, .1);
            padding: 13px 5px;
        }

        .w-33:last-child {
            border-right: 0;
        }

        .sidebar-brandname {
            display: block;
            font-size: 12px;
            text-align: center;
            padding: 0 5px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .page-intro-header {
            color: #24272c;
            font-weight: 500;
            line-height: 1.5;
            font-size: 28px;
        }

        .brand-intro-text {
            font-size: 16px;
            line-height: 1.63;
            color: rgba(36, 39, 44, .7);
        }

        .box-header {
            color: #24272c;
            font-weight: 500;
            line-height: 1.5;
            font-size: 23px;
        }

        .product-card {
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            border: 0;
            border-radius: 2px;
        }

        .product-card p {
            color: #24272c;
            font-size: 18px;
            line-height: 24px;
        }

        .product-card p a {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 0;
            color: #24272c;
            display: block;
            margin-bottom: 5px;
        }

        .product-btn {
            background: #fff;
            border: 1px solid #d02f2f;
            border-radius: 2px;
            color: #d02f2f;
            font-size: 12px;
            font-weight: 500;
            padding: 10px 5px;
            text-align: center;
            transition: all .4s ease;
            display: block;
        }

        .product-card p small {
            font-size: 10px;
            line-height: 10px;
            margin-top: 5px;
            min-height: 10px;
            color: rgba(36, 39, 44, .5);
        }

        .up-small-dates {
            font-size: 10px;
            line-height: 10px;
            margin-top: 5px;
            min-height: 10px;
            color: rgba(36, 39, 44, .5);
        }

        .bybodytype {
            background: #fff4df;
            box-shadow: 0 1px 2px 0 rgba(247, 93, 52, .3);
        }

        .bybodytype-header {
            color: #24272c;
            font-size: 20px;
            font-weight: 500;
            padding-bottom: 24px;
        }

        .bybodytype-btn a {
            border-radius: 4px;
            display: inline-block;
            background: #fff;
            border: 1px solid rgba(247, 93, 52, .3);
            border-radius: 2px;
            box-shadow: 0 2px 4px 0 hsla(35, 98%, 83%, .5);
            color: #24272c;
            font-size: 14px;
            font-weight: 500;
            line-height: 1;
            margin: 0 8px 8px 0;
            padding: 12px 7px;
            text-align: center;
        }

        .box-header {
            padding-bottom: 15px;
            color: #24272c;
            font-weight: 500;
            line-height: 1.5;
            font-size: 23px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            border-bottom: 3px solid #d02f2f;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            color: #d02f2f;
        }

        .tab-content {
            padding-top: 24px;
        }

        .accordion-button:not(.collapsed) {
            background-color: #fff;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0;
        }

        .news-tittle-sb {
            font-weight: 700 !important;
        }

        .news-subtittle-sb {
            font-weight: 700 !important;
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 0;
            color: #24272c;
            display: block;
            margin-bottom: 5px;
            padding-top: 8px;
        }

        .sb-author {
            color: rgba(36, 39, 44, .5);
            font-size: 14px;
            font-weight: 400;
            padding-top: 10px;
        }

        .story-card {
            border-radius: 20px;
            position: relative;
            margin-bottom: 10px;
        }

        .story-card::after {
            position: absolute;
            background: linear-gradient(180deg, #030214 53.45%, rgba(3, 2, 20, 0) 100%);
            border-radius: 8px;
            transform: rotate(-180deg);
            content: "";
            bottom: 0;
            left: 0;
            right: 0;
            height: 175px;
        }

        .story-card img {
            border-radius: 20px;
        }

        .story-card-text {
            padding: 0px 15px 10px 15px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        .story-card-text h4 {
            font-weight: 600;
            font-size: 15px;
            color: #fff;
            line-height: 1.3;
        }

        .story-card-text p {
            font-size: 13px;
            font-weight: 400;
            color: #fff;
        }

        #upc-banner {
            background-image: url(./assets/images/upc-bike-banner.jpg);
            background-position: 50% 5% !important;
            background-size: cover !important;
            padding: 150px 0;
            position: relative;
            z-index: 0;
        }
        .upc-banner-rds{
            height: 600px;
    left: -40px;
    top: -186px;
    width: 600px;
    background: #ef6728;
    border-radius: 50%;
    mix-blend-mode: multiply;
    position: absolute;
    z-index: -1;
        }

        .upsb-header {
            font-size: 48px;
            line-height: 60px;
            margin-top: 25px;
            color: #fff;
            font-weight: 500;
        }
        .up-banner-form{
            background-color: #fff;
            border-radius: 5px;
            margin-top: 30px;
        }
        .up-banner-form .col-md-4{
            margin-top: 0;
        }
        .up-banner-form select{
            height: 72px;
            border: 0;
        }
        .up-banner-btn{
            height: 48px;
            width: 100%;
            background: #d02f2f;
    border: 0;
    border-radius: 4px;
    color: #fff;
    font-size: 17px;
    text-align: center;
        }
        .up-banner-btn:hover{
            background: #d02f2f;
            color: #fff;
        }
      
    </style>





<section id="upc-banner">
        <div class="upc-banner-rds"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="upsb-header">
                        Buy now or wait for your <br> right bikes?
                    </h2>

                    <form class="row g-3 needs-validation up-banner-form" novalidate>
                    
                 
                        <div class="col-md-4 align-self-center">
                            
                            <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-4 align-self-center">
                          
                            <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
               
                        <div class="col-md-4 align-self-center">
                            <button class="btn up-banner-btn" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>

    <section id="news-content">

        <div class="container">
            <div class="row">
                <div class="col-md-9">


                    <section id="card-section">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-box-main">
                                    <div class="section-box">
                                        <h2 class="page-intro-header mb-0">
                                            Upcoming Bikes in India
                                        </h2>


                                        <div class="box-plain">
                                            <p class="brand-intro-text mb-0 mt-2">
                                                If you're wondering, what are the upcoming bikes in India, Bikedekho is
                                                the right place for you. We have a list of all the
                                                upcoming bikes with their expected price and tentative launch dates in
                                                2023-24. 15 bikes are likely to be launched and this

                                            </p>
                                        </div>
                                    </div>
                                    <div class="section-box-footer">
                                        <a href="#"> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>


                    <section id="card-section">

                        <h2 class="box-header mb-0 mt-4">
                            Bangladeshi Upcoming Bikes
                        </h2>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <section id="card-section">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-box-main">
                                        <div class="section-box bybodytype">
                                            <h2 class="bybodytype-header mb-0">
                                                Upcoming Bikes by Budget
                                            </h2>


                                            <div class="box-plain">
                                                <div class="bybodytype-btn">
                                                    <a href="#">Upcoming Bikes Under 1 Lakh</a>
                                                    <a href="#">Upcoming Bikes Under 1.5 Lakh</a>
                                                    <a href="#">Upcoming Bikes Under 2 Lakh</a>
                                                    <a href="#">Upcoming Bikes Under 5 Lakh</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </section>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <section id="card-section">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-box-main">
                                        <div class="section-box bybodytype">
                                            <h2 class="bybodytype-header mb-0">
                                                Upcoming Bikes by Engine Displacement

                                            </h2>


                                            <div class="box-plain">
                                                <div class="bybodytype-btn">
                                                    <a href="#">Bikes Under 100cc</a>
                                                    <a href="#">Bikes Under 125cc</a>
                                                    <a href="#">Bikes Under 150cc</a>
                                                    <a href="#">Bikes Under 200cc</a>
                                                    <a href="#">Bikes Under 250cc</a>
                                                    <a href="#">Bikes Under 500cc</a>
                                                    <a href="#">Bikes Under 1000cc</a>
                                                    <a href="#">Bikes Above 1000cc</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </section>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <p>
                                            <a href="#">Yamaha R15M</a>
                                            Price:575000 BDT <small>Estimated Price</small>
                                        </p>
                                        <h5 class="up-small-dates">
                                            Jul, 2023
                                        </h5>
                                        <a href="#" class="btn product-btn">Alert Me When Launched</a>
                                    </div>
                                </div>
                            </div>



                        </div>




                    </section>



                </div>
                <div class="col-md-3">

                    <div class="section-box-main">
                        <div class="section-box pb-0">
                            <h2 class="sidebar-header mb-0">
                                Upcoming bikes By Brand

                            </h2>

                            <div class="box-plain">
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="section-box-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                    <div class="section-box-main">
                        <div class="section-box pb-0">
                            <h2 class="sidebar-header mb-0">
                                Popular Bikes by Brands

                            </h2>

                            <div class="box-plain">
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            YAMAHA
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="section-box-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>

                    <div class="section-box-main">
                        <div class="section-box pb-0">
                            <h2 class="sidebar-header mb-0">
                                Popular Upcoming bikes by
                                Body Type

                            </h2>

                            <div class="box-plain">
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                    <div class="w-33">
                                        <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                        <p class="mb-0 sidebar-brandname">
                                            Sports
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="section-box-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>

                    <div class="section-box-main">
                        <div class="section-box">
                            <h2 class="sidebar-header mb-0">
                                Best Bikes
                            </h2>

                            <div class="box-plain">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-box-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>

                    <div class="section-box-main">
                        <div class="section-box">
                            <h2 class="sidebar-header mb-0">
                                Latest Bikes
                            </h2>

                            <div class="box-plain">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card sidebar-product">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <p class="card-text">

                                                            <a href="#">Hero Splendor Plus</a>
                                                            Rs.72,076 - 74,396*
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-box-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>

                </div>
            </div>


            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="box-header mb-0">
                                    FAQs on Upcoming Bikes
                                </h2>

                                <div class="box-tab">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="faq-tab" data-bs-toggle="tab"
                                                data-bs-target="#faq-tab-pane" type="button" role="tab"
                                                aria-controls="faq-tab-pane" aria-selected="true">FAQ</button>
                                        </li>



                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="faq-tab-pane" role="tabpanel"
                                            aria-labelledby="faq-tab" tabindex="0">
                                            <div class="accordion" id="accordionExample">

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="false" aria-controls="collapseOne">
                                                            Qustion
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p class="mb-0">
                                                                Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Molestias aliquam neque
                                                                quidem! Accusamus numquam recusandae
                                                                quisquam assumenda necessitatibus dolorum
                                                                dicta.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Qustion
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p class="mb-0">
                                                                Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Molestias aliquam neque
                                                                quidem! Accusamus numquam recusandae
                                                                quisquam assumenda necessitatibus dolorum
                                                                dicta.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Qustion
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p class="mb-0">
                                                                Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Molestias aliquam neque
                                                                quidem! Accusamus numquam recusandae
                                                                quisquam assumenda necessitatibus dolorum
                                                                dicta.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">
                                                            Qustion
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p class="mb-0">
                                                                Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Molestias aliquam neque
                                                                quidem! Accusamus numquam recusandae
                                                                quisquam assumenda necessitatibus dolorum
                                                                dicta.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </section>

            <section id="card-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-box-main">
                                <div class="section-box">
                                    <h2 class="box-header mb-0">
                                        Upcoming Bikes News
                                    </h2>

                                    <div class="box-plain">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="card product-card">
                                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <p>
                                                            <a href="#" class="news-tittle-sb">All The
                                                                Two-wheelers That Launched In India This
                                                                Month </a>
                                                        </p>
                                                        <h5 class="news-subtittle-sb">
                                                            With more than 10 two-wheelers making their
                                                            way to the Indian market
                                                        </h5>

                                                        <small class="sb-author">
                                                            May 6, 2023 | By Team Bikedekho
                                                        </small>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card product-card">
                                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <p>
                                                            <a href="#" class="news-tittle-sb">All The
                                                                Two-wheelers That Launched In India This
                                                                Month </a>
                                                        </p>
                                                        <h5 class="news-subtittle-sb">
                                                            With more than 10 two-wheelers making their
                                                            way to the Indian market
                                                        </h5>

                                                        <small class="sb-author">
                                                            May 6, 2023 | By Team Bikedekho
                                                        </small>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card product-card">
                                                    <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">

                                                        <p>
                                                            <a href="#" class="news-tittle-sb">All The
                                                                Two-wheelers That Launched In India This
                                                                Month </a>
                                                        </p>
                                                        <h5 class="news-subtittle-sb">
                                                            With more than 10 two-wheelers making their
                                                            way to the Indian market
                                                        </h5>

                                                        <small class="sb-author">
                                                            May 6, 2023 | By Team Bikedekho
                                                        </small>

                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="card-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-box-main">
                                <div class="section-box">
                                    <h2 class="box-header mb-0">
                                        Web Stories
                                    </h2>

                                    <div class="box-plain">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card product-card story-card">
                                                    <a href="#">
                                                        <img src="assets/images/story-img.jpg" alt="" class="w-100">
                                                        <div class="story-card-text">
                                                            <h4>
                                                                In 7 Pictures: Check Out The Bajaj Avenger 220 Street
                                                            </h4>
                                                            <p>
                                                                BikeDekho | May 13,2023
                                                            </p>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card product-card story-card">
                                                    <a href="#">
                                                        <img src="assets/images/story-img.jpg" alt="" class="w-100">
                                                        <div class="story-card-text">
                                                            <h4>
                                                                In 7 Pictures: Check Out The Bajaj Avenger 220 Street
                                                            </h4>
                                                            <p>
                                                                BikeDekho | May 13,2023
                                                            </p>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card product-card story-card">
                                                    <a href="#">
                                                        <img src="assets/images/story-img.jpg" alt="" class="w-100">
                                                        <div class="story-card-text">
                                                            <h4>
                                                                In 7 Pictures: Check Out The Bajaj Avenger 220 Street
                                                            </h4>
                                                            <p>
                                                                BikeDekho | May 13,2023
                                                            </p>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card product-card story-card">
                                                    <a href="#">
                                                        <img src="assets/images/story-img.jpg" alt="" class="w-100">
                                                        <div class="story-card-text">
                                                            <h4>
                                                                In 7 Pictures: Check Out The Bajaj Avenger 220 Street
                                                            </h4>
                                                            <p>
                                                                BikeDekho | May 13,2023
                                                            </p>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card product-card story-card">
                                                    <a href="#">
                                                        <img src="assets/images/story-img.jpg" alt="" class="w-100">
                                                        <div class="story-card-text">
                                                            <h4>
                                                                In 7 Pictures: Check Out The Bajaj Avenger 220 Street
                                                            </h4>
                                                            <p>
                                                                BikeDekho | May 13,2023
                                                            </p>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card product-card story-card">
                                                    <a href="#">
                                                        <img src="assets/images/story-img.jpg" alt="" class="w-100">
                                                        <div class="story-card-text">
                                                            <h4>
                                                                In 7 Pictures: Check Out The Bajaj Avenger 220 Street
                                                            </h4>
                                                            <p>
                                                                BikeDekho | May 13,2023
                                                            </p>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="section-box-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </section>









        </div>
    </section>




  <?php                 
include "footer.php";                 
?>



