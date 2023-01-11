@extends ('layout.main')

@section('body')
<div class="pre-loader">
  <div class="pre-loader-box">
    <!-- <div class="loader-logo">
    </div> -->
    <div class='loader-progress' id="progress_div">
      <div class='bar' id='bar1'></div>
    </div>
    <div class='percent' id='percent1'>0%</div>
    <div class="loading-text">
      Loading...
    </div>
  </div>
</div>

<div class="card-box pd-20 height-100-p mb-30">
  <div class="row align-items-center">
    <div class="col-md-4">
      <img src="vendors/images/banner-img.png" alt="">
    </div>
    <div class="col-md-8">
      <h4 class="font-20 weight-500 mb-10 text-capitalize">
        Welcome back <div class="weight-600 font-30 text-blue">
          @auth
              {{ session()->get('employee')->employee_name }}
          @endauth
        </div>
      </h4>
      <p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
    </div>
  </div>
</div>

<div class="row">
  {{-- Customer --}}
  <div class="col-xl-3 mb-30">
    <div class="card-box height-100-p widget-style1" style="max-width: 200px">
      <div class="d-flex align-items-center">
        <div>
          <i class="icon-copy dw dw-user h1 text-primary"></i>
        </div>
        <div class="widget-data text-center">
          <div class="h4 mb-0">30</div>
          <div class="weight-600 font-14 ">Customers</div>
        </div>
      </div>
    </div>
  </div>

  {{--  Supplier --}}
  <div class="col-xl-3 mb-30">
    <div class="card-box height-100-p widget-style1" style="max-width: 200px">
      <div class="d-flex align-items-center">
        <div>
          <i class="icon-copy dw dw-user h1 text-primary"></i>
        </div>
        <div class="widget-data text-center">
          <div class="h4 mb-0">30</div>
          <div class="weight-600 font-14 ">Supplier</div>
        </div>
      </div>
    </div>
  </div>

  {{-- Products --}}
  <div class="col-xl-3 mb-30">
    <div class="card-box height-100-p widget-style1" style="max-width: 200px">
      <div class="d-flex align-items-center">
        <div>
          <i class="icon-copy dw dw-user h1 text-primary"></i>
        </div>
        <div class="widget-data text-center">
          <div class="h4 mb-0">30</div>
          <div class="weight-600 font-14 ">Supplier</div>
        </div>
      </div>
    </div>
  </div>

  {{-- Users --}}
  <div class="col-xl-3 mb-30">
    <div class="card-box height-100-p widget-style1" style="max-width: 200px">
      <div class="d-flex align-items-center">
        <div>
          <i class="icon-copy dw dw-user h1 text-primary"></i>
        </div>
        <div class="widget-data text-center">
          <div class="h4 mb-0">30</div>
          <div class="weight-600 font-14 ">Supplier</div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop