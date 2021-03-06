@extends('layouts.frontend')
@section('content')
<br>
<div class="contact3 py-5">
    <div class="row no-gutters">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card-shadow">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/2.jpg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-box ml-3 contact-form">
              <h1 class="font-weight-light mt-2">Contact Shamba-Market</h1>
              <form class="mt-4" method="POST">
               {{@csrf_field()}}
               @method('POST')
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <input class="form-control" type="text" name="name" placeholder="name">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <input class="form-control" type="email" name="email" placeholder="email address">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <input class="form-control" type="text" name="phone" placeholder="phone">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                     <select name="service" id="" class="form-control">
                         <option value="">--Select service---</option>
                         <option value="vendor">Vendor</option>
                         <option value="vendor">Customer</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <textarea class="form-control" rows="3" name="message" placeholder="message"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2"><span> SUBMIT</span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card mt-4 border-0 mb-4">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail pl-0">
                    <div class="mr-3 align-self-center">
                      <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Address</h6>
                      <p class="">CoICT Kijitonyama.
                        <br> Dar es Salaam, Tanzania</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail">
                    <div class="mr-3 align-self-center">
                      <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png">
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Phone</h6>
                      <p class="">+255 196 41811
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="card-body d-flex align-items-center c-detail">
                    <div class="mr-3 align-self-center">
                      <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
                    </div>
                    <div class="">
                      <h6 class="font-weight-medium">Email</h6>
                      <p class="">
                        info@shambamarket.com
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
@endsection
