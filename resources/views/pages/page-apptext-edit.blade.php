{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','App Text edit')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-account-settings.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users edit start -->
<div class="section users-edit pr-5 pl-5">
  <div class="">
    <div class="card-content">
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit account form start -->
          <form id="accountForm">
            <div class="row">
              <div class="mb-1">
                <h4>
                  About Us Page
                </h4>
              </div>
              <div class="detail-border_section z-depth-3 white col s12 mb-3 pt-2 pb-2 pl-2 pr-2">
                <div class="col s12">
                  <div class="input-field col s12 m6">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Skip Button</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">App Enter App</label>
                  </div>
                </div>
              </div>
              <div class="mb-1">
                <h4>
                  Select City Page
                </h4>
              </div>
              <div class="detail-border_section z-depth-3 white col s12 mb-3 pt-2 pb-2 pl-2 pr-2">
                <div class="col s12">
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Page Title</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Search Placeholder</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Heading</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Button</label>
                  </div>
                </div>
              </div>
              <div class="mb-1">
                <h4>
                  Home Page
                </h4>
              </div>
              <div class="detail-border_section z-depth-3 white col s12 mb-3 pt-2 pb-2 pl-2 pr-2">
                <div class="col s12">
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Search Placeholder</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Offer Title Filter</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Fast Delivery Filter</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Trending Filter</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">New Arrival Filter</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">By Rating Filter</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Coupon Text</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Per Person Cost</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Tab Home</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Tab Nearest</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Tab Cart</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Tab Profile</label>
                  </div>
                </div>
              </div>
              <div class="mb-1">
                <h4>
                  Side Menu
                </h4>
              </div>
              <div class="detail-border_section z-depth-3 white col s12 mb-3 pt-2 pb-2 pl-2 pr-2">
                <div class="col s12">
                  <div class="input-field col s12 m6 l4">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Title</label>
                  </div>
                  <div class="input-field col s12 m6 l4">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Pages Title</label>
                  </div>
                  <div class="input-field col s12 m6 l4">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">App Version</label>
                  </div>
                </div>
              </div>
              <div class="mb-1">
                <h4>
                  Item Page
                </h4>
              </div>
              <div class="detail-border_section z-depth-3 white col s12 mb-3 pt-2 pb-2 pl-2 pr-2">
                <div class="col s12">
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">View Info</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Veg Only</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Add To Cart Button</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Addon Page Title</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Select Size Heading</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Small</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Medium</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Large</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Addon Add</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Addon Heading</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="first_name1" type="text" class="validate">
                    <label for="first_name1" class="active">Addon Button</label>
                  </div>
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end mt-3">
                <button type="submit" class="btn indigo">
                  Save changes</button>
                <button type="button" class="btn btn-light">Cancel</button>
              </div>
            </div>
          </form>
          <!-- users edit account form ends -->
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- users edit ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/formatter/jquery.formatter.min.js')}}"></script>

@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
<script src="{{asset('js/scripts/page-account-settings.js')}}"></script>
<script src="{{asset('js/scripts/form-masks.js')}}"></script>
@endsection