{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')


{{-- vendor style --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="seaction pl-5 pr-5">


  <!--Basic Form-->

  <!-- jQuery Plugin Initialization -->
  <div class="row">
    <!-- Form Advance -->
    <div class="col s12 m12 l12">
      <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
          <form>
            <div>
              <h5 class="mb-3">Report Management</h5>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <select>
                  <option value="" disabled selected>Choose Store</option>
                  <option value="1">Manager</option>
                  <option value="2">Developer</option>
                  <option value="3">Business</option>
                </select>
                <label>Select Store</label>
              </div>
              <div class="input-field col m6 s12">
                <select>
                  <option value="" disabled selected>Choose Report Type</option>
                  <option value="1">Manager</option>
                  <option value="2">Developer</option>
                  <option value="3">Business</option>
                </select>
                <label>Report Type</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <input type="text" class="datepicker" id="dob">
                <label for="dob">From Date</label>
              </div>
              <div class="input-field col m6 s12">
                <input type="text" class="datepicker" id="dob">
                <label for="dob">To Date</label>
              </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Get Report
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection