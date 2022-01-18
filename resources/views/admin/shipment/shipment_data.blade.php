			<table class="table table-bordered">
				<thead class="bg-info">
					<tr>
						<th>#</th>
						<th>Edit</th>
						<th>BOL</th>
						<th>DR</th>
						<th>Photo link</th>
						<th>Booking no</th>
						<th>Container no</th>
						<th>Note</th>
						<th>Customer note</th>
						<th>Company</th>
						<th>Size</th>
						<th>Loading port</th>
						<th>Discharge port</th>
						<th>Number of unites</th>
						<th>Status</th>
						<th>Loading date</th>
						<th>ETD</th>
						<th>ETA</th>
						<th>Track container</th>
						<th>Invoice</th>
						<th>Amount</th>
						@if($status==1)
						<th>Release document</th>
						@endif
						@if($status==10)
						<th>Customer form</th>
						@endif
						@if($status !=1 || $status !=2 || $status!=10)
						<th>Vessel name</th>
						@endif
						@if($status==10)
						<th>Delete</th>
						<th>Duplicate</th>	
						@endif
					</tr>
				</thead>
				<tbody >
					<?php $id =1; ?>
					@foreach($shipments as $item)
					<tr id="searchBody">
						<td><?=$id++; ?></td>
                            <td>
                            	<a href="" class="btn btn-info btn-circle waves-effect waves-light"><span class="fa fa-pencil"></span>
                            	</a>
                            </td>
                            <td>
                            	<a target="_blank" href="{{route('bol_customer',$item->id)}}">BOL</a>
                            </td>
                            <td>
                            	<a href="{{url('dock_recepit',$item->id)}}">DR</a>
                            </td>
                            <td>
                              <?php
                              $label='tag-info';
                               if(@$item->photo_link=='') $label='tag-warning';?>
                                <a href="{{@$item->photo_link}}" target="_blank" style="text-align: center; font-size: 20px;"><span class="ti-image  <?=$label?>"></span></a>
                            </td>
                            <td>{{$item->booking_number}}</td>
                            <td>{{$item->container_number}}</td>
						    @if(@$item->actions=='')
                            <td></td>
                            @else
                            <td  style="background-color:#dd4b39;"><span style="padding:5px ;color:white;">{{$item->actions}}<span/></td>
                            @endif
                            <td>{{$item->customer_note}}</td>
						    <td>{{$item->company_name}}</td>
                            <td>{{$item->c_size}}</td>
                            <td>{{$item->port_loading}}</td>
                            <td>{{$item->port_discharge}}</td>
                            <td>{{$item->n_units_load}}</td>
							<td>
                                <?php 
                                if($item->status==0) { ?>
                                    <span class="tag tag-info">At Loading</span>
                                <?php } elseif($item->status==1) { ?>
                                    <span class="tag tag-warning">On the way</span>
                                <?php } elseif($item->status==2) { ?>
                                    <span class="tag tag-success">Arrived</span>
                                <?php } elseif($item->status==3) { ?>
                                    <span class="tag tag-danger">Pending</span>
                                <?php } elseif($item->status==4){ ?> 
                                	<span class="tag tag-primary">Checked</span> 
                                <?php } elseif($item->status==5){ ?>
                                	<span class="tag tag-success">Final Checked</span> 
                                <?php } ?>
                            </td>
                            <td>{{$item->loading_date}}</td>
                            <td>{{$item->etd_port_loading}}</td>
                            <td>{{$item->eta_port_discharge}}</td>
                            <td>track_container</td>
                            <td>{{$item->inv_number}}</td>
							<td>{{$item->amount}}</td>
							@if($status==1)
							<td><a href="">RD</a></td>
							@endif
							@if($status==10)
                            <td><a href="{{url('custom_form',$item->id)}}" >Custom Form</a>
                            </td>
                            @endif
                            @if($status!=1 or $status!=2 or $status!=10)
                            <td>{{$item->vessel_name}}</td>
                            @endif
                            @if($status==10)
                            <td><a href="" class="btn btn-warning btn-circle waves-effect waves-light"><span class="fa fa-trash"></span></a>
                            </td>
                            <td>
                            	<a href="" class="btn btn-info btn-rounded">Duplicate</a>
                            </td>
                            @endif

                            
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>#</th>
						<th>Edit</th>
						<th>BOL</th>
						<th>DR</th>
						<th>Photo link</th>
						<th>Booking no</th>
						<th>Container no</th>
						<th>Note</th>
						<th>Customer note</th>
						<th>Company</th>
						<th>Size</th>
						<th>Loading port</th>
						<th>Discharge port</th>
						<th>Number of unites</th>
						<th>Status</th>
						<th>Loading date</th>
						<th>ETD</th>
						<th>ETA</th>
						<th>Track container</th>
						<th>Invoice</th>
						<th>Amount</th>
						@if($status==1)
						<th>Release document</th>
						@endif
						@if($status==10)
						<th>Customer form</th>
						@endif
						@if($status !=1 || $status !=2 || $status!=10)
						<th>Vessel name</th>
						@endif
						@if($status==10)
						<th>Delete</th>
						<th>Duplicate</th>	
						@endif
					</tr>
				</tfoot>
			</table>
			@if(!empty($shipments))
			{{ $shipments->appends(Request::All())->links()}}
			@endif
		</div>
	</div>
</div>
