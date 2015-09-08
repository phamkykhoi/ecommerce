@extends('admin.layout')

@section('content')
<div class="page-body">
	<div class="row">
	    <div class="col-xs-12">
	        <div class="widget">
	            <div class="widget-body">
	                <div>
	                    <form class="form-horizontal form-bordered" role="form">
	                        <div class="form-group">
	                            <label for="inputEmail3" class="col-sm-2 control-label no-padding-right">Email</label>
	                            <div class="col-sm-10">
	                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label for="inputPassword3" class="col-sm-2 control-label no-padding-right">Password</label>
	                            <div class="col-sm-10">
	                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label for="inputPassword3" class="col-sm-2 control-label no-padding-right">Password</label>
	                            <div class="col-sm-10">
	                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password confirmation">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-sm-12">
	                                <button type="submit" class="btn btn btn-danger pull-right">Cancel</button>
	                                <button type="submit" class="btn btn-palegreen pull-right" style="margin-right: 5px;">Save</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection