{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','City edit')

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
<div class="section users-edit">
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit account form start -->
          <form id="accountForm">
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value=""
                      data-error=".errorTxt1">
                    <label for="username">Coupen Code</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" class="validate" value="1"
                      data-error=".errorTxt2">
                    <label for="name">Min Cart Value (optional)</label>
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="col s6 input-field">
                    <input id="email" name="email" type="number" class="validate" value="10"
                      data-error=".errorTxt3">
                    <label for="email">Discount Value</label>
                  </div>
                  <div class="col s6 input-field">
                    <input id="email" name="email" type="number" class="validate" value="50">
                    <label for="email">Discount Upto (optional)</label>
                  </div>
                  <div class="col s12">
                    <label class="musicselect2">Favourite Music</label>
                    <div class="input-field">
                      <select class="browser-default" id="musicselect2" multiple="multiple">
                        <option value="Rock">Rock</option>
                        <option value="Jazz" selected>Jazz</option>
                        <option value="Disco">Disco</option>
                        <option value="Pop">Pop</option>
                        <option value="Techno">Techno</option>
                        <option value="Folk" selected>Folk</option>
                        <option value="Hip hop">Hip hop</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Description</label>
                  </div>
                  <div class="col s12 input-field">
                    <select>
                      <option>User</option>
                      <option>Staff</option>
                    </select>
                    <label>Discount Type</label>
                  </div>
                  <div class="col s12 input-field">
                    <select>
                      <option>Active</option>
                      <option>Banned</option>
                      <option>Close</option>
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