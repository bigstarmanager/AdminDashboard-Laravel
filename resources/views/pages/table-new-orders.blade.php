{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','New Orders')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section section-data-tables">


  <!-- Page Length Options -->
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>STORE</th>
                    <th>USER</th>
                    <th>ACCOUNT</th>
                    <th>ITEMS</th>
                    <th>OPTION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#396</td>
                    <td>Club Kama</td>
                    <td>Punit Saharan<br>1234567890</td>
                    <td>App User</td>
                    <td>
                      <div class="row" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Item</div>
                        <div class="col s4">Qty</div>
                        <div class="col s4">Price</div>
                      </div>
                      <div class="row" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Full - Passion Love</div>
                        <div class="col s4">1</div>
                        <div class="col s4">$5.00</div>
                      </div>
                      <div class="row red-text" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Sub Total : $5</div>
                        <div class="col s4">Tax : $0.44</div>
                        <div class="col s4">Tip : $0.00</div>
                        <div class="col s4">Discount : $0.00</div>
                        <div class="col s4">Total : $5.49</div>
                      </div>
                    </td>
                    <td><span class="btn">Complete Order</span></td>
                  </tr>
                  <tr>
                    <td>#396</td>
                    <td>Club Kama</td>
                    <td>Punit Saharan<br>1234567890</td>
                    <td>App User</td>
                    <td>
                      <div class="row" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Item</div>
                        <div class="col s4">Qty</div>
                        <div class="col s4">Price</div>
                      </div>
                      <div class="row" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Full - Passion Love</div>
                        <div class="col s4">1</div>
                        <div class="col s4">$5.00</div>
                      </div>
                      <div class="row red-text" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Sub Total : $5</div>
                        <div class="col s4">Tax : $0.44</div>
                        <div class="col s4">Tip : $0.00</div>
                        <div class="col s4">Discount : $0.00</div>
                        <div class="col s4">Total : $5.49</div>
                      </div>
                    </td>
                    <td><span class="btn">Complete Order</span></td>
                  </tr>
                  <tr>
                    <td>#396</td>
                    <td>Club Kama</td>
                    <td>Punit Saharan<br>1234567890</td>
                    <td>App User</td>
                    <td>
                      <div class="row" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Item</div>
                        <div class="col s4">Qty</div>
                        <div class="col s4">Price</div>
                      </div>
                      <div class="row" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Full - Passion Love</div>
                        <div class="col s4">1</div>
                        <div class="col s4">$5.00</div>
                      </div>
                      <div class="row red-text" style="border-bottom: 1px solid #cfcfcf;">
                        <div class="col s4">Sub Total : $5</div>
                        <div class="col s4">Tax : $0.44</div>
                        <div class="col s4">Tip : $0.00</div>
                        <div class="col s4">Discount : $0.00</div>
                        <div class="col s4">Total : $5.49</div>
                      </div>
                    </td>
                    <td><span class="btn">Complete Order</span></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>STORE</th>
                    <th>USER</th>
                    <th>ACCOUNT</th>
                    <th>ITEMS</th>
                    <th>OPTION</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/data-tables.js')}}"></script>
@endsection