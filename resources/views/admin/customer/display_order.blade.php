  
@extends('admin/main/master');
@section('content')
   <!-- page content -->
   <div class="right_col" role="main">
   <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 972px;">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending" aria-label="Order ID#: activate to sort column descending">Order ID#</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 231px;" aria-label="Customer Name: activate to sort column ascending">Customer Name</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 111px;" aria-label="Order Total: activate to sort column ascending">Order Total</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 56px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 81px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                      </thead>
                      <tbody>
                     <?php foreach ($all_latest_orders as $all_latest_order) {
                        if ($all_latest_order->id % 2 != 0) { ?>
                     
                     <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">{{$all_latest_order->id}}</td>
                          <td>{{$all_latest_order->name}}</td>
                          <td>{!! str_limit($all_latest_order->order_total) !!} TK </td>
                          <td>{{$all_latest_order->order_status}} </td>
                          
                          <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/order/details/{{$all_latest_order->id}}"><span class="glyphicon glyphicon-edit"></span> Details</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/order/details/{{$all_latest_order->id}}" onclick="return confirm('Are Your Sure')"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                                <li class="divider"></li>
                                <li><a href="/adminpanel/order/success/{{$all_latest_order->id}}" onclick="return confirm('Are Your Sure')"><span class="glyphicon glyphicon-camera"></span> Success</a>
                                </li>
                                
                              </ul>
                            </div></td>
                        </tr>
                        <?php 
                    } else { ?>


                        <tr role="row" class="even">
                        <td tabindex="0" class="sorting_1">{{$all_latest_order->id}}</td>
                          <td>{{$all_latest_order->name}}</td>
                          <td>{!! str_limit($all_latest_order->order_total) !!}  TK</td>
                          <td>{{$all_latest_order->order_status}} </td>
                          
                          <td><div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="/adminpanel/order/details/{{$all_latest_order->id}}"><span class="glyphicon glyphicon-edit"></span> Details</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/adminpanel/order/details/{{$all_latest_order->id}}" onclick="return confirm('Are Your Sure')"> <span class="glyphicon glyphicon-trash"></span> Remove</a>
                                </li>
                                
                                <li class="divider"></li>
                                <li><a href="/adminpanel/order/success/{{$all_latest_order->id}}" onclick="return confirm('Are Your Sure')"><span class="glyphicon glyphicon-camera"></span> Success</a>
                                </li>
                                
                              </ul>
                            </div></td>
                        </tr>
                        <?php 
                    }
                } ?>

                       </tbody>
                    </table>
  
  
        <!-- /page content -->
        @stop