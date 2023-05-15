<?php                 
include "header.php";                 
?>
  <style>
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

        .page-intro-header {
            color: #24272c;
            font-weight: 500;
            line-height: 1.5;
            font-size: 28px;
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
            padding: 19px 24px 21px;
        }

        .product-card {
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            border: 0;
            border-radius: 2px;
        }

        .lr-card {
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
        .rc-news-card {
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            border: 0;
            border-radius: 2px;
        }

        .recommended-news-link a {
            color: #24272c;
            font-size: 17px;
            display: block;
            color: #24272c;
            font-weight: 700;
            height: 85px;
        }

        .brand-rv-area svg {
            color: #ffa236;
        }

        .brand-rv-area span {
            color: rgba(36, 39, 44, .5);
            font-size: 12px;
            margin-bottom: 0;
            margin-left: 5px;
        }

        .brand-intro-text {
            font-size: 16px;
            line-height: 1.63;
            color: rgba(36, 39, 44, .7);
        }

        .brand-bike-header {
            padding: 30px 0;
        }

        .brand-bike-header h2 {
            color: #24272c;
            font-weight: 500;
            font-size: 23px;
        }

        .brand-bike-header select {
            border-radius: 2px;
        }

        .news-card {
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            border: 0;
            border-radius: 2px;
        }

        .sb-name a {
            color: #24272c;
            font-size: 18px;
            font-weight: 400;
        }

        .sb-price {
            font-size: 20px;
            font-weight: 500;
            line-height: normal;
            padding: 8px 0 8px 0;
            color: #24272c;
        }

        .sb-rev-area svg {
            font-size: 14px;
        }

        .sbs-spec {
            color: rgba(36, 39, 44, .5);
            padding: 16px 0 10px 0;
        }

        .sbs-spec li {
            display: inline-block;
            padding: 0 6px;
            font-size: 14px;
            color: rgba(36, 39, 44, .5);
        }

        .sbs-spec li a {
            font-size: 14px;
            color: #529ec1;
        }

        .sbs-spec li:first-child {
            padding-left: 0;
        }

        .sb-btn {
            display: inline-block;
            padding: 8px 50px;
            background-color: #d02f2f;
            color: #fff;
            border-radius: 2px;
            font-size: 14px;
            font-weight: 500;
        }

        .sb-btn:hover {
            background-color: #d02f2f;
            color: #fff;
        }

        .sb-cardbody {
            position: relative;
        }

        .sb-shortlist {
            height: 40px;
            width: 40px;
            line-height: 40px;
            border-radius: 50%;
            background-color: #e9e9e9;
            text-align: center;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        .sb-btn-outline {
            display: inline-block;
            padding: 7px 30px;
            background-color: #fff;
            color: #d02f2f;
            border-radius: 2px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #d02f2f;
        }

        .sb-btn-outline:hover {
            background-color: #fff;
            color: #d02f2f;
            border: 1px solid #d02f2f;
        }

        .view-all-bup {
            display: block;

            background: #fafafa;
            border: 1px solid rgba(36, 39, 44, .15);
            border-radius: 4px;
            color: #529ec1;
            font-size: 14px;
            font-weight: 500;
            padding: 12px 0;
            letter-spacing: 0;
            text-align: center;
            text-transform: capitalize;
            margin: 20px 0;
        }

        .bybodytype-header {
            color: #24272c;
            font-size: 20px;
            font-weight: 500;
            padding-bottom: 24px;
        }

        .bybodytype {
            background: #fff4df;
            box-shadow: 0 1px 2px 0 rgba(247, 93, 52, .3);
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

        .product-card {
            box-shadow: 0 1px 3px rgba(36, 39, 44, .15);
            border: 0;
            border-radius: 2px;
        }

        .comp-div {
            position: relative;
        }

        .vs {
            background: #24272c;
            border-radius: 50%;
            color: #fff;
            font-weight: 500;
            height: 36px;
            width: 36px;
            text-align: center;
            line-height: 36px;
            font-size: 14px;
            color: #fff;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            top: 52px;
        }

        .sb-short-spec td {
            color: rgba(36, 39, 44, .7);
            font-weight: 400;
            font-size: 14px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link {
            border: 0;
            color: #24272c;
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

        .news-tittle-sb {
            font-weight: 700 !important;
        }

        .news-subtittle-sb {
            display: block;
            color: rgba(36, 39, 44, .5);
            font-size: 14px;
            font-weight: 400;
        }

        .sb-author {
            color: rgba(36, 39, 44, .5);
            font-size: 14px;
            font-weight: 400;
            padding-top: 10px;
        }

        .lr-top {
            font-size: 14px;
            color: #24272c;
            display: block;
            font-weight: 400;
        }

        .lr-head a {
            color: #24272c;
            font-size: 16px;
            font-weight: 600;
        }

        .lr-text {
            color: rgba(36, 39, 44, .7);
            font-size: 14px;
            font-weight: 400;
        }

        .lr-text a {
            color: #529ec1;
        }

        .lr-user {
            color: #24272c;
            font-size: 13px;
            text-transform: capitalize;
            font-weight: 400;
            margin-top: 26px;
        }

        .lr-user small {
            color: rgba(36, 39, 44, .5);
            font-size: 11px;
            display: block;
        }

        .dis-model a {
            font-size: 14px;
            color: #24272c;
            font-weight: 400;
            margin-bottom: 20px;
            display: block;
        }

        .brand-page-sec-menu {
            margin-top: 30px;
            background: #fff;
            box-shadow: 0 2px 1px 0 rgba(36, 39, 44, .15);
        }

        .bp-menu li {
            display: inline-block;
            padding-right: 32px;
        }

        .bp-menu li a {
            font-size: 14px;
            padding: 19px 0 20px;
            font-weight: 500;
            text-transform: uppercase;
            color: rgba(36, 39, 44, .7);
            display: inline-block;
        }

        .bp-menu li a:hover {
            color: #d02f2f;
        }

        .sticky {
            position: sticky;
            top: 0;
            z-index: 99;
        }

        .accordion-button:not(.collapsed) {
            background-color: #fff;

        }

        .accordion-button::after {
            color: #212529;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0;
        }
    </style>



<section id="news-content sticky-top">

<div class="brand-page-sec-menu sticky">
    <div class="container">
        <ul class="ps-0 mb-0 bp-menu">
            <li><a href="#">BIKES</a></li>
            <li><a href="#"> SCOOTERS</a></li>
            <li><a href="#"> SHOWROOMS</a></li>
            <li><a href="#"> IMAGES</a></li>
            <li><a href="#"> NEWS</a></li>
        </ul>
    </div>
</div>
<div class="container">


    <div class="row">
        <div class="col-md-9">
            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="page-intro-header
                                                            mb-0">
                                    TVS Bikes
                                </h2>

                                <p class="mb-0
                                                            brand-rv-area">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi
                                                                bi-star-fill" viewBox="0
                                                                0 16
                                                                16">
                                        <path d="M3.612
                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                    0l2.184
                                                                    4.327
                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                    3.356.83
                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                    13.187l-4.389
                                                                    2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi
                                                                    bi-star-fill" viewBox="0
                                                                    0 16
                                                                    16">
                                        <path d="M3.612
                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                        0l2.184
                                                                        4.327
                                                                        4.898.696c.441.062.612.636.282.95l-3.522
                                                                        3.356.83
                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                        13.187l-4.389
                                                                        2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi
                                                                        bi-star-fill" viewBox="0
                                                                        0
                                                                        16
                                                                        16">
                                        <path d="M3.612
                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                            0l2.184
                                                                            4.327
                                                                            4.898.696c.441.062.612.636.282.95l-3.522
                                                                            3.356.83
                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                            13.187l-4.389
                                                                            2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi
                                                                            bi-star-fill" viewBox="0
                                                                            0
                                                                            16
                                                                            16">
                                        <path d="M3.612
                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                0l2.184
                                                                                4.327
                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                3.356.83
                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                13.187l-4.389
                                                                                2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi
                                                                                bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                                        <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z" />
                                    </svg>
                                    <span>
                                        Avg
                                        Rating
                                        for
                                        TVS
                                        Bikes
                                        and
                                        Scooters
                                        based
                                        on
                                        28794
                                        reviews
                                    </span>
                                </p>
                                <div class="box-plain">
                                    <p class="brand-intro-text
                                                                                    mb-0">
                                        TVS
                                        bikes
                                        price
                                        in
                                        India
                                        starts
                                        at
                                        Rs
                                        46,671
                                        for
                                        TVS
                                        XL100,
                                        which
                                        is
                                        the
                                        cheapest
                                        model.
                                        The
                                        most
                                        expensive
                                        TVS
                                        two
                                        wheeler
                                        is
                                        TVS
                                        Apache
                                        RR
                                        310
                                        priced
                                        at
                                        Rs
                                        2.72
                                        Lakh.
                                        The
                                        most
                                        popular
                                        models
                                        for
                                        TVS
                                        includes
                                        4
                                        Sports,
                                        7
                                        Scooters,
                                        1
                                    </p>
                                </div>
                            </div>
                            <div class="section-box-footer">
                                <a href="#">View
                                    All</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <div class="brand-bike-header">

                <div class="row">
                    <div class="col-md-8 align-self-center">
                        <h2 class="mb-0">
                            TVS
                            Bikes
                            Price
                            in
                            Bangladesh
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <div class="change-brand">
                            <form class="row
                                                                            g-3
                                                                            needs-validation" novalidate>
                                <div class="col-md-12">
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Change
                                            Brand</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please
                                        select
                                        a
                                        valid
                                        state.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card
                                                        mb-3 news-card">
                <div class="row
                                                            g-0">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="assets/images/apache-1606319b03f3f8ef.webp" class="img-fluid
                                                                        rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body
                                                                    sb-cardbody">
                            <div class="sb-shortlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi
                                                                            bi-heart" viewBox="0
                                                                            0
                                                                            16
                                                                            16">
                                    <path d="m8
                                                                                2.748-.717-.737C5.6.281
                                                                                2.514.878
                                                                                1.4
                                                                                3.053c-.523
                                                                                1.023-.641
                                                                                2.5.314
                                                                                4.385.92
                                                                                1.815
                                                                                2.834
                                                                                3.989
                                                                                6.286
                                                                                6.357
                                                                                3.452-2.368
                                                                                5.365-4.542
                                                                                6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                                                                10.4.28
                                                                                8.717
                                                                                2.01L8
                                                                                2.748zM8
                                                                                15C-7.333
                                                                                4.868
                                                                                3.279-3.04
                                                                                7.824
                                                                                1.143c.06.055.119.112.176.171a3.12
                                                                                3.12
                                                                                0
                                                                                0
                                                                                1
                                                                                .176-.17C12.72-3.042
                                                                                23.333
                                                                                4.867
                                                                                8
                                                                                15z" />
                                </svg>
                            </div>
                            <h4 class="mb-0
                                                                            sb-name"><a href="#">TVS
                                    Apache
                                    RTR
                                    160</a></h4>
                            <h3 class="mb-0
                                                                            sb-price">
                                Rs.
                                1.18
                                -
                                1.25
                                Lakh
                            </h3>
                            <p class="mb-0
                                                                            brand-rv-area
                                                                            sb-rev-area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                                    <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                                    <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                                    <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                                    <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                                    <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z"></path>
                                </svg>
                                <span>
                                    Based
                                    On
                                    168
                                    User
                                    Reviews
                                </span>
                            </p>
                            <ul class="ps-0
                                                                            mb-0
                                                                            sbs-spec">
                                <li>67
                                    kmpl</li>
                                ·
                                <li>124.8
                                    cc</li>
                                ·
                                <li>11.38
                                    PS</li>
                                ·
                                <li><a href="#">Price
                                        In
                                        Delhi</a></li>
                            </ul>
                            <a href="#" class="btn
                                                                            sb-btn">View
                                April
                                Offers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card
                                                            mb-3
                                                            news-card">
                <div class="row
                                                                g-0">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="assets/images/apache-1606319b03f3f8ef.webp" class="img-fluid
                                                                            rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body
                                                                        sb-cardbody">
                            <div class="sb-shortlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi
                                                                                bi-heart" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                                    <path d="m8
                                                                                    2.748-.717-.737C5.6.281
                                                                                    2.514.878
                                                                                    1.4
                                                                                    3.053c-.523
                                                                                    1.023-.641
                                                                                    2.5.314
                                                                                    4.385.92
                                                                                    1.815
                                                                                    2.834
                                                                                    3.989
                                                                                    6.286
                                                                                    6.357
                                                                                    3.452-2.368
                                                                                    5.365-4.542
                                                                                    6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                                                                    10.4.28
                                                                                    8.717
                                                                                    2.01L8
                                                                                    2.748zM8
                                                                                    15C-7.333
                                                                                    4.868
                                                                                    3.279-3.04
                                                                                    7.824
                                                                                    1.143c.06.055.119.112.176.171a3.12
                                                                                    3.12
                                                                                    0
                                                                                    0
                                                                                    1
                                                                                    .176-.17C12.72-3.042
                                                                                    23.333
                                                                                    4.867
                                                                                    8
                                                                                    15z" />
                                </svg>
                            </div>
                            <h4 class="mb-0
                                                                                sb-name"><a href="#">TVS
                                    Apache
                                    RTR
                                    160</a></h4>
                            <h3 class="mb-0
                                                                                sb-price">
                                Rs.
                                1.18
                                -
                                1.25
                                Lakh
                            </h3>
                            <p class="mb-0
                                                                                brand-rv-area
                                                                                sb-rev-area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                    bi-star-fill" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                                    <path d="M3.612
                                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                        0l2.184
                                                                                        4.327
                                                                                        4.898.696c.441.062.612.636.282.95l-3.522
                                                                                        3.356.83
                                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                                        13.187l-4.389
                                                                                        2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                    bi-star-fill" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                                    <path d="M3.612
                                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                        0l2.184
                                                                                        4.327
                                                                                        4.898.696c.441.062.612.636.282.95l-3.522
                                                                                        3.356.83
                                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                                        13.187l-4.389
                                                                                        2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                    bi-star-fill" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                                    <path d="M3.612
                                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                        0l2.184
                                                                                        4.327
                                                                                        4.898.696c.441.062.612.636.282.95l-3.522
                                                                                        3.356.83
                                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                                        13.187l-4.389
                                                                                        2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                    bi-star-fill" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                                    <path d="M3.612
                                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                        0l2.184
                                                                                        4.327
                                                                                        4.898.696c.441.062.612.636.282.95l-3.522
                                                                                        3.356.83
                                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                                        13.187l-4.389
                                                                                        2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                    bi-star-fill" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                                    <path d="M3.612
                                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                        0l2.184
                                                                                        4.327
                                                                                        4.898.696c.441.062.612.636.282.95l-3.522
                                                                                        3.356.83
                                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                                        13.187l-4.389
                                                                                        2.256z"></path>
                                </svg>
                                <span>
                                    Based
                                    On
                                    168
                                    User
                                    Reviews
                                </span>
                            </p>
                            <ul class="ps-0
                                                                                mb-0
                                                                                sbs-spec">
                                <li>67
                                    kmpl</li>
                                ·
                                <li>124.8
                                    cc</li>
                                ·
                                <li>11.38
                                    PS</li>
                                ·
                                <li><a href="#">Price
                                        In
                                        Delhi</a></li>
                            </ul>
                            <a href="#" class="btn
                                                                                sb-btn">View
                                April
                                Offers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card
                                                                mb-3
                                                                news-card">
                <div class="row
                                                                    g-0">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="assets/images/apache-1606319b03f3f8ef.webp" class="img-fluid
                                                                                rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body
                                                                            sb-cardbody">
                            <div class="sb-shortlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi
                                                                                    bi-heart" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                                    <path d="m8
                                                                                        2.748-.717-.737C5.6.281
                                                                                        2.514.878
                                                                                        1.4
                                                                                        3.053c-.523
                                                                                        1.023-.641
                                                                                        2.5.314
                                                                                        4.385.92
                                                                                        1.815
                                                                                        2.834
                                                                                        3.989
                                                                                        6.286
                                                                                        6.357
                                                                                        3.452-2.368
                                                                                        5.365-4.542
                                                                                        6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                                                                        10.4.28
                                                                                        8.717
                                                                                        2.01L8
                                                                                        2.748zM8
                                                                                        15C-7.333
                                                                                        4.868
                                                                                        3.279-3.04
                                                                                        7.824
                                                                                        1.143c.06.055.119.112.176.171a3.12
                                                                                        3.12
                                                                                        0
                                                                                        0
                                                                                        1
                                                                                        .176-.17C12.72-3.042
                                                                                        23.333
                                                                                        4.867
                                                                                        8
                                                                                        15z" />
                                </svg>
                            </div>
                            <h4 class="mb-0
                                                                                    sb-name"><a href="#">TVS
                                    Apache
                                    RTR
                                    160</a></h4>
                            <h3 class="mb-0
                                                                                    sb-price">
                                Rs.
                                1.18
                                -
                                1.25
                                Lakh
                            </h3>
                            <p class="mb-0
                                                                                    brand-rv-area
                                                                                    sb-rev-area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                        bi-star-fill" viewBox="0
                                                                                        0
                                                                                        16
                                                                                        16">
                                    <path d="M3.612
                                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                            0l2.184
                                                                                            4.327
                                                                                            4.898.696c.441.062.612.636.282.95l-3.522
                                                                                            3.356.83
                                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                                            13.187l-4.389
                                                                                            2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                        bi-star-fill" viewBox="0
                                                                                        0
                                                                                        16
                                                                                        16">
                                    <path d="M3.612
                                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                            0l2.184
                                                                                            4.327
                                                                                            4.898.696c.441.062.612.636.282.95l-3.522
                                                                                            3.356.83
                                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                                            13.187l-4.389
                                                                                            2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                        bi-star-fill" viewBox="0
                                                                                        0
                                                                                        16
                                                                                        16">
                                    <path d="M3.612
                                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                            0l2.184
                                                                                            4.327
                                                                                            4.898.696c.441.062.612.636.282.95l-3.522
                                                                                            3.356.83
                                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                                            13.187l-4.389
                                                                                            2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                        bi-star-fill" viewBox="0
                                                                                        0
                                                                                        16
                                                                                        16">
                                    <path d="M3.612
                                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                            0l2.184
                                                                                            4.327
                                                                                            4.898.696c.441.062.612.636.282.95l-3.522
                                                                                            3.356.83
                                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                                            13.187l-4.389
                                                                                            2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                        bi-star-fill" viewBox="0
                                                                                        0
                                                                                        16
                                                                                        16">
                                    <path d="M3.612
                                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                            0l2.184
                                                                                            4.327
                                                                                            4.898.696c.441.062.612.636.282.95l-3.522
                                                                                            3.356.83
                                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                                            13.187l-4.389
                                                                                            2.256z"></path>
                                </svg>
                                <span>
                                    Based
                                    On
                                    168
                                    User
                                    Reviews
                                </span>
                            </p>
                            <ul class="ps-0
                                                                                    mb-0
                                                                                    sbs-spec">
                                <li>67
                                    kmpl</li>
                                ·
                                <li>124.8
                                    cc</li>
                                ·
                                <li>11.38
                                    PS</li>
                                ·
                                <li><a href="#">Price
                                        In
                                        Delhi</a></li>
                            </ul>
                            <a href="#" class="btn
                                                                                    sb-btn">View
                                April
                                Offers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card
                                                                    mb-3
                                                                    news-card">
                <div class="row
                                                                        g-0">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="assets/images/apache-1606319b03f3f8ef.webp" class="img-fluid
                                                                                    rounded-start"
                                alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body
                                                                                sb-cardbody">
                            <div class="sb-shortlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi
                                                                                        bi-heart" viewBox="0
                                                                                        0
                                                                                        16
                                                                                        16">
                                    <path d="m8
                                                                                            2.748-.717-.737C5.6.281
                                                                                            2.514.878
                                                                                            1.4
                                                                                            3.053c-.523
                                                                                            1.023-.641
                                                                                            2.5.314
                                                                                            4.385.92
                                                                                            1.815
                                                                                            2.834
                                                                                            3.989
                                                                                            6.286
                                                                                            6.357
                                                                                            3.452-2.368
                                                                                            5.365-4.542
                                                                                            6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                                                                            10.4.28
                                                                                            8.717
                                                                                            2.01L8
                                                                                            2.748zM8
                                                                                            15C-7.333
                                                                                            4.868
                                                                                            3.279-3.04
                                                                                            7.824
                                                                                            1.143c.06.055.119.112.176.171a3.12
                                                                                            3.12
                                                                                            0
                                                                                            0
                                                                                            1
                                                                                            .176-.17C12.72-3.042
                                                                                            23.333
                                                                                            4.867
                                                                                            8
                                                                                            15z" />
                                </svg>
                            </div>
                            <h4 class="mb-0
                                                                                        sb-name"><a
                                    href="#">TVS
                                    Apache
                                    RTR
                                    160</a></h4>
                            <h3 class="mb-0
                                                                                        sb-price">
                                Rs.
                                1.18
                                -
                                1.25
                                Lakh
                            </h3>
                            <p class="mb-0
                                                                                        brand-rv-area
                                                                                        sb-rev-area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                    viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                    <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                    viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                    <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                    viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                    <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                    viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                    <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                    viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                    <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                </svg>
                                <span>
                                    Based
                                    On
                                    168
                                    User
                                    Reviews
                                </span>
                            </p>
                            <ul class="ps-0
                                                                                        mb-0
                                                                                        sbs-spec">
                                <li>67
                                    kmpl</li>
                                ·
                                <li>124.8
                                    cc</li>
                                ·
                                <li>11.38
                                    PS</li>
                                ·
                                <li><a href="#">Price
                                        In
                                        Delhi</a></li>
                            </ul>
                            <a href="#" class="btn
                                                                                        sb-btn">View
                                April
                                Offers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card
                                                                        mb-3
                                                                        news-card">
                <div class="row
                                                                            g-0">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="assets/images/apache-1606319b03f3f8ef.webp" class="img-fluid
                                                                                        rounded-start"
                                alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body
                                                                                    sb-cardbody">
                            <div class="sb-shortlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi
                                                                                            bi-heart" viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                    <path d="m8
                                                                                                2.748-.717-.737C5.6.281
                                                                                                2.514.878
                                                                                                1.4
                                                                                                3.053c-.523
                                                                                                1.023-.641
                                                                                                2.5.314
                                                                                                4.385.92
                                                                                                1.815
                                                                                                2.834
                                                                                                3.989
                                                                                                6.286
                                                                                                6.357
                                                                                                3.452-2.368
                                                                                                5.365-4.542
                                                                                                6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                                                                                10.4.28
                                                                                                8.717
                                                                                                2.01L8
                                                                                                2.748zM8
                                                                                                15C-7.333
                                                                                                4.868
                                                                                                3.279-3.04
                                                                                                7.824
                                                                                                1.143c.06.055.119.112.176.171a3.12
                                                                                                3.12
                                                                                                0
                                                                                                0
                                                                                                1
                                                                                                .176-.17C12.72-3.042
                                                                                                23.333
                                                                                                4.867
                                                                                                8
                                                                                                15z" />
                                </svg>
                            </div>
                            <h4 class="mb-0
                                                                                            sb-name"><a
                                    href="#">TVS
                                    Apache
                                    RTR
                                    160</a></h4>
                            <h3 class="mb-0
                                                                                            sb-price">
                                Rs.
                                1.18
                                -
                                1.25
                                Lakh
                            </h3>
                            <p class="mb-0
                                                                                            brand-rv-area
                                                                                            sb-rev-area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                                bi-star-fill"
                                    viewBox="0
                                                                                                0
                                                                                                16
                                                                                                16">
                                    <path d="M3.612
                                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                    0l2.184
                                                                                                    4.327
                                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                    3.356.83
                                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                                    13.187l-4.389
                                                                                                    2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                                bi-star-fill"
                                    viewBox="0
                                                                                                0
                                                                                                16
                                                                                                16">
                                    <path d="M3.612
                                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                    0l2.184
                                                                                                    4.327
                                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                    3.356.83
                                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                                    13.187l-4.389
                                                                                                    2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                                bi-star-fill"
                                    viewBox="0
                                                                                                0
                                                                                                16
                                                                                                16">
                                    <path d="M3.612
                                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                    0l2.184
                                                                                                    4.327
                                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                    3.356.83
                                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                                    13.187l-4.389
                                                                                                    2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                                bi-star-fill"
                                    viewBox="0
                                                                                                0
                                                                                                16
                                                                                                16">
                                    <path d="M3.612
                                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                    0l2.184
                                                                                                    4.327
                                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                    3.356.83
                                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                                    13.187l-4.389
                                                                                                    2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    fill="currentColor" class="bi
                                                                                                bi-star-fill"
                                    viewBox="0
                                                                                                0
                                                                                                16
                                                                                                16">
                                    <path d="M3.612
                                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                    0l2.184
                                                                                                    4.327
                                                                                                    4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                    3.356.83
                                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                                    13.187l-4.389
                                                                                                    2.256z">
                                    </path>
                                </svg>
                                <span>
                                    Based
                                    On
                                    168
                                    User
                                    Reviews
                                </span>
                            </p>
                            <ul class="ps-0
                                                                                            mb-0
                                                                                            sbs-spec">
                                <li>67
                                    kmpl</li>
                                ·
                                <li>124.8
                                    cc</li>
                                ·
                                <li>11.38
                                    PS</li>
                                ·
                                <li><a href="#">Price
                                        In
                                        Delhi</a></li>
                            </ul>
                            <a href="#" class="btn
                                                                                            sb-btn">View
                                April
                                Offers</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="brand-bike-header">

                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <h2 class="mb-0 mt-5">
                            Upcoming TVS Bikes
                        </h2>
                    </div>

                </div>

            </div>

            <div class="card
            mb-3
            news-card">
                <div class="row
                g-0">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="assets/images/apache-1606319b03f3f8ef.webp" class="img-fluid
                            rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body
                        sb-cardbody">
                            <div class="sb-shortlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi
                                bi-heart" viewBox="0
                                0
                                16
                                16">
                                    <path d="m8
                                    2.748-.717-.737C5.6.281
                                    2.514.878
                                    1.4
                                    3.053c-.523
                                    1.023-.641
                                    2.5.314
                                    4.385.92
                                    1.815
                                    2.834
                                    3.989
                                    6.286
                                    6.357
                                    3.452-2.368
                                    5.365-4.542
                                    6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                    10.4.28
                                    8.717
                                    2.01L8
                                    2.748zM8
                                    15C-7.333
                                    4.868
                                    3.279-3.04
                                    7.824
                                    1.143c.06.055.119.112.176.171a3.12
                                    3.12
                                    0
                                    0
                                    1
                                    .176-.17C12.72-3.042
                                    23.333
                                    4.867
                                    8
                                    15z" />
                                </svg>
                            </div>
                            <h4 class="mb-0
                                sb-name"><a href="#">TVS
                                    Apache
                                    RTR
                                    160</a></h4>
                            <h3 class="mb-0
                                sb-price">
                                Rs.
                                1.18
                                -
                                1.25
                                Lakh
                            </h3>

                            <ul class="ps-0
                                mb-0
                                sbs-spec">
                                <li>Expected Launch May, 2023</li>

                            </ul>
                            <a href="#" class="btn sb-btn-outline">Alert Me When Launched</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card
            mb-3
            news-card">
                <div class="row
                g-0">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="assets/images/apache-1606319b03f3f8ef.webp" class="img-fluid
                            rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body
                        sb-cardbody">
                            <div class="sb-shortlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi
                                bi-heart" viewBox="0
                                0
                                16
                                16">
                                    <path d="m8
                                    2.748-.717-.737C5.6.281
                                    2.514.878
                                    1.4
                                    3.053c-.523
                                    1.023-.641
                                    2.5.314
                                    4.385.92
                                    1.815
                                    2.834
                                    3.989
                                    6.286
                                    6.357
                                    3.452-2.368
                                    5.365-4.542
                                    6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                    10.4.28
                                    8.717
                                    2.01L8
                                    2.748zM8
                                    15C-7.333
                                    4.868
                                    3.279-3.04
                                    7.824
                                    1.143c.06.055.119.112.176.171a3.12
                                    3.12
                                    0
                                    0
                                    1
                                    .176-.17C12.72-3.042
                                    23.333
                                    4.867
                                    8
                                    15z" />
                                </svg>
                            </div>
                            <h4 class="mb-0
                                sb-name"><a href="#">TVS
                                    Apache
                                    RTR
                                    160</a></h4>
                            <h3 class="mb-0
                                sb-price">
                                Rs.
                                1.18
                                -
                                1.25
                                Lakh
                            </h3>

                            <ul class="ps-0
                                mb-0
                                sbs-spec">
                                <li>Expected Launch May, 2023</li>

                            </ul>
                            <a href="#" class="btn sb-btn-outline">Alert Me When Launched</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="view-all-bup">TVS Upcoming Bikes</a>
                </div>
            </div>

            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box bybodytype">
                                <h2 class="bybodytype-header mb-0">
                                    TVS Two Wheelers by Price
                                </h2>


                                <div class="box-plain">
                                    <div class="bybodytype-btn">
                                        <a href="#">TVS Bikes Under 70000</a>
                                        <a href="#">TVS Bikes Under 1 Lakh</a>
                                        <a href="#">TVS Bikes Under 2 Lakh</a>
                                        <a href="#">TVS Bikes Under 5 Lakh</a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="box-header mb-0">
                                    Popular Comparison of TVS Bikes
                                </h2>

                                <div class="box-plain">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card product-card">
                                                <div class="d-flex comp-div">
                                                    <span class="mb-0 vs">
                                                        VS
                                                    </span>
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                        <p class="px-3">
                                                            <a href="#">Yamaha R15M</a>
                                                            Price:575000 BDT
                                                        </p>
                                                    </div>
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                        <p class="px-3">
                                                            <a href="#">Yamaha R15M</a>
                                                            Price:575000 BDT
                                                        </p>
                                                    </div>

                                                </div>

                                                <div class="card-body">
                                                    <a href="#" class="btn product-btn">R15 vs R15M</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card product-card">
                                                <div class="d-flex comp-div">
                                                    <span class="mb-0 vs">
                                                        VS
                                                    </span>
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                        <p class="px-3">
                                                            <a href="#">Yamaha R15M</a>
                                                            Price:575000 BDT
                                                        </p>
                                                    </div>
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                        <p class="px-3">
                                                            <a href="#">Yamaha R15M</a>
                                                            Price:575000 BDT
                                                        </p>
                                                    </div>

                                                </div>

                                                <div class="card-body">
                                                    <a href="#" class="btn product-btn">R15 vs R15M</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="section-box-footer">
                                <a href="#">View All Bikes Comparisons</a>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="box-header mb-0">
                                    Key Highlights of TVS Bikes
                                </h2>

                                <div class="box-plain">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered sb-short-spec">

                                                <tbody>
                                                    <tr>
                                                        <td>Popular Models</td>
                                                        <td>TVS Raider, TVS Apache RTR 160, TVS NTORQ 125
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Most Expensive </td>
                                                        <td>TVS Apache RR 310 (Rs 2.72 Lakh)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Affordable Model </td>
                                                        <td>TVS XL100 (Rs 46,671)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Upcoming Models </td>
                                                        <td>TVS iQube Electric, TVS Fiero 125 , TVS Apache RTR
                                                            310
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fuel Type </td>
                                                        <td>Petrol, Electric</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Showrooms </td>
                                                        <td>75 in Delhi
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Service Centres </td>
                                                        <td>37 in Delhi
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box bybodytype">
                                <h2 class="bybodytype-header mb-0">
                                    TVS Two Wheelers by Bodytype
                                </h2>


                                <div class="box-plain">
                                    <div class="bybodytype-btn">
                                        <a href="#">TVS Sports Bikes</a>
                                        <a href="#">TVS Commuter Bikes</a>
                                        <a href="#">TVS Cruiser Bikes</a>
                                        <a href="#">TVS Moped Bikes</a>
                                        <a href="#">TVS Sports Naked Bikes</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="box-header mb-0">
                                    TVS Bikes Images
                                </h2>

                                <div class="box-plain">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card product-card">


                                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                    class="card-img-top" alt="...">
                                                <div class="d-flex bikeimage-box">
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                </div>
                                                <div class="card-body">

                                                    <p>
                                                        TVS Raider
                                                    </p>
                                                    <a href="#" class="btn product-btn">TVS Raider Images</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card product-card">


                                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                    class="card-img-top" alt="...">
                                                <div class="d-flex bikeimage-box">
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                </div>
                                                <div class="card-body">

                                                    <p>
                                                        TVS Raider
                                                    </p>
                                                    <a href="#" class="btn product-btn">TVS Raider Images</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card product-card">


                                                <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                    class="card-img-top" alt="...">
                                                <div class="d-flex bikeimage-box">
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="w-50">
                                                        <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                </div>
                                                <div class="card-body">

                                                    <p>
                                                        TVS Raider
                                                    </p>
                                                    <a href="#" class="btn product-btn">TVS Raider Images</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="section-box-footer">
                                <a href="#">View All TVS Images</a>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <section id="card-section">
           
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-box-main">
                                <div class="section-box">
                                    <h2 class="box-header mb-0">
                                        TVS Bike News & Reviews
                                    </h2>

                                    <div class="box-tab">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="rn-tab" data-bs-toggle="tab"
                                                    data-bs-target="#rn-tab-pane" type="button" role="tab"
                                                    aria-controls="rn-tab-pane" aria-selected="true">Recent
                                                    News</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="er-tab" data-bs-toggle="tab"
                                                    data-bs-target="#er-tab-pane" type="button" role="tab"
                                                    aria-controls="er-tab-pane" aria-selected="false">Expert
                                                    Reviews</button>
                                            </li>


                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="rn-tab-pane"
                                                role="tabpanel" aria-labelledby="rn-tab" tabindex="0">

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
                                            <div class="tab-pane fade" id="er-tab-pane" role="tabpanel"
                                                aria-labelledby="er-tab" tabindex="0">
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

                                <div class="section-box-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>


                        </div>
                    </div>
             
            </section>

            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="box-header mb-0">
                                    TVS Bike Videos
                                </h2>

                                <div class="box-plain">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card product-card">
                                                <iframe width="100%" height="315"
                                                    src="https://www.youtube.com/embed/j8cwD6nguIg"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">

                                                    <p>
                                                        <a href="#" class="news-tittle-sb"
                                                            style="font-weight: 400;">
                                                            Wicked @ 11 | Exploring Chennai ft. the
                                                            @tvsraider2340 | PowerDrift</a>
                                                    </p>


                                                    <small class="sb-author">
                                                        May 6, 2023 | 100 Views
                                                    </small>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card product-card">
                                                <iframe width="100%" height="315"
                                                    src="https://www.youtube.com/embed/j8cwD6nguIg"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                                <div class="card-body">

                                                    <p>
                                                        <a href="#" class="news-tittle-sb"
                                                            style="font-weight: 400;">
                                                            Wicked @ 11 | Exploring Chennai ft. the
                                                            @tvsraider2340 | PowerDrift</a>
                                                    </p>


                                                    <small class="sb-author">
                                                        May 6, 2023 | 100 Views
                                                    </small>

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

            </section>


            <section id="card-section">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="box-header mb-0">
                                    Latest Reviews on TVS Bike
                                </h2>

                                <div class="box-plain">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card lr-card">
                                                <div class="card-body">

                                                    <p class="mb-0 lr-top">
                                                        TVS NTORQ 125
                                                    </p>
                                                    <p class="mb-0
                                                                                        brand-rv-area
                                                                                        sb-rev-area">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>

                                                    </p>
                                                    <h3 class="mb-0 lr-head">
                                                        <a href="#">Racing design Very Nice</a>

                                                    </h3>
                                                    <p class="mb-0 lr-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Rerum recusandae accusantium cupiditate exercitationem
                                                        distinctio officiis? Iusto eos laboriosam odit
                                                        cupiditate! <a href="@">Read More</a>
                                                    </p>

                                                    <h5 class="mb-0 lr-user">
                                                        By User Name
                                                        <small>On: May 04, 2023 | 71 Views</small>
                                                    </h5>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card lr-card">
                                                <div class="card-body">

                                                    <p class="mb-0 lr-top">
                                                        TVS NTORQ 125
                                                    </p>
                                                    <p class="mb-0
                                                                                        brand-rv-area
                                                                                        sb-rev-area">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>

                                                    </p>
                                                    <h3 class="mb-0 lr-head">
                                                        <a href="#">Racing design Very Nice</a>

                                                    </h3>
                                                    <p class="mb-0 lr-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Rerum recusandae accusantium cupiditate exercitationem
                                                        distinctio officiis? Iusto eos laboriosam odit
                                                        cupiditate! <a href="@">Read More</a>
                                                    </p>

                                                    <h5 class="mb-0 lr-user">
                                                        By User Name
                                                        <small>On: May 04, 2023 | 71 Views</small>
                                                    </h5>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card lr-card">
                                                <div class="card-body">

                                                    <p class="mb-0 lr-top">
                                                        TVS NTORQ 125
                                                    </p>
                                                    <p class="mb-0
                                                                                        brand-rv-area
                                                                                        sb-rev-area">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                            height="13" fill="currentColor" class="bi
                                                                                            bi-star-fill"
                                                            viewBox="0
                                                                                            0
                                                                                            16
                                                                                            16">
                                                            <path d="M3.612
                                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                                0l2.184
                                                                                                4.327
                                                                                                4.898.696c.441.062.612.636.282.95l-3.522
                                                                                                3.356.83
                                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                                13.187l-4.389
                                                                                                2.256z"></path>
                                                        </svg>

                                                    </p>
                                                    <h3 class="mb-0 lr-head">
                                                        <a href="#">Racing design Very Nice</a>

                                                    </h3>
                                                    <p class="mb-0 lr-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Rerum recusandae accusantium cupiditate exercitationem
                                                        distinctio officiis? Iusto eos laboriosam odit
                                                        cupiditate! <a href="@">Read More</a>
                                                    </p>

                                                    <h5 class="mb-0 lr-user">
                                                        By User Name
                                                        <small>On: May 04, 2023 | 71 Views</small>
                                                    </h5>

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
             
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-box-main">
                                <div class="section-box">
                                    <h2 class="box-header mb-0">
                                        TVS Bikes Questions And Answers
                                    </h2>

                                    <div class="box-tab">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="faq-tab"
                                                    data-bs-toggle="tab" data-bs-target="#faq-tab-pane"
                                                    type="button" role="tab" aria-controls="faq-tab-pane"
                                                    aria-selected="true">FAQ</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="lq-tab" data-bs-toggle="tab"
                                                    data-bs-target="#lq-tab-pane" type="button" role="tab"
                                                    aria-controls="lq-tab-pane" aria-selected="false"
                                                    tabindex="-1">Latest Questions</button>
                                            </li>


                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="faq-tab-pane"
                                                role="tabpanel" aria-labelledby="faq-tab" tabindex="0">
                                                <div class="accordion" id="accordionExample">

                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne"
                                                                aria-expanded="false"
                                                                aria-controls="collapseOne">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
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
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo"
                                                                aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
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
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree"
                                                                aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree"
                                                            class="accordion-collapse collapse"
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
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFour"
                                                                aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour"
                                                            class="accordion-collapse collapse"
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
                                            <div class="tab-pane fade" id="lq-tab-pane" role="tabpanel"
                                                aria-labelledby="lq-tab" tabindex="0">
                                                <div class="accordion" id="accordionExample">

                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne1">
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne1"
                                                                aria-expanded="false"
                                                                aria-controls="collapseOne1">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne1"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne1"
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
                                                        <h2 class="accordion-header" id="headingTwo2">
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo2"
                                                                aria-expanded="false"
                                                                aria-controls="collapseTwo2">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo2"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo2"
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
                                                        <h2 class="accordion-header" id="headingThree3">
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree3"
                                                                aria-expanded="false"
                                                                aria-controls="collapseThree3">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree3"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree3"
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
                                                        <h2 class="accordion-header" id="headingFour4">
                                                            <button class="accordion-button collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFour4"
                                                                aria-expanded="false"
                                                                aria-controls="collapseFour4">
                                                                Qustion
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour4"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour4"
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-box-main">
                            <div class="section-box">
                                <h2 class="box-header mb-0">
                                    Discontinued TVS Bike Models
                                </h2>

                                <div class="box-plain">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="mb-0 dis-model">
                                                <a href="#">TVS Phoenix</a>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0 dis-model">
                                                <a href="#">TVS Phoenix</a>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0 dis-model">
                                                <a href="#">TVS Phoenix</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="mb-0 dis-model">
                                                <a href="#">TVS Phoenix</a>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0 dis-model">
                                                <a href="#">TVS Phoenix</a>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0 dis-model">
                                                <a href="#">TVS Phoenix</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </section>



        </div>

        <div class="col-md-3">
            <div class="section-box-main">
                <div class="section-box">
                    <h2 class="sidebar-header
                                                                                    mb-0">
                        Upcoming Bikes
                    </h2>
                    <div class="box-plain">
                        <div class="row">
                            <div class="col-md-12">
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
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
                    <a href="#">View
                        All</a>
                </div>
            </div>

            <div class="section-box-main">
                <div class="section-box">
                    <h2 class="sidebar-header
                                                                                    mb-0">
                        TVS Bikes Series
                    </h2>
                    <div class="box-plain">
                        <div class="row">
                            <div class="col-md-12">
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                mb-4
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card
                                                                                                sidebar-product">
                                    <div class="row
                                                                                                    g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/hero-motocorp-splendor628c6c03932f2.webp"
                                                class="img-fluid
                                                                                                            rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="#">Hero
                                                        Splendor
                                                        Plus</a>
                                                    Rs.72,076
                                                    -
                                                    74,396*
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
            <div class="section-box-main">
                <div class="section-box
                                                                                pb-0">
                    <h2 class="sidebar-header
                                                                                    mb-0">
                        Similar Brands
                    </h2>
                    <div class="box-plain">
                        <div class="d-flex">
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                            <div class="w-33">
                                <img src="assets/images/yamaha20200508193220.webp" alt="" class="w-100">
                                <p
                                    class="mb-0
                                                                                                sidebar-brandname">
                                    YAMAHA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-box-footer">
                    <a href="#">View
                        All</a>
                </div>
            </div>

        </div>
    </div>
</div>
</section>






  <?php                 
include "footer.php";                 
?>



