@extends('layouts.student_app')
@section('student_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-danger text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span> School Name </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Registered<i class="mdi mdi-file-multiple mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">20</h2>
              <button class="btn btn-danger btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">Buy Now!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Forms Bought<i class="mdi mdi-account-check mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">20</h2>
              <button class="btn btn-info btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Payable<i class="mdi mdi-receipt mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">40,000</h2>
              <button class="btn btn-succees btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-gradient-warning card-img-holder text-white">
              <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Paid Invoice<i class="mdi mdi-account mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">None</h2>
                <button class="btn btn-warning btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
              </div>
            </div>
          </div>
      </div>
    </div>

      <div class="content-wrapper" style="padding-top: 0px; padding-bottom: 0px;">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-danger text-white mr-2">
              <i class="fa fa-book"></i>
            </span> Form Purchases </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Contact <i class="fa fa-address-book-o"></i>
              </li>
            </ul>
          </nav>
        </div>
      </div>

        
        <div class="card" style="border-radius: 0px; border: none; height: 310px;">
          <div class="card" style="border-radius: 0px; width: 99%; margin: 5px auto; height: 300px;">

              <div class="table-responsive" style="border: none;">
                <table id="schoolstable" class="table table-bordered" style="border: none; width:99%; margin: 0 auto;">
                  <thead>
                    <tr>
                      <th style="border: none;">#</th>
                      <th style="border: none;">School Name</th>
                      <th style="border: none;">State</th>
                      <th style="border: none;">Period From</th>
                      <th style="border: none;">Period To</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">1</td>
                      <td style="border: none;">Federal University of Technology</td>
                      <td style="border: none;">Minna, Niger State</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">2</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr style="border: 1px solid gray;">
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                  </tbody>
                </table>
              </div>            
          </div>
        </div>
@endsection
