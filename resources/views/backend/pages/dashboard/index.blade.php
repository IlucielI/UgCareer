@extends('backend.partials.app', ['title' => __('Home')])
@push('pluginscss')
<link rel="stylesheet" href="{{ asset('backend') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('backend') }}/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/js/select.dataTables.min.css">
@endpush
@section('content')
<div class="content-wrapper">
  @include('backend.partials.component.header', [
  'title' => __('Welcome') . ' '. auth()->user()->name,
  'class' => 'grid-margin'
  ])
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="{{ asset('backend') }}/images/dashboard/people.svg" alt="people">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal">Bangalore</h4>
                <h6 class="font-weight-normal">India</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Today’s Bookings</p>
              <p class="fs-30 mb-2">4006</p>
              <p>10.00% (30 days)</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Bookings</p>
              <p class="fs-30 mb-2">61344</p>
              <p>22.00% (30 days)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Number of Meetings</p>
              <p class="fs-30 mb-2">34040</p>
              <p>2.00% (30 days)</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Number of Clients</p>
              <p class="fs-30 mb-2">47033</p>
              <p>0.22% (30 days)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('pluginjs')

@endpush

@push('js')
<script src="{{ asset('backend') }}/js/dashboard.js"></script>
@endpush