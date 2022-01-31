{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Language Management')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users list start -->
<section class="users-list-wrapper section">
  
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <div>
                <button class="btn right">Add New</button>
              </div>
              <tr>
                <th></th>
                <th>ICON</th>
                <th>NAME</th>
                <th>TYPE</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td><i class="flag-icon flag-icon-gb"></i></td>
                <td>English</td>
                <td>Left to Right</td>
                <td><a href="{{asset('page-language-edit')}}"><i class="material-icons">edit</i></a></td>
                <td><a href=""><i class="material-icons">delete_forever</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td><i class="flag-icon flag-icon-fr"></i></td>
                <td>French</td>
                <td>Right to Left</td>
                <td><a href="{{asset('page-language-edit')}}"><i class="material-icons">edit</i></a></td>
                <td><a href=""><i class="material-icons">delete_forever</i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>
<!-- users discount ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection