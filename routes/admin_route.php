<?php 


Route::get('/admin_login', function () {
    // return view('welcome');
    return view('admin/auth/login');
});
Route::get('/dashboards','admin\HomeController@dashboard')->name('dashboard_admin');
Route::post('/admin_login','admin\LoginController@login')->name('admin_login');
Route::get('/admin_shipment_summary','admin\HomeController@shipment_summary')->name('shipment_summary_admin');
Route::get('/admin_vehicle_summary','admin\HomeController@vehicle_summary')->name('vehicle_summary_admin');
Route::get('/admin_veh_ship_inv_total', 'admin\HomeController@veh_ship_inv_total')->name('veh_ship_inv_total_admin');
Route::get('/admin_message','admin\HomeController@message')->name('message_admin');
Route::get('/delete_vehicle_admin/{id}','admin\VehicleController@delete_vehicle')->name('delete_vehicle_admin');

// company section 
Route::get('/company_admin','admin\CustomerController@company')->name('company_admin');
Route::get('/company_data_admin','admin\CustomerController@company_data')->name('all_vehicle_data_admin');
Route::get('/search_company','admin\CustomerController@search_company')->name('search_company_admin');
Route::get('/paginat_company_admin','admin\CustomerController@paginate_company')->name('paginate_company_admin');
Route::get('/delete_company_admin/{id}','admin\CustomerController@delete_company')->name('delete_company_admin');
Route::post('/add_company_admin','admin\CustomerController@add_company')->name('add_company_admin');
Route::post('/edit_company_admin','admin\CustomerController@edit_company')->name('edit_company_admin');

// Customer section 
Route::get('/customer_admin','admin\CustomerController@customer')->name('customer_admin');
Route::get('/customer_data_admin','admin\CustomerController@customer_data')->name('all_vehicle_data_admin');
Route::get('/search_customer','admin\CustomerController@search_customer')->name('search_customer_admin');
Route::get('/paginat_customer_admin','admin\CustomerController@paginate_customer')->name('paginate_customer_admin');
Route::get('/delete_customer_admin/{id}','admin\CustomerController@delete_customer')->name('delete_customer_admin');
Route::post('/add_customer_admin','admin\CustomerController@add_customer')->name('add_customer_admin');
Route::post('/edit_customer_admin','admin\CustomerController@edit_customer')->name('edit_customer_admin');

// all vehicle section
Route::get('/all_vehicles_admin','admin\VehicleController@all_vehicles')->name('all_vehicle_admin');
Route::get('/all_vehicles_data_admin','admin\VehicleController@all_vehicles_data')->name('all_vehicle_data_admin');
Route::get('/search_all_vehicle_admin','admin\VehicleController@search_all_vehicle')->name('search_all_vehicle_admin');
Route::get('/paginate_all_vehicle_admin','admin\VehicleController@paginate_all_vehicle')->name('paginate_all_vehicle_admin');
Route::get('/paginate_entry_all_vehicle_admin','admin\VehicleController@paginate_entry_all_vehicle')->name('paginate_entry_all_vehicle_admin');

// on the way vehicle section
Route::get('/on_theway_vehicles_admin','admin\VehicleController@on_theway_vehicles')->name('on_theway_vehicle_admin');
Route::get('/on_theway_vehicles_data_admin','admin\VehicleController@on_theway_vehicles_data')->name('on_theway_vehicle_data_admin');
Route::get('/search_on_theway_vehicle_admin','admin\VehicleController@search_on_theway_vehicle')->name('search_on_theway_vehicle_admin');
Route::get('/paginate_on_theway_vehicle_admin','admin\VehicleController@paginate_on_theway_vehicle')->name('paginate_on_theway_vehicle_admin');
Route::get('/paginate_entry_on_theway_vehicle_admin','admin\VehicleController@paginate_entry_on_theway_vehicle')->name('paginate_entry_on_theway_vehicle_admin');

// Pending vehicle section
Route::get('/pending_vehicles_admin','admin\VehicleController@pending_vehicles')->name('pending_vehicle_admin');
Route::get('/pending_vehicles_data_admin','admin\VehicleController@pending_vehicles_data')->name('pending_vehicle_data_admin');
Route::get('/search_pending_vehicle_admin','admin\VehicleController@search_pending_vehicle')->name('search_pending_vehicle_admin');
Route::get('/paginate_pending_vehicle_admin','admin\VehicleController@paginate_pending_vehicle')->name('paginate_pending_vehicle_admin');
Route::get('/paginate_entry_pending_vehicle_admin','admin\VehicleController@paginate_entry_pending_vehicle')->name('paginate_entry_pending_vehicle_admin');

// on the way vehicle section
Route::get('/onhand_notitle_vehicles_admin','admin\VehicleController@onhand_notitle_vehicles')->name('onhand_notitle_vehicle_admin');
Route::get('/onhand_notitle_vehicles_data_admin','admin\VehicleController@onhand_notitle_vehicles_data')->name('onhand_notitle_vehicle_data_admin');
Route::get('/search_onhand_notitle_vehicle_admin','admin\VehicleController@search_onhand_notitle_vehicle')->name('search_onhand_notitle_vehicle_admin');
Route::get('/paginate_onhand_notitle_vehicle_admin','admin\VehicleController@paginate_onhand_notitle_vehicle')->name('paginate_onhand_notitle_vehicle_admin');
Route::get('/paginate_entry_onhand_notitle_vehicle_admin','admin\VehicleController@paginate_entry_onhand_notitle_vehicle')->name('paginate_entry_onhand_notitle_vehicle_admin');

// on the way vehicle section
Route::get('/onhand_withtitle_vehicles_admin','admin\VehicleController@onhand_withtitle_vehicles')->name('onhand_withtitle_vehicle_admin');
Route::get('/onhand_withtitle_vehicles_data_admin','admin\VehicleController@onhand_withtitle_vehicles_data')->name('onhand_withtitle_vehicle_data_admin');
Route::get('/search_onhand_withtitle_vehicle_admin','admin\VehicleController@search_onhand_withtitle_vehicle')->name('search_onhand_withtitle_vehicle_admin');
Route::get('/paginate_onhand_withtitle_vehicle_admin','admin\VehicleController@paginate_onhand_withtitle_vehicle')->name('paginate_onhand_withtitle_vehicle_admin');
Route::get('/paginate_entry_onhand_withtitle_vehicle_admin','admin\VehicleController@paginate_entry_onhand_withtitle_vehicle')->name('paginate_entry_onhand_withtitle_vehicle_admin');


// on the way vehicle section
Route::get('/onhand_withtitle_vehicles_admin','admin\VehicleController@onhand_withtitle_vehicles')->name('onhand_withtitle_vehicle_admin');
Route::get('/onhand_withtitle_vehicles_data_admin','admin\VehicleController@onhand_withtitle_vehicles_data')->name('onhand_withtitle_vehicle_data_admin');
Route::get('/search_onhand_withtitle_vehicle_admin','admin\VehicleController@search_onhand_withtitle_vehicle')->name('search_onhand_withtitle_vehicle_admin');
Route::get('/paginate_onhand_withtitle_vehicle_admin','admin\VehicleController@paginate_onhand_withtitle_vehicle')->name('paginate_onhand_withtitle_vehicle_admin');
Route::get('/paginate_entry_onhand_withtitle_vehicle_admin','admin\VehicleController@paginate_entry_onhand_withtitle_vehicle')->name('paginate_entry_onhand_withtitle_vehicle_admin');

// shipped vehicle section
Route::get('/shipped_vehicles_admin','admin\VehicleController@shipped_vehicles')->name('shipped_vehicle_admin');
Route::get('/shipped_vehicles_data_admin','admin\VehicleController@shipped_vehicles_data')->name('shipped_vehicle_data_admin');
Route::get('/search_shipped_vehicle_admin','admin\VehicleController@search_shipped_vehicle')->name('search_shipped_vehicle_admin');
Route::get('/paginate_shipped_vehicle_admin','admin\VehicleController@paginate_shipped_vehicle')->name('paginate_shipped_vehicle_admin');
Route::get('/paginate_entry_shipped_vehicle_admin','admin\VehicleController@paginate_entry_shipped_vehicle')->name('paginate_entry_shipped_vehicle_admin');

// cost analysis section 
Route::get('/vehicles_cost_anylysis_admin','admin\VehicleController@vehicle_cost_analysis')->name('vehicle_cost_analysis_admin');
Route::get('/vehicle_cost_analysis_data_admin','admin\VehicleController@vehicle_cost_analysis_data')->name('vehicle_cost_analysis_data_admin');
Route::get('/search_vehicle_cost_analysis_admin','admin\VehicleController@search_vehicle_cost_analysis')->name('search_vehicle_cost_analysis_admin');
Route::get('/paginate_vehicle_cost_analysis_admin','admin\VehicleController@paginate_vehicle_cost_analysis')->name('paginate_vehicle_cost_analysis_admin');


//  vehicle dateline section
Route::get('/dateline_vehicles_admin','admin\VehicleController@dateline_vehicles')->name('dateline_vehicle_admin');
Route::get('/dateline_vehicles_data_admin','admin\VehicleController@dateline_vehicles_data')->name('dateline_vehicle_data_admin');
Route::get('/search_dateline_vehicle_admin','admin\VehicleController@search_dateline_vehicle')->name('search_dateline_vehicle_admin');
Route::get('/paginate_dateline_vehicle_admin','admin\VehicleController@paginate_dateline_vehicle')->name('paginate_dateline_vehicle_admin');
Route::get('/paginate_entry_dateline_vehicle_admin','admin\VehicleController@paginate_entry_dateline_vehicle')->name('paginate_entry_dateline_vehicle_admin');

// Shipment section 
Route::get('/shipment_admin/{id}/{location}','admin\ShipmentController@shipment')->name('shipment_admin');
Route::get('/shipment_data_admin','admin\ShipmentController@shipment_data')->name('shipment_data_admin');
Route::get('/search_shipment','admin\ShipmentController@search_shipment')->name('search_shipment_admin');
Route::get('/paginate_shipment','admin\ShipmentController@paginate_shipment')->name('paginate_shipment_admin');
Route::get('/add_shipment',function(){
    return view('admin.shipment.add_shipment');
});
Route::post('/add_new_shipment','admin\ShipmentController@add_new_shipment');

// Route::get('/shipment_base_location_and_status_customer/{location}/{status}','ShipmentControllerCustomer@shipment_base_location_and_status')->name('shipment_base_location_and_status_customer');
// Route::get('/shipment_base_location_and_status_search','ShipmentControllerCustomer@shipment_base_location_and_status_search')->name('shipment_base_location_and_status_search_customer');
// Route::get('/paginate_shipment_base_location_and_status','ShipmentControllerCustomer@paginate_shipment_base_location_and_status')->name('paginate_shipment_base_location_and_status_customer');


Route::get('/admin_logout','admin\LoginController@logout')->name('admin_logout');

?>