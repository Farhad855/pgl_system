
			<table class="table table-bordered">
				<thead class="bg-primary">
					<tr>
						<th>#</th>
						<th>Edit</th>
						<th>Select</th>
						<th>Vehicle Desc</th>
						<th>Vin No</th>
						<th>Lot No</th>
						<th>Auction city</th>
						<th>Auction</th>
						<th>Towing company</th>
						<th>Company</th>
						<th>Purchase date</th>
						<th>Days fm purchase</th>
						<th>Reported date</th>
						<th>Payment date</th>
						<th>Posted by in CD</th>
						<th>Pick up due date</th>
						<th>Pick up date</th>
						<th>Pick up days fm puchase</th>
						<th>Pick up days fm report</th>
						<th>Point of loading</th>	
					</tr>
				</thead>
				<tbody >
					<?php $id =1; ?>
					@foreach($vehicles as $veh)
					<tr id="searchBody">
						<td>{{$id++}}</td>
						<td>
                            <a href="{{url('edit',$veh->id).'#step-2'}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                        	<input type="checkbox" name="">
                        </td>
						<td>{{$veh->year}}&nbsp;{{$veh->make}}&nbsp;{{$veh->model}}&nbsp;{{$veh->color}}</td>
						<td><span class="tag tag-info">{{$veh->vin}}</span></td>
						<td><span class="tag tag-warning">{{$veh->lot_number}}</span></td>
						<td>{{$veh->auction_city}}</td>
                        <td>{{$veh->auction}}</td>
                        <td>{{$veh->towingcompany}}</td>
                        <td><span class="tag tag-success">{{$veh->company_name}}<span></td>
                        <td>{{$veh->purchase_date}}</td>
                        <td>
                            <?php 
                            $now=strtotime(date('Y-m-d'));
                            $purchasedata=strtotime($veh->purchase_date);
                             $diff = $now-$purchasedata;
                             echo round($diff / (60 * 60 * 24));
                             ?> 
                        <td>{{$veh->rpgldate}}</td> 
                        <td>{{$veh->dpicd}}</td>
                        <td>{{$veh->cdname}}</td>
                        <td>{{$veh->pickup_due_date}}</td>
                        <td>{{$veh->pickup_date}}</td>
                        <td>{{$veh->number_days_pur}}</td>
                        <td>{{$veh->number_days_rep}}</td>
						<td><span class="tag tag-success">{{@$veh->location}}</span></td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>#</th>
						<th>Edit</th>
						<th>Select</th>
						<th>Vehicle Desc</th>
						<th>Vin No</th>
						<th>Lot No</th>
						<th>Auction city</th>
						<th>Auction</th>
						<th>Towing company</th>
						<th>Company</th>
						<th>Purchase date</th>
						<th>Days fm purchase</th>
						<th>Reported date</th>
						<th>Payment date</th>
						<th>Posted by in CD</th>
						<th>Pick up due date</th>
						<th>Pick up date</th>
						<th>Pick up days fm puchase</th>
						<th>Pick up days fm report</th>
						<th>Point of loading</th>	
					</tr>
				</tfoot>
			</table>
			@if(!empty($vehicles))
			{{ $vehicles->links()}}
			@endif
		</div>
	</div>
</div>