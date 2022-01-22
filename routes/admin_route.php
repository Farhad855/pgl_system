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
Route::get('/edit_shipment/{id}','admin\ShipmentController@edit_shipment')->name('edit_shipment');
Route::post('/update_shipment','admin\ShipmentController@update_shipment')->name('update_shipment');
Route::get('/duplicate_shipment/{id}','admin\ShipmentController@duplicate_shipment')->name('duplicate_shipment');
Route::get('delete_shipment/{id}','admin\ShipmentController@delete_shipment')->name('delete_shipment');
// shipment bol and doc
Route::get('/bol_admin/{id}','admin\ShipmentController@bol')->name('bol_admin');
Route::get('/bol_pdf_admin/{id}','admin\ShipmentController@bol_pdf')->name('bol_pdf_admin');
Route::get('/dock_recepit_admin/{id}','admin\ShipmentController@dock_recepit')->name('dock_recepit_admin');
Route::get('/custom_form_admin/{id}','admin\ShipmentController@custom_form')->name('custom_form_admin');
Route::get('/release_document_admin/{id}','admin\ShipmentController@release_document')->name('release_document_admin');


// Invoices section 
Route::get('/invoice_admin/{id}','admin\InvoiceController@view_invoice')->name('invoice_admin');
Route::get('/invoice_data_admin','admin\InvoiceController@invoice_data')->name('invoice_data_customer');
Route::get('/search_invoice_admin','admin\InvoiceController@search_invoice')->name('search_invoice_admin');
Route::get('/paginate_invoice_admin','admin\InvoiceController@paginate_invoice')->name('paginate_invoice_admin');
Route::get('/invoices_pdf_admin/{id}','admin\InvoiceController@invoice_pdf')->name('invoice_pdf_admin');

Route::get('/add_invoice','admin\InvoiceController@add_invoice')->name('add_invoice_admin');
Route::post('/add_new_invoice','admin\InvoiceController@add_new_invoice')->name('add_new_invoice_admin');
Route::get('/approve_invoice/{id}','admin\InvoiceController@approve_invoice')->name('approve_invoice');

Route::get('/edit_invoice/{id}','admin\InvoiceController@edit_invoice')->name('edit_invoice_admin');
Route::post('/update_invoice','admin\InvoiceController@update_invoice')->name('update_invoice_admin');
Route::get('/delete_invoice/{id}','admin\InvoiceController@delete_invoice')->name('delete_invoice_admin');


Route::get('/admin_logout','admin\LoginController@logout')->name('admin_logout');

?>