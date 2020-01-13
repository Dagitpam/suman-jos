{{-- @extends('layouts.student_app')


@section('student_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-danger text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span> Dashboard </h3>
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
              <h4 class="font-weight-normal mb-3">Admission Form<i class="mdi mdi-file-multiple mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">N 3,500</h2>
              <a href="#"><button class="btn btn-danger btn-sm text-white">Buy Now!</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Admission Status<i class="mdi mdi-account-check mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">45,6334</h2>
              <button class="btn btn-info btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Invoices<i class="mdi mdi-receipt mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">5</h2>
              <button class="btn btn-succees btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-gradient-warning card-img-holder text-white">
              <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Account<i class="mdi mdi-account mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">N 3,500</h2>
                <button class="btn btn-warning btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
              </div>
            </div>
          </div>
      </div>
    </div>

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-danger text-white mr-2">
                <i class="fa fa-book"></i>
              </span> Registered Schools </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="card" style="border-radius: 0px; border: none; height: 310px;">
          <div class="card" style="border-radius: 0px; width: 99%; margin: 5px auto; height: 300px;">

              <div class="table-responsive" style="border: none;">
                <table id="schoolstable" class="table table-bordered" style="border: none;">
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
                    <tr>
                      <td style="border: none;">1</td>
                      <td style="border: none;">Federal University of Technology</td>
                      <td style="border: none;">Minna, Niger State</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">2</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
                      <td style="border: none;">3</td>
                      <td style="border: none;">Anna</td>
                      <td style="border: none;">Pitt</td>
                      <td style="border: none;">35</td>
                      <td style="border: none;">New York</td>
                    </tr>
                    <tr>
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

  <script>
    var request = new XMLHttpRequest()

    request.open('GET', 'http://127.0.0.1:8000/api/register/ABCDEF/su0001/12/uhweka@gmail.com/completed', true)
    request.onload = function() {
      // Begin accessing JSON data here
      var data = JSON.parse(this.response)

      if (request.status >= 200 && request.status < 400) {
        console.log(data)
      } else {
        console.log('error')
      }
    }

    request.send()
  </script>


@endsection --}}

@extends('layouts.app')

@section('content')



<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2" style="background-color:lavender;">
      <br>
      <p style="border:1px solid #000; padding: 10px;">Dashboard</p>
      <p style="border:1px solid #000; padding: 10px;">Add School</p>
      <p style="border:1px solid #000; padding: 10px;">View invoice</p>
      <p style="border:1px solid #000; padding: 10px;">Pending payment</p>
      <p style="border:1px solid #000; padding: 10px;">Registered schools</p>

    </div>
    <div class="col-sm-10" style="background-color:lavenderblush;">
    
      <div class="container">
        <p><h3><i class="fa fa-home" style="color: #fff; background-color: black; border-radius: 4px;"></i>Dashboard</h3></p>
      </div>
    
      <div class="container">
        <div class="card-deck">
          <div class="card card-back">
            <div class="card-body">
              <h5 class="card-title" style="color: #fff;">Total Payable</h5>
              <p style="color: #fff; font-size: 25px;">N350,000</p>
              <button class="btn btn-info btn-sm text-white">View all</button>
            </div>
          </div>
          <div class="card card-back">
            <div class="card-body">
              <h5 class="card-title" style="color: #fff;">No. Registered Schools</h5>
              <p style="color: #fff; font-size: 25px;">20</p>
              <button onclick="show('addschool')" class="btn btn-sm btn-info text-white">Add School</button>
            </div>
          </div>
          <div class="card card-back">
            <div class="card-body">
              <h5 class="card-title" style="color: #fff;">Paid invoice</h5>
              <p style="color: #fff; font-size: 25px;">N200,000</p>
              <button class="btn btn-sm btn-info text-white">View Invoices</button>
            </div>
          </div>
        </div>
      </div>

    
      <br>

<div class="container" id="main-content">
</div>


<div id="history">
  <div class="container">
    <p><h6><i class="fa fa-book" style="background-color: black; color: #fff; border-radius: 4px;"></i>Registered Schools</h6></p>
  </div>
  
  <div class="container">
    <div class="card" style="border-radius: 0px; border: none; height: 310px;">
      <div class="card" style="border-radius: 0px; width: 99%; margin: 5px auto; height: 300px;">
  
          <div class="table-responsive" style="border: none;">
            <table id="schoolstable" class="table table-bordered" style="border: none;">
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
                <tr>
                  <td style="border: none;">1</td>
                  <td style="border: none;">Federal University of Technology</td>
                  <td style="border: none;">Minna, Niger State</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">2</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
                  <td style="border: none;">3</td>
                  <td style="border: none;">Anna</td>
                  <td style="border: none;">Pitt</td>
                  <td style="border: none;">35</td>
                  <td style="border: none;">New York</td>
                </tr>
                <tr>
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
</div>

{{-- add school modal --}}

<div id="addschool" style="display: none;">
  @include('layouts.messages')
    <p><h6><i class="fa fa-book" style="background-color: black; color: #fff; border-radius: 4px;"></i>Add Schools</h6></p>

  <form action="{{ route('student.store') }}" method="post" id="formschoolreg">
    @csrf
    <div class="form-group">
      <label for="schoolname">School name</label>
      <input type="text" id="schoolname" class="form-control" placeholder="enter school name" name="schoolname">
    </div>
    <div class="form-group">
      <label for="address">School address</label>
      <input type="text" id="address" class="form-control" placeholder="enter school address" name="schoollocation">
    </div>
    <div class="form-group">
      <label for="periodfrom">Period from</label>
      <input type="date" id="periodfrom" class="form-control" name="activefrom">
    </div>
    <div class="form-group">
      <label for="periodto">Period to</label>
      <input type="date" class="form-control" name="activetill" id="periodto">
    </div>
    <div class="form-group">
      <label for="schemail">School email</label>
      <input type="email" class="form-control" id="schemail">
    </div>
    <div class="form-group">
      <label for="schemail">School phone number</label>
      <input type="phone" class="form-control" id="schphone">
    </div>
    <div class="form-group">
      <label for="school type">School type</label>
      <select class="form-control" name="schoolcategory" id="schoolcategory">
        <option value="">chose school type</option>
        <option value="University">University</option>
        <option value="Polytechnic">Polytechnic</option>
        <option value="Monotechnic">Monotechnic</option>
        <option value="College of Education">College of Education</option>
        <option value="secondary school">secondary school</option>
        <option value="Primary School">Primary School</option>
      </select>
    </div>
  </form>
    <!-- Modal footer -->
    <div class="modal-footer">
      {{-- <div class="spinner-border"></div> --}}
      <em id="errormsg" style="font-size: 12px; color: red; display: none;">An error occured. Check that all forms are filled correctly</em>
      <em id="successmsg" style="font-size: 12px; color: green; display: none;">School account created</em>
      <button id="clickbtn" class="btn btn-sm btn-info text-white" onclick="sideadvert()">Add School</button>
      <button id="progressbtn" class="btn btn-sm btn-info text-white" disabled style="width: 90px; display:none;"><div class="spinner-border" style="width:10px; height:10px;"></div> Processing</button>
    </div>
    
</div>
    
    
    
    
    </div>
  </div>
</div>











    
@endsection
