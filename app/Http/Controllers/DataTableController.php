<?php

namespace App\Http\Controllers;

class DataTableController extends Controller
{
  public function dataTable()
  {

    $breadcrumbs = [
      ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Table"], ['name' => "DataTable"],
    ];
    //Pageheader set true for breadcrumbs
    $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

    return view('pages.table-data-table', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
  }
  public function runningDataTableOrders()
  {

    $breadcrumbs = [
      ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Table"], ['name' => "RunningDataTableOrders"],
    ];
    //Pageheader set true for breadcrumbs
    $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

    return view('pages.table-running-orders', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
  }
  public function CancelledDataTableOrders()
  {

    $breadcrumbs = [
      ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Table"], ['name' => "CancelledDataTableOrders"],
    ];
    //Pageheader set true for breadcrumbs
    $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

    return view('pages.table-cancelled-orders', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
  }
  public function completedDataTableOrders()
  {

    $breadcrumbs = [
      ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Table"], ['name' => "CompletedDataTableOrders"],
    ];
    //Pageheader set true for breadcrumbs
    $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

    return view('pages.table-completed-orders', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
  }
  public function newDataTableOrders()
  {

    $breadcrumbs = [
      ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Table"], ['name' => "NewDataTableOrders"],
    ];
    //Pageheader set true for breadcrumbs
    $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

    return view('pages.table-New-orders', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
  }
}
