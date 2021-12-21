@extends('admin.layouts.app')
@section('title', 'מרתון')
@section('content')
<?php 
$is_logged_in = session()->get('admin_logged_in');
if(!isset($is_logged_in) && $is_logged_in != '1'){
    return redirect()->route('admin.adminLogin')->send();
}
?>
<div class="content-page">
	<div class="content">
		<!-- Start Content-->
        <div class="container-fluid"> 
            <!-- start page title -->
            <div class="row">
        		<div class="col-12">
                	<div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">בית</a></li>
                                <li class="breadcrumb-item active">מרתון</li>
                        	</ol>
                        </div>
                    	<h4 class="page-title">מרתון</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body recentuser eventcourse ">
                            <div class="row align-items-center" style="direction:rtl">
                                <div class="col-md-12 text-right">
                                <h4 class="header-title mb-3">מרתון</h4>
                                </div>
                            </div>
                            <div class="tab-pane " id="grouplesson">
                                <div class="table-responsive">
                                    <table id="basic-datatable1" class="  table table-borderless table-hover table-nowrap table-centered m-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>שם קורס</th>
                                                <th>משתמשים רשומים</th>
                                                <th>קבצים</th>
                                                
                                            </tr>
                                        </thead>
                                            @foreach($MarathonQuestion as $marathon)
                                            <tr> 
                                                <td>{{ $marathon['course_name'] }}</td>
                                                <td><a href="{{ url('assets/marathon-questions/').'/'.$marathon['file'] }}" download>הורד</a></td>
                                                <td>@if(isset($marathon['first_name']) && isset($marathon['last_name']) ) {{ $marathon['first_name'] .' '.$marathon['last_name'] }} @endif</td>
                                            </tr>  
                                            @endforeach                                      
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>
</div>
<!--content-->

@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
     
    });
</script>
@endsection