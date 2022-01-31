{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Banner edit')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
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
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit account form start -->
          <form id="accountForm">
            <div class="row">
              <div class="col s12 input-field">
                <select>
                  <option>All Cities</option>
                  <option>New York</option>
                </select>
                <label>Select City</label>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <select>
                      <option>Top</option>
                      <option>Bottom</option>
                    </select>
                    <label>Banner Position</label>
                  </div>
                  <label class="ml-3" for="">Banner Image</label>
                  <div class="col s12 file-field input-field">
                    <div class="btn float-right">
                      <span>File</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <select>
                      <option>Happy</option>
                      <option>Star</option>
                    </select>
                    <label>Select Restaurants (These selected store will list up on banner click) </label>
                  </div>
                  <div class="col s12 input-field">
                    <select>
                      <option>Active</option>
                      <option>Disabled</option>
                    </select>
                    <label>Status</label>
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
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
<script src="{{asset('js/scripts/page-account-settings.js')}}"></script>

@endsection