@extends('admin.layout.main')
@section('title','Custom form')
@section('js')
    <script>
        $(document).ready(function () {
            $("#shipment").addClass("active");
            $("#dash").removeClass("active");
        });
        $(document).ready(function(){
         $('#print').click(function(){
            $(this).addClass('hide');
            $('.no-print').addClass('hide');
            // $(".love").css("margin-top","-50px");
            window.print(); 
        });
    })
    </script>
@stop
<style type="text/css">
    .condition_report {
        width: 8in;
        height: 21in;
        margin-right: auto;
        margin-left: auto;
        padding: 2px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
    .condition_report .customer_part {
        float: left;
        width: 100%;
        margin-top: 40px;
    }
    .condition_report .top_processes {
        width: 758px;
        float: left;
        padding: 5px;
    }
    .condition_report .top_processes.ui-state-highlight .filer #got {
        float: right;
    }
    #print {
        float: left;
    }
    .condition_report .cond_here {
        float: left;
        width: 8in;
        margin-top: 3px;
    }
    .lefti   {
        float: left;
    }
    .righti  {
        float: right;
    }
    .condition_report .cond_here .lefti.title {
        font-size: 30px;
        font-weight: bold;
        margin-top: 20px;
        margin-left: 35px;
    }
    .condition_report .peso {
        font-size: 30px;
        font-weight: bold;
        margin-top: 20px;
        margin-left: 35px;
        margin-bottom: 30px;
    }
    .condition_report .customer_part .pics {
        float: left;
        width: 100%;
        margin-top: 10px;
    }
    .condition_report .customer_part .pics .pica {
        float: left;
        margin-left: 55px;
        width: 300px;
        height: 230px;
        margin-top: 10px;
    }
    .condition_report .cond_here .basic_info {
        float: left;
        width: 8in;
        margin-top: 10px;
    }
    .condition_report .cond_here .basic_info .part1 {
        float: left;
        width: 55%;
    }
    .condition_report .cond_here .basic_info .part2 {
        float: left;
        width: 44%;
        margin-left: -7%;
        
    }
    .condition_report .customer_part .part2 {
        float: left;
        width: 44%;
        margin-left: 0%;
    }
    .condition_report .cond_here .basic_info .checklist {
        width: 99%;
        float: left;
        margin-top: 5px;
        border: 1px solid #000;
        margin-left: 3px;
    }
    .condition_report .cond_here .basic_info .dimen {
        width: 99%;
        float: left;
        margin-left: 3px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: solid;
        border-right-color: #000;
        border-bottom-color: #000;
        border-left-color: #000;
    }
    .condition_report .cond_here .basic_info .sign {
        width: 99%;
        float: left;
        margin-left: 3px;
        margin-top: 30px;
    }
    .condition_report .cond_here .basic_info .sign table tr .leni {
        float: left;
        width: 350px;
    }
    .condition_report .cond_here .basic_info .sign table tr .leni1 {
        float: left;
        width: 140px;
        margin-left: 15px;
    }
    .condition_report .cond_here .basic_info .papugay {
        width: 99%;
        float: left;
        margin-top: 5px;
        border: 1px solid #000;
        margin-left: 3px;
    }
    .condition_report .cond_here .basic_info .condition {
        width: 99%;
        float: left;
        margin-left: 3px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: solid;
        border-right-color: #000;
        border-bottom-color: #000;
        border-left-color: #000;
    }
    .condition_report .cond_here .basic_info .picas1 {
        width: 50%;
        float: left;
        margin-left: 3px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: solid;
        border-right-color: #000;
        border-bottom-color: #000;
        border-left-color: #000;
    }
    .condition_report .cond_here .basic_info .picas2 {
        width: 375px;
        float: left;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-right-color: #000;
        border-bottom-color: #000;
    }
    .condition_report .cond_here .basic_info .picas3 {
        float: left;
        margin-left: 3px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: solid;
        border-right-color: #000;
        border-bottom-color: #000;
        border-left-color: #000;
        width: 50%;
    }
    .condition_report .cond_here .basic_info .picas4 {
        float: left;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-right-color: #000;
        border-bottom-color: #000;
        width: 375px;
    }
    .condition_report .cond_here .basic_info .picas4 #yoba {
        float: left;
        width: 100%;
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: #000;
    }
    .condition_report .cond_here .basic_info .picas3 #yoba  {
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: #000;
        float: left;
        width: 100%;
    }
    .condition_report .cond_here .basic_info #yoba table tr .line_right {
        border-right-width: 1px;
        border-right-style: solid;
        border-right-color: #000;
    }
    .condition_report .cond_here .basic_info .picas4 .lefti {
        float: left;
    }
    .condition_report .cond_here .basic_info table thead tr .biga  {
        font-size: 14px;
    }
    .condition_report .cond_here .basic_info table thead tr .biga1 {
        font-size: 12px;
    }
    .line_under   {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000;
        font-family: "Courier New", Courier, monospace;
    }
    .condition_report .cond_here .basic_info .picas1 #piss {
        width: 227px;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000;
        height: 125px;
    }
    .condition_report .cond_here .basic_info .picas2 #piss2 {
        width: 194px;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000;
        height: 125px;
    }
    .hide{
        display: none;
    }
</style>

@section('content')
<div class="site-content">
  <div class="content-area py-1">
    <div class="container-fluid"> 
    <div class="love condition_report">
        <div class="top_processes ui-state-highlight no-print">
            <button type="button" class="btn btn-info btn-rounded" id="print"><i class="fa fa-print"></i>&nbsp;Print</button>&nbsp;
            <a href="{{url('pdfcustom',isset($conti)? $conti->id :'')}}" class="btn btn-success btn-rounded" type="button"><i class="sidenave-icon fa fa fa-file-pdf-o"></i>&nbsp;PDF</a>
        </div>
        <div class="cond_here">
            <input type='hidden' id='vina' value='JTEZU14R340033747'/>
            <input type='hidden' id='cusa' value='900804'/>

            <div class="cond_logo lefti">
                <img src="{{asset('img/logo.png')}}" width="110px" height="100px">

            </div>

            <div class="lefti" style="padding-left: 150px;"><h3>PEACE GLOBAL LOGISTICS</h3>
                <h4 style="text-align: center;">2824 Tremont Road</h4><h5 style="text-align: center;">Savannah, GA, 31405</h5><h5 style="text-align: center;"> </h5><h5 style="text-align: center;"></h5>
                <br>
            </div>
            <div class="lefti" style="padding-left: 350px;font-size: 18px;font-weight: bold;">Cover Letter</div>
___________________________________________________________________________________________________________________
            <div class="lefti" style="padding-left: 200px;font-size: 18px;font-weight: bold;">CONTAINER BOOKING/EXPORT INFORMATION</div>
            <div class="basic_info">

                <div class="part1">
                    <table width="80%" >

                        <tr>
                            <td width="53%"><b>Booking #:</b>&nbsp;</td>
                             <td width="60%" class= "line_under" id="Address L1">{{isset($conti)? $conti->booking_number :''}}</td>
                        </tr>

                    </table>

                    <table width="80%">
                        <tr>
                            <td width="53%"><b>Steamship Line:</b></td>
                            <td width="60%" class= "line_under" id="Address L1">{{isset($conti)? $conti->steamship_line :''}}</td>

                        </tr>
                    </table>

                    <table width="80%">
                        <tr>
                            <td width="53%"><b>Vessel Departure Date:</b></td>
                            <td width="60%" class= "line_under" id="Phone Number">{{isset($conti)? $conti->etd_port_loading :''}}</td>

                        </tr>
                    </table>

                    <table width="80%">
                        <tr>
                            <td width="53%"><b>Terminal:</b></td>
                            <td width="60%" class= "line_under" id="Lot Number">{{isset($conti)? $conti->loading_terminal :''}}</td>
                        </tr>
                    </table>

                </div>


                <div class="part2">
                    <table width="100%">
                        <tr>
                            <td width="30%"><b>Container #:</b></td>
                            <td width="20%" class= "line_under" id="Year">{{isset($conti)? $conti->container_number :''}}</td>
                            <td width="30%"><b>SCAC Code:</b></td>
                            <td width="33%" class= "line_under" id="Color">{{isset($conti)? $conti->scac_code :''}}</td>
                        </tr>
                    </table>

                    <table width="100%">
                        <tr>
                            <td width="60%"><b>Vessel Name & Voyage#:</b></td>
                            <td width="38%" class= "line_under" id="Model">{{isset($conti)? $conti->vessel_name :''}} & {{isset($conti)? $conti->voyage_number :''}}</td>
                        </tr>
                    </table>

                    <table width="100%">
                        <tr>
                            <td width="50%"><b>US Port of Export:</b></td>
                            <td width="82%" class= "line_under" id="VIN">{{isset($conti)? $conti->port_loading :''}}</td>
                        </tr>
                    </table>

                    <table width="100%">
                        <tr>
                            <td width="60%"><b style="font-size: 10px;">City and Country of Ultimate Destination:</b></td>
                            <td width="82%" class= "line_under" id="License Number">{{isset($conti)? $conti->port_discharge :''}}</td>
                        </tr>
                    </table>

                </div>

                ___________________________________________________________________________________________________________________
                <div>

                    <table width="100%">

                        <tr>
                            <th class="biga" style="padding-left: 280px;">VEHICLE INFORMATION</th>
                        </tr>
                    </table>
                    <br 
                    >
                    <table width="95%">

                        <tr>
                            <td>YEAR</td>
                            <td>MAKE</td>
                            <td>MODEL</td>
                            <td>VIN NUMBER</td>
                            <td>TITLE NUMBER</td>
                            <td>STATE</td>
                            <td>VALUE</td>
                        </tr>
                        <?php $data=DB::table('tbl_bases')->join('vehicles','tbl_bases.vehicle_id','vehicles.id')->where('tbl_bases.container_id',isset($conti)?$conti->id : '')->get(); ?>
                        @foreach($data as $datum)
                            <tr>
                                <td >{{$datum->year}}</td>
                                <td >{{$datum->make}}</td>
                                <td >{{$datum->model}}</td>
                                <td >{{$datum->vin}}</td>
                                <td >{{$datum->title_number}}</td>
                                <td >{{$datum->title_state}}</td>
                                <td >{{$datum->vehicle_price}}</td>
                            </tr>
                        @endforeach


                        <tr>
                            <td colspan="7">ROLLOVER________  (Please check if a cover letter was previously validated)</td>
                        </tr>
                    </table>

                </div>
                ___________________________________________________________________________________________________________________
                <div class="lefti" style="padding-left: 260px;font-size: 18px;font-weight: bold;">EXPORTER INFORMATION</div>
                <div >
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="20%"><b>Exporter (USPPI) Name: </b></td>
                            <td width="60%" class= "line_under" id="Customer Name">{{isset($conti)?$conti->shipper_exporter : ''}}</td>
                        </tr>

                    </table>
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="15%"><b>U.S. Address: </b></td>
                            <td width="25%" class= "line_under" id="Customer Name">{{isset($conti)?$conti->shipper_street_address : ''}}</td>
                            <td></td>
                            <td width="20%" class= "line_under">{{isset($conti)?$conti->shipper_city : ''}}</td>
                            <td></td>
                            <td width="20%" class= "line_under">{{isset($conti)?$conti->shipper_state : ''}}</td>
                            <td></td>
                            <td width="20%" class= "line_under">{{isset($conti)?$conti->shipper_zip_code : ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Street</td>
                            <td></td>
                            <td>City</td>
                            <td></td>
                            <td>State</td>
                            <td></td>
                            <td>Zipcode</td>
                        </tr>

                    </table>
                    <br>
                    <table width="98%" >

                        <tr>
                            <td width="5%"><b>Phone: </b></td>
                            <td width="30%" class= "line_under" id="Customer Name">{{isset($conti)?$conti->shipper_phone_number : ''}}</td>
                            <td width="5%">Fax:</td>
                            <td width="30%" class= "line_under">{{isset($conti)?$conti->shipper_fax_number : ''}}</td>
                            <td width="5%">Email:</td>
                            <td width="40%" class= "line_under">{{isset($conti)?$conti->shipper_email_address : ''}}</td>
                        </tr>
                    </table>
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="34%"><b>Filing Agent/Freight Forwarder: </b></td>
                            <td width="30%" class= "line_under" id="Customer Name">{{isset($conti)?$conti->f_agent : ''}}</td>
                            <td width="8%">Contact:</td>
                            <td width="28%" class= "line_under">{{isset($conti)?$conti->f_poc : ''}}</td>
                        </tr>
                    </table>
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="46%"><b>Loading Location (If different from forwarder):  </b></td>
                            <td width="20%" class= "line_under" id="Customer Name">{{isset($conti)?$conti->port_loading : ''}}</td>
                            <td width="8%">Contact:</td>
                            <td width="30%" class= "line_under">{{isset($conti)?$conti->f_poc : ''}}</td>
                        </tr>
                    </table>
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="15%"><b>U.S. Address: </b></td>
                            <td width="25%" class= "line_under" id="Customer Name">{{isset($conti)?$conti->f_street_address : ''}}</td>
                            <td></td>
                            <td width="20%" class= "line_under">{{isset($conti)?$conti->f_city : ''}}</td>
                            <td></td>
                            <td width="20%" class= "line_under">{{isset($conti)?$conti->f_state : ''}}</td>
                            <td></td>
                            <td width="20%" class= "line_under">{{isset($conti)?$conti->f_zip_code : ''}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Street</td>
                            <td></td>
                            <td>City</td>
                            <td></td>
                            <td>State</td>
                            <td></td>
                            <td>Zipcode</td>
                        </tr>

                    </table>
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="5%"><b>Phone: </b></td>
                            <td width="30%" class= "line_under" id="Customer Name">{{isset($conti)?$conti->f_phone_number : ''}}</td>
                            <td width="5%">Fax:</td>
                            <td width="30%" class= "line_under">{{isset($conti)?$conti->f_fax_number : ''}}</td>
                            <td width="5%">Email:</td>
                            <td width="40%" class= "line_under">{{isset($conti)?$conti->f_email_address : ''}}</td>
                        </tr>
                    </table>

                    ___________________________________________________________________________________________________________________


                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="20%"><b>AES INFORMATION </b></td>
                            <td width="30%"  id="Customer Name"></td>
                            <td width="20%">ITN#:</td>
                            <td width="30%" class= "line_under">{{isset($conti)?$conti->aes_itn_number : ''}}</td>
                        </tr>
                    </table>
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="20%"><b>I certify under penalty of perjury under the laws of the United States of America (Title 18 U.S.C & 1001) that the foregoing is true and correct.  Title 18 U.S.C & 1001 prohibits making false statements, lying to or concealing information from a federal official by oral affirmation, written statement or mere denial.  </b></td>
                        </tr>
                    </table>
                    <br>
                    <table width="100%" >

                        <tr>
                            <td width="30%"><b>AUTHORIZED SIGNATURE: </b></td>
                            <td width="20%" class= "line_under" id="Customer Name"><?php $customer=DB::table('customers')->where('id',isset($signle_vehicle)? $signle_vehicle->customer_id : '')->get(); ?> @foreach($customer as $custo)&nbsp;&nbsp;{{$custo->customer_name}}&nbsp;  @endforeach</td>
                            <td></td>
                            <td width="10%" class= "line_under"></td>
                            <td></td>
                            <td width="10%" class= "line_under"></td>
                            <td></td>
                            <td width="10%" class= "line_under"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td width="30%">Exporter/Agent Name:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="20%">Date:</td>
                        </tr>
                    </table>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
 </div>


@endsection