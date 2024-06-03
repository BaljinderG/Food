
<!--Header-->
<?php include_once 'header.php'; ?>

 <!--Main-->
<main  class="main position-relative checkoutPage" >
<section class="h-100 h-custom" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-12">
                <form>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center ">
                        <a class="btn-link" href="categories.php"><button type="button" class="btn btn-secondary"><i
                            class="fa fa-arrow-left me-2"></i>Back to Categories</button></a>
                        </div>

                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-space-around align-items-center ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Delivery</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Pickup</label>
                            </div>
                        </div>

                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center ">
                            <div class="mx-2"><h4>Invoice No.</h4><p>1234567</p></div>
                            <div class="mx-2"><h4>Date</h4><p>12/34/56</p></div>
                        </div>

                    </div>
                    <div class="p-3">
                        
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Name">
                            </div>
                        

                    </div>
                    <div class="p-3">
                        
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Address">
                            </div>
                        

                    </div>
                    <div class="p-3">
                        
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Card No.</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your card no.">
                            </div>
                        

                    </div>
                    <div class="p-3">
                        
                            <div class="form-group">
                            <label for="exampleFormControlInput1">CVV</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your CVV">
                            </div>
                        

                    </div>
                    <div class="p-3">
                        
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Expiry Date</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="mm/yy">
                            </div>
                        

                    </div>
                    <div class="p-3">
                        
                    <div class=" d-flex flex-row justify-content-center my-cart-btns">
                          <a class="btn-link" href="cart.php"><button type="button" class="btn btn-secondary">Back to Cart</button></a>
                          <a class="btn-link" href="thankyou.php"><button type="button" class="btn btn-secondary">Pay Now</button></a>
                  </div>
                        

                    </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  

</main>
<!--Main Ends-->
<!--Footer-->
<?php include_once 'footer.php'; ?>