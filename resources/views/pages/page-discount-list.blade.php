{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Discount Offer')

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
                <th>COUPEN CODE</th>
                <th>DISCOUNT VALUE</th>
                <th>DATE ADDED</th>
                <th>STATUS</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>happyhour</td>
                <td>10%</td>
                <td>01-Jan-2020</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <td><a href="{{asset('page-discount-edit')}}"><i class="material-icons">edit</i></a></td>
                <td><a href=""><i class="material-icons">delete_forever</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>smilehour</td>
                <td>10%</td>
                <td>01-Jan-2020</td>
                <td><span class="chip red lighten-5">
                    <span class="red-text">Disabled</span>
                  </span>
                </td>
                <td><a href="{{asset('page-discount-edit')}}"><i class="material-icons">edit</i></a></td>
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