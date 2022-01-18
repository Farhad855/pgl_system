			<table class="table table-bordered">
				<thead class="bg-info dataTable" id="table-2">
					<tr>
						<th>#</th>
                        <th>Photo</th>
                        <th>Company</th>
                        <th>Customer ID</th>
                        <th>Company POC Name</th>
                        <th>Phone</th>
                        <th>Email Address</th>
                        <th>Physical Address</th>
                        <th>Status</th>
                        <th>View Customer</th>
                        <th>Edit</th>
                        <th>Del</th>
					</tr>
				</thead>
				<tbody >
					<?php $id =1; ?>
					@foreach($customers as $customer)
					<tr id="searchBody">
						<td><?=$id++; ?></td>
                       <td>
                       	<span class="avatar box-32">
                       	<img src="{{ asset('images/',$customer->photo) }}" onerror="this.src='{{asset('img/avatars/profile.png')}}'">
                       	</span>
                       </td>
	                    <td>{{@$customer->name}}</td>
	                    <td>{{$customer->customer_uniqe_id}}</td>
	                    <td>{{$customer->customer_name}}</td>
	                    <td>{{$customer->customer_phone}}</td>
	                    <td>{{$customer->email}}</td>
	                    <td>
	                        {{$customer->customer_address}}&nbsp;,&nbsp;{{$customer->comp_city}}&nbsp;,&nbsp;{{$customer->zip_code}},&nbsp;{{$customer->country}}
	                    </td>
	                    <td>
	                        @if($customer->status==0)
	                            <span class="tag tag-danger">De Active</span>
	                        @else
	                            <span class="tag tag-primary">Active</span>
	                        @endif
	                    </td>
	                    <td>
	                        <a href="{{url('view_customer',$customer->id)}}" class="btn btn-info btn-circle"><i class="fa fa-eye"></i></a>
	                    </td>
	                   <td>
		                   	<a href="#edit_customer{{$customer->id}}" class="btn btn-primary btn-circle" data-toggle="modal"><span class="fa fa-pencil"></span>
		                   	</a>
		                </td>
		                <td>
		                   	<a  class="btn btn-warning btn-circle" onclick="javascript:return confirm('Are you sure you want to delete ?')" href="{{route('delete_company_admin',$customer->id)}}"><span class="fa fa-trash"></span>
		                   	</a>
		                </td> 
					</tr>
					<!-- add company modal -->
					<div class="modal fade small-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="edit_customer{{$customer->id}}">
						<div class="modal-dialog modal-md">
							<form class="form" action="{{route('edit_customer_admin')}}" method="post">
								@csrf
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title">Add company</h4>
									</div>
									<div class="modal-body">
										
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th style="width: 10px">#</th>
                        <th>Photo</th>
                        <th>Company</th>
                        <th>Customer ID</th>
                        <th>Company POC Name</th>
                        <th>Phone</th>
                        <th>Email Address</th>
                        <th>Physical Address</th>
                        <th>Status</th>
                        <th>View Customer</th>
                        <th>Edit</th>
                        <th>Del</th>
					</tr>
				</tfoot>
			</table>
			@if(!empty($customers))
			{{ $customers->appends(Request::All())->links()}}
			@endif
		</div>
	</div>
</div>
<!-- add company modal -->
@include('admin.customer.add_customer')