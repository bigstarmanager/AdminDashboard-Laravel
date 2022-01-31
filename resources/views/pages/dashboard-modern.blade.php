{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Dashboard Modern')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist-plugin-tooltip.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/intro.css')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
   <!-- Current balance & total transactions cards-->
   <div class="row vertical-modern-dashboard">
      <!-- <div class="row horizontal-modern-dashboard"> -->
      <div class="col s12 m6 l4 xl2">
         <!-- Current Balance -->
         <div class="card animate fadeLeft">
            <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">Our App Users <i class="material-icons float-right">more_vert</i>
               </h6>
               <!-- <p class="medium-small">This billing cycle</p> -->
               <div class="current-balance-container">
                  <div id="current-balance-donut-chart" class="current-balance-shadow current-balance-donut-chart"></div>
               </div>
               <h5 class="center-align"> <i class="material-icons dp48" style="vertical-align: bottom;">people</i> 10,000 </h5>
               <p class="medium-small center-align">View total users</p>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l4 xl2">
         <!-- Current Balance -->
         <div class="card animate fadeLeft">
            <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">Our Restaurants <i class="material-icons float-right">more_vert</i>
               </h6>
               <!-- <p class="medium-small">This billing cycle</p> -->
               <div class="current-balance-container">
                  <div id="current-balance-donut-chart1" class="current-balance-shadow current-balance-donut-chart current-balance-donut-chart-1"></div>
               </div>
               <h5 class="center-align"><i class="material-icons dp48" style="vertical-align: bottom;">restaurant</i> 100 </h5>
               <p class="medium-small center-align">View total restaurants</p>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l4 xl2">
         <!-- Current Balance -->
         <div class="card animate fadeLeft">
            <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">Processed Orders <i class="material-icons float-right">more_vert</i>
               </h6>
               <!-- <p class="medium-small">This billing cycle</p> -->
               <div class="current-balance-container">
                  <div id="current-balance-donut-chart2" class="current-balance-shadow current-balance-donut-chart current-balance-donut-chart-2"></div>
               </div>
               <h5 class="center-align"><i class="material-icons dp48" style="vertical-align: bottom;">library_books</i> 2,000 </h5>
               <p class="medium-small center-align">View total orders</p>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l4 xl2">
         <!-- Current Balance -->
         <div class="card animate fadeLeft">
            <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">Cancelled Orders <i class="material-icons float-right">more_vert</i>
               </h6>
               <!-- <p class="medium-small">This billing cycle</p> -->
               <div class="current-balance-container">
                  <div id="current-balance-donut-chart3" class="current-balance-shadow current-balance-donut-chart current-balance-donut-chart-3"></div>
               </div>
               <h5 class="center-align"><i class="material-icons dp48" style="vertical-align: bottom;">library_books</i> 2,000 </h5>
               <p class="medium-small center-align">View total oders</p>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l4 xl2">
         <!-- Current Balance -->
         <div class="card animate fadeLeft">
            <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">Pendding Orders <i class="material-icons float-right">more_vert</i>
               </h6>
               <!-- <p class="medium-small">This billing cycle</p> -->
               <div class="current-balance-container">
                  <div id="current-balance-donut-chart4" class="current-balance-shadow current-balance-donut-chart current-balance-donut-chart-4"></div>
               </div>
               <h5 class="center-align"><i class="material-icons dp48" style="vertical-align: bottom;">library_books</i> 2,000 </h5>
               <p class="medium-small center-align">View total oders</p>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l4 xl2">
         <!-- Current Balance -->
         <div class="card animate fadeLeft">
            <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">This Month Orders <i class="material-icons float-right">more_vert</i>
               </h6>
               <!-- <p class="medium-small">This billing cycle</p> -->
               <div class="current-balance-container">
                  <div id="current-balance-donut-chart5" class="current-balance-shadow current-balance-donut-chart current-balance-donut-chart-5"></div>
               </div>
               <h5 class="center-align"><i class="material-icons dp48" style="vertical-align: bottom;">library_books</i> 2,000 </h5>
               <p class="medium-small center-align">View total oders</p>
            </div>
         </div>
      </div>

   <div class="row">
      <div class="col s12 m6 l5 xl3 offset-xl3 offset-l1">
         <div id="chartjs" class="card pt-0 pb-0 animate fadeLeft">
            <div class="dashboard-revenue-wrapper padding-2 ml-2">
               <span class="new badge gradient-45deg-indigo-purple gradient-shadow mt-2 mr-2">+ $700</span>
               <p class="mt-2 mb-0 font-weight-600">Today's revenue</p>
               <p class="no-margin grey-text lighten-3">$5,630 avg</p>
               <h5>$5,700</h5>
            </div>
            <div class="sample-chart-wrapper card-gradient-chart">
               <canvas id="custom-line-chart-sample-three" class="center"></canvas>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l5 xl3">
         <div id="chartjs" class="card pt-0 pb-0 animate fadeLeft">
            <div class="dashboard-revenue-wrapper padding-2 ml-2">
               <span class="new badge gradient-45deg-indigo-purple gradient-shadow mt-2 mr-2">+ $1,200</span>
               <p class="mt-2 mb-0 font-weight-600">This month's revenue</p>
               <p class="no-margin grey-text lighten-3">$53,050 avg</p>
               <h5>$ 54,500</h5>
            </div>
            <div class="sample-chart-wrapper card-gradient-chart">
               <canvas id="custom-line-chart-sample-four" class="center"></canvas>
            </div>
         </div>
      </div>
      <div class="col s12  l12 mt-1">
         <div class="card subscriber-list-card animate fadeRight">
            <div class="card-content pb-1">
               <h4 class="card-title mb-0"><strong>Latest Orders</strong> <i class="material-icons float-right">more_vert</i></h4>
            </div>
            <table class="subscription-table responsive-table highlight striped">
               <style>
                  table tr {
                     border-bottom: 1px solid #b7b7b7 !important;
                  }
               </style>
               <thead>
                  <tr>
                     <th>Order ID</th>
                     <th>Store</th>
                     <th>User</th>
                     <th>Account</th>
                     <th>Status</th>
                     <th>Order Date</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge pink lighten-5 pink-text text-accent-2">Cancelled</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small> <br> <small style="color:red">Gift Order</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small> <br> <small style="color:red">Gift Order</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small> <br> <small style="color:orange">Party Order</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge pink lighten-5 pink-text text-accent-2">Cancelled</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
                  <tr>
                     <td>#408</td>
                     <td>Club Kama <br> <small style="color:blue;">PickUp</small> <br> <small style="color:orange">Party Order</small></td>
                     <td>Punit Saharan <br> 1234567890</td>
                     <td>App User</td>
                     <td><span class="badge blue lighten-5 blue-text text-accent-2">Delivered</span></td>
                     <td>15-October-2021</td>
                     <td><a href="#"><i class="material-icons pink-text">check</i></a></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <div class="col s12 l6">
         <!-- User Statistics -->
         <div class="card user-statistics-card animate fadeLeft">
            <div class="card-content">
               <h4 class="card-title mb-0"><strong>Last 6 Month Order Report</strong>  <i class="material-icons float-right">more_vert</i></h4>
               <div class="color-pick_tab padding-5" style="display: flex; justify-content: center;">
                  <span class="badge pink lighten-2 btn black-text text-accent-2">Cancelled Orders</span>
                  <span class="badge purple lighten-2 btn black-text text-accent-2">Completed Orders</span>
               </div>
               <div class="user-statistics-container">
                  <div id="user-statistics-bar-chart" class="user-statistics-shadow"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 l6">
         <!-- User Statistics -->
         <div class="card user-statistics-card animate fadeLeft">
            <div class="card-content">
               <h4 class="card-title mb-0"><strong>Top Store With Most Orders</strong>  <i class="material-icons float-right">more_vert</i></h4>
               <div class="color-pick_tab padding-5" style="display: flex; justify-content: center;">
                  <span class="badge red  btn black-text text-accent-2">Cancelled Orders</span>
                  <span class="badge red lighten-2 btn black-text text-accent-2">Completed Orders</span>
               </div>
               <div class="user-statistics-container">
                  <div id="user-statistics-bar-chart1" class="user-statistics-shadow"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist.min.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-fill-donut.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/dashboard-modern.js')}}"></script>
<script src="{{asset('js/scripts/intro.js')}}"></script>
@endsection