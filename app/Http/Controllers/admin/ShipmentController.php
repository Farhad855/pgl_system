<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShipmentModel;
use DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ShipmentController extends Controller
{
    function __construct()
    {
        if(empty(session('access')))
        {
            return view('admin/auth/login');
        }
    }

    public function shipment($status='',$locations='')
    {
        $sta=$status;
        $location=$locations;
        if($status==10){
            $status=array();
            $sta=10;
        }
         elseif($status==9){
            $status=[0,3,4,5];
            $sta=9;
        }
        else{
            $status=[$status];
        }
        if($location != 10){
            if($location=='Savannah, GA')
                $location='Savannah';
            else $location = $locations;
        }

        $shipment = DB::table('containers')
           ->select("containers.*","tbl_bases.container_id","containers.id as cid","companies.name as company_name")
           ->join('tbl_bases','tbl_bases.container_id','=','containers.id')
           ->join('companies','companies.id','=','containers.company_id');
           if(!empty($status)){
           $shipment->whereIn('containers.status',$status);
            }
           if($sta=='9'){
           $shipment->where('containers.cut_off_date',date('Y-m-d'));
            }
            if($location !='10'){
               $shipment->where('containers.port_loading','like', '%'.$location.'%');
            }
           $shipment->groupBy('cid')
           ->orderBy('containers.id','desc');
          $shipments=$shipment->paginate(20);
           return view('admin.shipment.shipment',['shipments'=>$shipments,'paginate'=>20,'status'=>$sta,'location'=>$location]);      
    }

    public function search_shipment(Request $request)
    {
       $pagination=20;
       $status ='';
       $location=$request['locations'];
       $sta=$request['status'];
       if($request['status']){
          $status= $request['status'];
        }
        if($status==10){
            $status=array();
            $sta=10;
        }
         elseif($status==9){
             $status=[0,3,4,5];
            $sta=9;
        }
        else{
            $status=[$request['status']];
        }
        if($location != 10){
            if($location=='Savannah, GA')
                $location='Savannah';
            else $location = $request['locations'];
        }
        $searchQuery = trim($request['searchValue']);
        $requestData = ['containers.booking_number','containers.container_number','containers.port_loading'];
        if($request->ajax()){
        $shipment = DB::table('containers')->select("containers.*","tbl_bases.container_id","containers.id as cid","companies.name as company_name")
           ->join('tbl_bases','tbl_bases.container_id','=','containers.id')
           ->join('companies','companies.id','=','containers.company_id');
           if($searchQuery!=''){
             $pagination=20000;
            $shipment->where(function($q) use($requestData, $searchQuery) {
                    foreach ($requestData as $field)
                     $q->orWhere($field, 'like', "%{$searchQuery}%");
                });
            }
           if(!empty($status)){
           $shipment->whereIn('containers.status',$status);
            }
            if($sta=='9'){
           $shipment->where('containers.cut_off_date',date('Y-m-d'));
            }
            if($location !='10'){
               $shipment->where('containers.port_loading','like', '%'.$location.'%');
            }
           $shipment->groupBy('cid')
           ->orderBy('containers.id','desc');
          $shipments=$shipment->paginate($pagination);
           return view('admin.shipment.shipment_data',['shipments'=>$shipments,'paginate'=>20,'status'=>$sta,'location'=>$location]);
        } 
    }

    public function paginate_shipment(Request $request)
    {
        $pagination=20;
        $status='';
        $location=$request['locations'];
        $sta=$request['status'];
        if($request['paginate']){
          $pagination= $request['paginate'];
        }
        if($request['status']){
          $status= $request['status'];
        }
        if($status==10){
            $status=array();
            $sta=10;
        }
         elseif($status==9){
             $status=[0,3,4,5];
            $sta=9;
        }
        else{
            $status=[$request['status']];
        }
        if($location != 10){
            if($location=='Savannah, GA')
                $location='Savannah';
            else $location = $request['locations'];
        }

         if($request->ajax()){
             $shipment = DB::table('containers')
             ->select("containers.*","tbl_bases.container_id","containers.id as cid","companies.name as company_name")
               ->join('tbl_bases','tbl_bases.container_id','=','containers.id')
               ->join('companies','companies.id','=','containers.company_id');
               if(!empty($status)){
               $shipment->whereIn('containers.status',$status);
                }
                if($sta=='9'){
               $shipment->where('containers.cut_off_date',date('Y-m-d'));
                }
              if($location !='10'){
               $shipment->where('containers.port_loading','like', '%'.$location.'%');
               }
               $shipment->groupBy('cid')
               ->orderBy('containers.id','desc');
              $shipments=$shipment->paginate($pagination);
               return view('admin.shipment.shipment_data',['shipments'=>$shipments,'paginate'=>20,'status'=>$sta,'location'=>$location]);
        } 
    }

    // add shipment
    public function add_new_shipment(Request $request)
    {
        $add_contanier = new ShipmentModel();
        $add_contanier->booking_number = $request['book_number'];
        $add_contanier->aes_itn_number = $request['itn_number'];
        $add_contanier->container_number = $request['cont_number'];
        $add_contanier->bolading_number = $request['lading_number'];
        $add_contanier->pglr_number = $request['pgl_number'];
        $add_contanier->seal_number = $request['seal_number'];
        $add_contanier->c_size = $request['cont_size'];
         $add_contanier->company_id = $request['company_id'];
         if($request['rcontainer']){
             $add_contanier->status = $request['rcontainer'];
         }
         if($request['company_id']){
                $company_vip=DB::table('companies')
                ->where('id',$request['company_id'])->first();
                 $add_contanier->vip = $company_vip->vip;
            }
        $add_contanier->inv_number = $request['inv_number'];
        $add_contanier->amount = $request['amount'];
        $add_contanier->cut_off_date = $request['cut_date'];
        $add_contanier->loading_date = $request['load_date'];
        $add_contanier->etd_port_loading = $request['port_loading'];
        $add_contanier->eta_port_discharge = $request['port_discharge'];
        $add_contanier->vessel_name = $request['vessel_name'];
        $add_contanier->voyage_number = $request['voyage_number'];
        $add_contanier->flag = $request['flag'];
        $add_contanier->steamship_line = $request['line'];
        $add_contanier->place_receipt = $request['place_rec'];
        $add_contanier->pier = $request['pier'];
        $add_contanier->port_loading = $request['port_of_loading'];
        $add_contanier->loading_terminal = $request['loading_terminal'];
        $add_contanier->port_discharge = $request['port_of_discharge'];
        $add_contanier->release_date = $request['release_date'];
        $add_contanier->poc_cargo_release = $request['poc_cargo_re'];
        $add_contanier->country_origin = $request['country_or'];
        $add_contanier->scac_code = $request['scac_code'];
        $add_contanier->t_cost = $request['t_cost'];
        $add_contanier->broker_name = $request['broker_name'];
        $add_contanier->prec_by = $request['pre_carriage'];
        $add_contanier->place_pre_carrier = $request['porbpc'];
        $add_contanier->pin_in=$request['pin_in'];
        $add_contanier->pin_out=$request['pin_out'];
        $add_contanier->shipper_exporter = $request['shipper'];
        $add_contanier->shipper_street_address = $request['shipper_street'];
        $add_contanier->shipper_city = $request['shipper_city'];
        $add_contanier->shipper_state = $request['shipper_state'];
        $add_contanier->shipper_zip_code = $request['shipper_zip'];
        $add_contanier->shipper_email_address = $request['shipper_email'];
        $add_contanier->shipper_phone_number = $request['shipper_phone'];
        $add_contanier->shipper_fax_number = $request['shipper_fax'];
        $add_contanier->shipper_poc = $request['shipper_poc'];
        $add_contanier->f_agent = $request['forward_agent'];
        $add_contanier->f_street_address = $request['forward_agent_add'];
        $add_contanier->f_city = $request['forward_agent_city'];
        $add_contanier->f_state = $request['forward_agent_state'];
        $add_contanier->f_zip_code = $request['forward_agent_zip'];
        $add_contanier->f_email_address = $request['forward_agent_email'];
        $add_contanier->f_phone_number = $request['forward_agent_phone'];
        $add_contanier->f_fax_number = $request['forward_agent_fax'];
        $add_contanier->f_poc = $request['forward_agent_poc'];
        $add_contanier->meas = $request['measure'];
        $add_contanier->n_units_load = $request['number_unit'];
        $add_contanier->export_instruc = $request['export_ref'];
        $add_contanier->basic_instruc = $request['basic_ins'];
        $add_contanier->create_date = $request['create_date'];
        $add_contanier->create_by = session('id');
        $add_contanier->save();
        $container = DB::table('containers')->orderBy('id', 'desc')->first();
        if (!empty($request->file)) {
            foreach ($request->file as $photo) {
                $imagename = random_int(0, 10000) . time() . '.' . $photo->getClientOriginalExtension();
                $destinationPath = public_path('images/container');
                $photo->move($destinationPath, $imagename);
                $data['file'] = $imagename;
                DB::table('container_images')->insert([
                      'container_id' => $container->id,
                      'photo' => $imagename
                  ]);
            }
        }
        if (!empty($request->file1)) {
            foreach ($request->file1 as $photo) {
                $imagename = random_int(0, 10000) . time() . '.' . $photo->getClientOriginalExtension();
                $destinationPath = public_path('images/container_file');
                $photo->move($destinationPath, $imagename);
                $data['file1'] = $imagename;
                DB::table('container_files')->insert([
                     'container_id' => $container->id,
                     'file' => $imagename
                 ]);
            }
        }
         // flog('Container','Add new container ',$request['book_number']);
        return redirect()->back()->with('success', 'saved!');
    }




}
