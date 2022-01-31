{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Notification Management')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-contact.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- Contact Us -->
<div id="contact-us" class="section">
  <div class="app-wrapper">
    
    <!-- Contact Sidenav -->
    <div id="sidebar-list" class="row contact-sidenav mt-0">
      <div class="col s12 m12 offset-l2 l8 contact-form margin-top-contact">
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div>
                <h5>Notification Management</h5>
              </div>
              <div class="input-field col s12">
                <input id="name" type="text" class="validate">
                <label for="name">Title</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 width-100">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Description (less then 250 words)</label>
                <a class="waves-effect waves-light btn">Send</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-contact.js')}}"></script>
@endsection