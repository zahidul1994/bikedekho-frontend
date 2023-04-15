<?php                 
include "header.php";                 
?>
   <style>
        .news-tittle a {
            color: #24272c;
            cursor: pointer;
            text-decoration: none;
        }

        .news-descp {
            font-size: 16px;
            color: rgba(36, 39, 44, .7);
            height: 85px;
        }

        .n-user {
            background: #fafafa;
            border-radius: 100%;
            float: left;
            font-size: 20px;
            height: 36px;
            overflow: hidden;
            padding-top: 3px;
            text-align: center;
            text-transform: uppercase;
            vertical-align: middle;
            width: 36px;
        }

        .n-descp {
            color: rgba(36, 39, 44, .5);
            font-size: 12px;
            line-height: 16px;
            padding-left: 7px;
        }

        .n-name {
            color: #24272c;
            font-size: 13px;
            line-height: 1.38;
            margin-bottom: 1px;
        }

        .news-card {
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            border: 0;
            border-radius: 2px;
        }

        #news-content {
            margin-top: 20px
        }

        .news-page-header {
            font-size: 28px;
            color: #24272c;
            font-weight: 500;
            margin-top: 6px;
        }

        .news-search {
            margin: 20px 0;
        }

        .news-search .form-select {
            border: 1px solid rgba(36, 39, 44, .3);
            border-radius: 2px;
            box-shadow: none;
            font-size: 16px;
            height: 48px;
            padding: 0 30px 0 16px;
            text-shadow: 0 0 0 #24272c;
            width: 100%;
            line-height: 48px;
            color: rgba(36, 39, 44, .3);
        }

        .news-src-btn {
            background: #d02f2f;
            border: 0;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            padding-left: 100px;
            padding-right: 100px;
            text-align: center;
            font-weight: 700;
        }



        .sidebar-header {
            font-size: 20px;
            color: #24272c;
            font-weight: 500;
            padding-bottom: 16px;
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

        .sidebar-product .card-text {
            font-size: 16px;
            font-weight: 400;
            margin: 2px 0 0;
            color: #24272c;
            line-height: 24px;
        }

        .sidebar-product .card-text a {
            font-size: 14px;
            margin-top: -3px;
            display: block;
            color: #24272c;
        }

        .sidebar-brandname {
            display: block;
            font-size: 12px;
            text-align: center;
            padding: 0 5px;
            text-overflow: ellipsis;
            white-space: nowrap;

        }

        .w-33 {
            border-top: 1px solid rgba(36, 39, 44, .1);
            border-right: 1px solid rgba(36, 39, 44, .1);
            padding: 13px 5px;
        }

        .w-33:last-child {
            border-right: 0;
        }

        /* section box css */
        .section-box {
            background: #fff;
            padding: 18px 13px 13px 13px;
        }

        .box-header {
            padding-bottom: 15px;
            color: #24272c;
            font-weight: 500;
            line-height: 1.5;
            font-size: 23px;
        }

        .section-box-main {
            background: #fff;
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            margin-top: 34px;
        }

        .section-box {
            background: #fff;
            padding: 18px 13px 13px 13px;
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

        .section-box-footer {
            border-top: 1px solid rgba(36, 39, 44, .15);
            padding: 11px 20px;
        }

        .section-box-footer a {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #529ec1;
        }

        .section-box-footer {
            padding: 17px 24px;
        }
        /* section box css */
.rc-news-card{
    box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            border: 0;
            border-radius: 2px;
}
        .recommended-news-link a{
            color: #24272c;
            font-size: 17px;
            display: block;
            color: #24272c;
            font-weight: 700;
            height: 85px;
        }
    </style>


<section id="news-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="mb-0 news-page-header">Bike News India - All Latest Bike Information and Auto news India
                    </h2>

                    <div class="news-search">
                        <form class="d-flex" role="search">


                            <select class="form-select me-3" aria-label="Default select example">
                                <option selected>Select News Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn news-src-btn" type="submit">Search</button>
                        </form>
                    </div>

                    </h2>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before
                                            Getting Your
                                            First Bike...</a></h5>
                                    <p class="card-text news-descp">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex">
                                        <div class="n-user">
                                            N
                                        </div>
                                        <div class="n-descp">
                                            <span class="d-block n-name">User Name</span>
                                            Apr 9, 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
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
                        <div class="section-box pb-0">
                            <h2 class="sidebar-header mb-0">
                                Popular Bikes By Brands
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

                    <div class="section-box-main">
                        <div class="section-box">
                            <h2 class="sidebar-header mb-0">
                                Upcoming Bikes

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
        </div>
    </section>


    <section id="card-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-box-main">
                        <div class="section-box">
                            <h2 class="box-header mb-0">
                                Recommended news for you
                            </h2>

                            <div class="box-plain">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card rc-news-card">
                                            <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">

                                                <p class="mb-0 recommended-news-link">
                                                    <a href="#">
                                                        BREAKING: Royal Enfield 650 Twins Now Finally Roll On Tubeless Alloy Wheels

                                                    </a>
                                                   
                                                </p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card rc-news-card">
                                            <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">

                                                <p class="mb-0 recommended-news-link">
                                                    <a href="#">
                                                        BREAKING: Royal Enfield 650 Twins Now Finally Roll On Tubeless Alloy Wheels

                                                    </a>
                                                   
                                                </p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card rc-news-card">
                                            <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">

                                                <p class="mb-0 recommended-news-link">
                                                    <a href="#">
                                                        BREAKING: Royal Enfield 650 Twins Now Finally Roll On Tubeless Alloy Wheels

                                                    </a>
                                                   
                                                </p>
                                              
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
        </div>
    </section>



  <?php                 
include "footer.php";                 
?>



