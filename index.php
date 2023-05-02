<?php                 
include "header.php";                 
?>
<style>
  .section-box-main{
    background: #fff;
    border-radius: 2px;
    box-shadow: 0 1px 3px rgba(36,39,44,.15);
    margin-top: 34px;
}
.section-box{
    background: #fff;
    padding: 19px 24px 21px;

}
.section-box-footer{
    border-top: 1px solid rgba(36,39,44,.15);
}
.section-box-footer a{
    display: block;
    font-size: 14px;
    font-weight: 500;
    color: #529ec1;
}
.box-header{
    padding-bottom: 15px;
    color: #24272c;
    font-weight: 500;
    line-height: 1.5;
    font-size: 23px;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link{
    border: 0;
    color: #24272c;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
    border-bottom: 3px solid #d02f2f;
    border-top: 0;
    border-right: 0;
    border-left: 0;
    color: #d02f2f;
}
.tab-content{
    padding-top: 24px;
}
.product-card{
    box-shadow: 0 1px 3px rgba(36,39,44,.15);
    border: 0;
    border-radius: 2px;
}
.product-card p a{
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 0;
    color: #24272c;
    display: block;
    margin-bottom: 5px;
}
.product-card p{
    color: #24272c;
    font-size: 18px;
    line-height: 24px;
}
.product-btn{
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
.product-btn:hover{
    background: #fff;
    border: 1px solid #d02f2f;
    color: #d02f2f;
}
.brand-logo{
    padding: 20px 0;
}
.brand-logo p{
    color: #24272c;
    text-align: center;
}
.section-box-footer{
    padding: 17px 24px;
}
.comp-div{
    position: relative;
}
.vs{
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

.news-tittle a{
    color: #24272c;
    font-size: 15px;
}
.news-descp{
    font-size: 16px;
    color: rgba(36,39,44,.5);
    height: 85px;
}
.n-user{
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

.n-descp{
    color: rgba(36,39,44,.5);
    font-size: 12px;
    line-height: 16px;
    padding-left: 7px;
}
.n-name{
    color: #24272c;
    font-size: 13px;
    line-height: 1.38;
    margin-bottom: 1px;
}
.news-card{
    box-shadow: 0 1px 3px rgba(36,39,44,.15);
    border: 0;
    border-radius: 2px;
}

/* common css end here */

/* banner css */
#banner{
    background-image: url(assets/images/April-Launches_Desktop_1686x548px.avif);
    background-repeat: no-repeat!important;
    background-size: cover!important;
padding: 50px 0;
background-position: center center;
position: relative;
z-index: 0;
}
.anchor-overlay{
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: transparent;
  opacity: 50%;
  left: 0;
  top: 0;
  z-index: 0;
}
.banner-srcbox{
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 70px 0 rgba(36,39,44,.3);
    padding: 19px 24px; 
    width: 345px;
    margin-left: 70px;
    position: relative;
    z-index: 9;
}
.bs-header{
    font-size: 30px;
    font-weight: 700;
    color: #24272c;
    padding-bottom: 18px;
}
.bs-main .nav-tabs{
border: 0;
}
.bs-main .nav-link{
    width: 50%;
    border: 1px solid rgba(36,39,44,.5);
    border-radius: 4px;
    font-weight: 500;
    line-height: 46px;
    margin-right: 8px;
    padding: 0;
    text-align: center;
    width: 47%;
}
.bs-main .nav-link:hover{
    border: 1px solid rgba(36,39,44,.5);
}
.bs-main .nav-link.active{
    border: 1px solid rgba(36,39,44,.5);
    background-color: #24272c;
    color: #fff;
    position: relative;
}
.bs-main .nav-link.active:after{
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #24272c;
    bottom: -10px;
    content: "";
    left: 50%;
    margin-left: -10px;
    position: absolute;
}
.bs-main .form-select{
border-radius: 0;
padding: 12px;
}
.bs-main option{
    border-radius: 0;
    }
    .bs-main .form-check-input{
        border: 1px solid #777;
    }
    .bs-main .form-check-input:checked {
        background-color: #d02f2f;
        border-color: #d02f2f;
    }
    .bs-main .form-check-input:focus{
        box-shadow: 0 0 0 0 !important;
        border: 0;
    }
    .banner-src-btn{
        padding: 9px;
        background: #d02f2f;
    border: 0;
    border-radius: 4px;
    color: #fff;
font-weight: 700;
    font-size: 22px;
    margin-bottom: 10px;
    text-align: center;
    width: 100%;
    }
    .banner-src-btn:hover{
        background: #d02f2f;
        color: #fff;
    }
    .advance-src{
        color: rgba(36,39,44,.7);
        font-weight: 500;
        margin-top: 15px;
        text-align: right;
        display: block;
    }
/* banner css */
</style>


  <section id="banner">
    <a href="#" class="anchor-overlay"></a>
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="banner-srcbox">
            <h2 class="mb-0 bs-header">
              Search the right bike
            </h2>

            <div class="bs-main">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">New Bike</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Used Bike</button>

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                  tabindex="0">


                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Default radio
                      </label>
                    </div>
                    <div class="col-md-12">
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>
                    <div class="col-md-12 mt-0">
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn banner-src-btn" type="submit">Search</button>
                    </div>
                  </form>





                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                  tabindex="0">

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Default radio
                      </label>
                    </div>
                    <div class="col-md-12">
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>
                    <div class="col-md-12 mt-0">
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn banner-src-btn" type="submit">Search</button>
                    </div>
                  </form>
                </div>

              </div>

              <p class="mt-3">
                <a href="#" class="advance-src">Advanced Search <svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg></a>
              </p>
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
                Bikes in Spotlight
              </h2>

              <div class="box-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="mp-tab" data-bs-toggle="tab" data-bs-target="#mp-tab-pane"
                      type="button" role="tab" aria-controls="mp-tab-pane" aria-selected="true">Most Popular</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sb-tab" data-bs-toggle="tab" data-bs-target="#sb-tab-pane"
                      type="button" role="tab" aria-controls="sb-tab-pane" aria-selected="false">Sports Bikes</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bmb-tab" data-bs-toggle="tab" data-bs-target="#bmb-tab-pane"
                      type="button" role="tab" aria-controls="bmb-tab-pane" aria-selected="false">Best Mileage
                      Bikes</button>
                  </li>

                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cb-tab" data-bs-toggle="tab" data-bs-target="#cb-tab-pane"
                      type="button" role="tab" aria-controls="cb-tab-pane" aria-selected="false">Cruiser Bikes</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cmb-tab" data-bs-toggle="tab" data-bs-target="#cmb-tab-pane"
                      type="button" role="tab" aria-controls="cmb-tab-pane" aria-selected="false">Commuter
                      Bikes</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="orb-tab" data-bs-toggle="tab" data-bs-target="#orb-tab-pane"
                      type="button" role="tab" aria-controls="orb-tab-pane" aria-selected="false">Off Road
                      Bikes</button>
                  </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="mp-tab-pane" role="tabpanel" aria-labelledby="mp-tab"
                    tabindex="0">

                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sb-tab-pane" role="tabpanel" aria-labelledby="sb-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="bmb-tab-pane" role="tabpanel" aria-labelledby="bmb-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="cb-tab-pane" role="tabpanel" aria-labelledby="cb-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="cmb-tab-pane" role="tabpanel" aria-labelledby="cmb-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="orb-tab-pane" role="tabpanel" aria-labelledby="orb-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
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
                Popular Brands
              </h2>

              <div class="box-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="bk-tab" data-bs-toggle="tab" data-bs-target="#bk-tab-pane"
                      type="button" role="tab" aria-controls="bk-tab-pane" aria-selected="true">Bike</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sc-tab" data-bs-toggle="tab" data-bs-target="#sc-tab-pane"
                      type="button" role="tab" aria-controls="sc-tab-pane" aria-selected="false">Scooter</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ec-tab" data-bs-toggle="tab" data-bs-target="#ec-tab-pane"
                      type="button" role="tab" aria-controls="ec-tab-pane" aria-selected="false">Electric</button>
                  </li>



                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="bk-tab-pane" role="tabpanel" aria-labelledby="bk-tab"
                    tabindex="0">

                    <div class="row">
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="tab-pane fade" id="sc-tab-pane" role="tabpanel" aria-labelledby="sc-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="tab-pane fade" id="ec-tab-pane" role="tabpanel" aria-labelledby="ec-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="card product-card brand-logo">
                          <a href=""> <img src="assets/images/yamaha20200508193220.webp" class="card-img-top" alt="...">

                            <p class="mb-0">
                              YAMAHA
                            </p>
                          </a>

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
                Electric Zone
              </h2>

              <div class="box-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="ebk-tab" data-bs-toggle="tab" data-bs-target="#ebk-tab-pane"
                      type="button" role="tab" aria-controls="ebk-tab-pane" aria-selected="true">Bikes</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="esc-tab" data-bs-toggle="tab" data-bs-target="#esc-tab-pane"
                      type="button" role="tab" aria-controls="esc-tab-pane" aria-selected="false">Scooters</button>
                  </li>


                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="ebk-tab-pane" role="tabpanel" aria-labelledby="ebk-tab"
                    tabindex="0">

                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="esc-tab-pane" role="tabpanel" aria-labelledby="esc-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card product-card">
                          <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                          <div class="card-body">

                            <p>
                              <a href="#">Yamaha R15M</a>
                              Price:575000 BDT
                            </p>
                            <a href="#" class="btn product-btn">View April Offers</a>
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
                Latest Bikes
              </h2>

              <div class="box-plain">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
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
                Online Booking Available
              </h2>

              <div class="box-plain">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
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
                Upcoming Bikes
              </h2>

              <div class="box-plain">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card product-card">
                      <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                      <div class="card-body">

                        <p>
                          <a href="#">Yamaha R15M</a>
                          Price:575000 BDT
                        </p>
                        <a href="#" class="btn product-btn">View April Offers</a>
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
                Popular Comparisons
              </h2>

              <div class="box-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="cbk-tab" data-bs-toggle="tab" data-bs-target="#cbk-tab-pane"
                      type="button" role="tab" aria-controls="cbk-tab-pane" aria-selected="true">Bikes</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="csc-tab" data-bs-toggle="tab" data-bs-target="#csc-tab-pane"
                      type="button" role="tab" aria-controls="csc-tab-pane" aria-selected="false">Scooters</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="cbk-tab-pane" role="tabpanel" aria-labelledby="cbk-tab"
                    tabindex="0">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="card product-card">
                          <div class="d-flex comp-div">
                            <span class="mb-0 vs">
                              VS
                            </span>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                              <p class="px-3">
                                <a href="#">Yamaha R15M</a>
                                Price:575000 BDT
                              </p>
                            </div>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
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
                      <div class="col-md-4">
                        <div class="card product-card">
                          <div class="d-flex comp-div">
                            <span class="mb-0 vs">
                              VS
                            </span>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                              <p class="px-3">
                                <a href="#">Yamaha R15M</a>
                                Price:575000 BDT
                              </p>
                            </div>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
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
                      <div class="col-md-4">
                        <div class="card product-card">
                          <div class="d-flex comp-div">
                            <span class="mb-0 vs">
                              VS
                            </span>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                              <p class="px-3">
                                <a href="#">Yamaha R15M</a>
                                Price:575000 BDT
                              </p>
                            </div>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
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
                  <div class="tab-pane fade" id="csc-tab-pane" role="tabpanel" aria-labelledby="csc-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card product-card">
                          <div class="d-flex comp-div">
                            <span class="mb-0 vs">
                              VS
                            </span>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                              <p class="px-3">
                                <a href="#">Yamaha R15M</a>
                                Price:575000 BDT
                              </p>
                            </div>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
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
                      <div class="col-md-4">
                        <div class="card product-card">
                          <div class="d-flex comp-div">
                            <span class="mb-0 vs">
                              VS
                            </span>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                              <p class="px-3">
                                <a href="#">Yamaha R15M</a>
                                Price:575000 BDT
                              </p>
                            </div>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
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
                      <div class="col-md-4">
                        <div class="card product-card">
                          <div class="d-flex comp-div">
                            <span class="mb-0 vs">
                              VS
                            </span>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
                              <p class="px-3">
                                <a href="#">Yamaha R15M</a>
                                Price:575000 BDT
                              </p>
                            </div>
                            <div class="w-50">
                              <img src="assets/images/yamaha-r15m61a5a6e9d8a08.webp" class="card-img-top" alt="...">
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
                Bike News
              </h2>

              <div class="box-plain">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card mb-3 news-card">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting Your
                                First Bike...</a></h5>
                            <p class="card-text news-descp">This is a wider card with supporting text below as a natural
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
                  <div class="col-md-6">
                    <div class="card mb-3 news-card">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting Your
                                First Bike...</a></h5>
                            <p class="card-text news-descp">This is a wider card with supporting text below as a natural
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
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card mb-3 news-card">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting Your
                                First Bike...</a></h5>
                            <p class="card-text news-descp">This is a wider card with supporting text below as a natural
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
                  <div class="col-md-6">
                    <div class="card mb-3 news-card">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting Your
                                First Bike...</a></h5>
                            <p class="card-text news-descp">This is a wider card with supporting text below as a natural
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
                Know More To Choose Better
              </h2>

              <div class="box-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="er-tab" data-bs-toggle="tab" data-bs-target="#er-tab-pane"
                      type="button" role="tab" aria-controls="er-tab-pane" aria-selected="true">Expert Reviews</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bcn-tab" data-bs-toggle="tab" data-bs-target="#bcn-tab-pane"
                      type="button" role="tab" aria-controls="bcn-tab-pane" aria-selected="false">Bike
                      Collections</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bv-tab" data-bs-toggle="tab" data-bs-target="#bv-tab-pane"
                      type="button" role="tab" aria-controls="bv-tab-pane" aria-selected="false">Bike Videos</button>
                  </li>



                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="er-tab-pane" role="tabpanel" aria-labelledby="er-tab"
                    tabindex="0">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                    </div>
                  </div>
                  <div class="tab-pane fade" id="bcn-tab-pane" role="tabpanel" aria-labelledby="bcn-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                    </div>
                  </div>
                  <div class="tab-pane fade" id="bv-tab-pane" role="tabpanel" aria-labelledby="bv-tab" tabindex="0">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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
                      <div class="col-md-6">
                        <div class="card mb-3 news-card">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="assets/images/Suzuki-Gixxer-155-sd.png" class="img-fluid rounded-start"
                                alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title news-tittle"><a href="#">5 Things To Keep In Mind Before Getting
                                    Your
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



