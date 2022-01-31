{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Restaurant Management')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
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
                <th>IMAGE</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>CITY</th>
                <th>STATUS</th>
                <th>OPTION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td><img src="{{asset('images/avatar/avatar-9.png')}}" height="70"></td>
                <td>Purple Cabbage <br> <small>Juice Bar</small></td>
                <td>919.757.9367</td>
                <td>North Carolina</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <td>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Open Right Now" href=""><i class="material-icons">lock_open</i></a>
                  <a class="btn pink btn-floating tooltipped" data-position="top" data-tooltip="In Trending" href=""><i class="material-icons">trending_up</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Login as User" href=""><i class="material-icons">directions_run</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="View Login Details" href=""><i class="material-icons">description</i></a>
                  <a class="btn btn-floating" href="{{asset('page-restaurant-edit')}}"><i class="material-icons">edit</i></a>
                  <a class="btn btn-floating" href=""><i class="material-icons">delete_forever</i></a>
                </td> 
              </tr>
              <tr>
                <td></td>
                <td><img src="{{asset('images/avatar/avatar-10.png')}}" height="70"></td>
                <td>Purple Cabbage <br> <small>Juice Bar</small></td>
                <td>919.757.9367</td>
                <td>North Carolina</td>
                <td><span class="chip red lighten-5">
                    <span class="red-text">Disabled</span>
                  </span>
                </td>
                <td>
                  <a class="btn pink btn-floating tooltipped" data-position="top" data-tooltip="Closed Right Now" href=""><i class="material-icons">lock_open</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Make Trending" href=""><i class="material-icons">trending_up</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Login as User" href=""><i class="material-icons">directions_run</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="View Login Details" href=""><i class="material-icons">description</i></a>
                  <a class="btn btn-floating" href="{{asset('page-restaurant-edit')}}"><i class="material-icons">edit</i></a>
                  <a class="btn btn-floating" href=""><i class="material-icons">delete_forever</i></a>
                </td> 
              </tr>
              <tr>
                <td></td>
                <td><img src="{{asset('images/avatar/avatar-9.png')}}" height="70"></td>
                <td>Purple Cabbage <br> <small>Juice Bar</small></td>
                <td>919.757.9367</td>
                <td>North Carolina</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <td>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Open Right Now" href=""><i class="material-icons">lock_open</i></a>
                  <a class="btn pink btn-floating tooltipped" data-position="top" data-tooltip="In Trending" href=""><i class="material-icons">trending_up</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Login as User" href=""><i class="material-icons">directions_run</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="View Login Details" href=""><i class="material-icons">description</i></a>
                  <a class="btn btn-floating" href="{{asset('page-restaurant-edit')}}"><i class="material-icons">edit</i></a>
                  <a class="btn btn-floating" href=""><i class="material-icons">delete_forever</i></a>
                </td> 
              </tr>
              <tr>
                <td></td>
                <td><img src="{{asset('images/avatar/avatar-10.png')}}" height="70"></td>
                <td>Purple Cabbage <br> <small>Juice Bar</small></td>
                <td>919.757.9367</td>
                <td>North Carolina</td>
                <td><span class="chip red lighten-5">
                    <span class="red-text">Disabled</span>
                  </span>
                </td>
                <td>
                  <a class="btn pink btn-floating tooltipped" data-position="top" data-tooltip="Closed Right Now" href=""><i class="material-icons">lock_open</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Make Trending" href=""><i class="material-icons">trending_up</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Login as User" href=""><i class="material-icons">directions_run</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="View Login Details" href=""><i class="material-icons">description</i></a>
                  <a class="btn btn-floating" href="{{asset('page-restaurant-edit')}}"><i class="material-icons">edit</i></a>
                  <a class="btn btn-floating" href=""><i class="material-icons">delete_forever</i></a>
                </td> 
              </tr>
              <tr>
                <td></td>
                <td><img src="{{asset('images/avatar/avatar-9.png')}}" height="70"></td>
                <td>Purple Cabbage <br> <small>Juice Bar</small></td>
                <td>919.757.9367</td>
                <td>North Carolina</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <td>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Open Right Now" href=""><i class="material-icons">lock_open</i></a>
                  <a class="btn pink btn-floating tooltipped" data-position="top" data-tooltip="In Trending" href=""><i class="material-icons">trending_up</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Login as User" href=""><i class="material-icons">directions_run</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="View Login Details" href=""><i class="material-icons">description</i></a>
                  <a class="btn btn-floating" href="{{asset('page-restaurant-edit')}}"><i class="material-icons">edit</i></a>
                  <a class="btn btn-floating" href=""><i class="material-icons">delete_forever</i></a>
                </td> 
              </tr>
              <tr>
                <td></td>
                <td><img src="{{asset('images/avatar/avatar-10.png')}}" height="70"></td>
                <td>Purple Cabbage <br> <small>Juice Bar</small></td>
                <td>919.757.9367</td>
                <td>North Carolina</td>
                <td><span class="chip red lighten-5">
                    <span class="red-text">Disabled</span>
                  </span>
                </td>
                <td>
                  <a class="btn pink btn-floating tooltipped" data-position="top" data-tooltip="Closed Right Now" href=""><i class="material-icons">lock_open</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Make Trending" href=""><i class="material-icons">trending_up</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="Login as User" href=""><i class="material-icons">directions_run</i></a>
                  <a class="btn btn-floating tooltipped" data-position="top" data-tooltip="View Login Details" href=""><i class="material-icons">description</i></a>
                  <a class="btn btn-floating" href="{{asset('page-restaurant-edit')}}"><i class="material-icons">edit</i></a>
                  <a class="btn btn-floating" href=""><i class="material-icons">delete_forever</i></a>
                </td> 
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