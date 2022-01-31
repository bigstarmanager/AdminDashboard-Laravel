{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Restaurant edit')

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
                  Details
                </h4>
              </div>
              <div class="detail-border_section z-depth-3 white col s12 mb-3 pt-2 pb-2 pl-2 pr-2">
                <div class="col s12 m6">
                  <div class="row">
                    <div class="input-field col s12">
                      <input type="text" id="fn">
                      <label for="fn" class="">Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input placeholder="Placeholder" id="phone-input" type="text" class="">
                      <label for="phone-input" class="active">Phone Number</label>
                    </div>
                    <div class="col s6 input-field">
                      <select>
                        <option>Top</option>
                        <option>Bottom</option>
                      </select>
                      <label>Banner Position</label>
                    </div>
                    <div class="input-field col s6">
                      <input type="text" id="fn">
                      <label for="fn" class="">Address</label>
                    </div>
                    <div class="input-field col s6">
                      <input type="text" id="fn">
                      <label for="fn" class="">State</label>
                    </div>
                    <div class="input-field col s6">
                      <input type="text" id="fn">
                      <label for="fn" class="">Zip Code</label>
                    </div>
                    <div class="input-field col s6">
                      <input type="text" id="fn">
                      <label for="fn" class="">Add Stripe ID</label>
                    </div>

                  </div>
                </div>
                <div class="col s12 m6">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email">
                      <label for="email" class="">Email <i><small>(This will be username)</small></i></label>
                    </div>
                    <div class="col s12 input-field">
                      <select>
                        <option>Active</option>
                        <option>Disabled</option>
                      </select>
                      <label>City</label>
                    </div>
                    <label class="ml-3" for="">Image (recommended size 600 * 400)</label>
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
                <div class="input-field col s12">
                  <textarea id="textarea2" class="materialize-textarea"></textarea>
                  <label for="textarea2" class="">Bar Floors (Comma Seprated)</label>
                </div>
                <div class="input-field col s12">
                  <input type="password" id="fn">
                  <label for="fn" class="">Change Password <i><small>(Enter new password if you want to change current password.)</small></i></label>
                </div>
              </div>
              <div class="mb-1">
                <h4>
                  Opening & Closing Timing
                </h4>
              </div>
              <div class="detail-border_section z-depth-3 white col s12 mb-3 pt-2 pb-2 pl-2 pr-2">
                <div class="col s4">
                  <div class="input-field col s12">
                    <input type="text" disabled id="fn" value="Sunday">
                  </div>
                  <div class="input-field col s12">
                    <input type="text" disabled id="fn" value="Monday">
                  </div>
                  <div class="input-field col s12">
                    <input type="text" disabled id="fn" value="Tuesday">
                  </div>
                  <div class="input-field col s12">
                    <input type="text" disabled id="fn" value="Wendnesday">
                  </div>
                  <div class="input-field col s12">
                    <input type="text" disabled id="fn" value="Thursday">
                  </div>
                  <div class="input-field col s12">
                    <input type="text" disabled id="fn" value="Friday">
                  </div>
                  <div class="input-field col s12">
                    <input type="text" disabled id="fn" value="Saturday">
                  </div>
                </div>
                <div class="col s4">
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                </div>
                <div class="col s4">
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
                  </div>
                  <div class="input-field col s12">
                    <input placeholder="00:00" id="time-demo2" type="text" class="">
                    <label for="time-demo2" class="active">Time</label>
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