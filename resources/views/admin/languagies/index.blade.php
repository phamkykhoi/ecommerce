@extends('admin.layout')

@section('content')
<div class="page-body">
	 <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="widget">
                    	<div class="widget-header bordered-top bordered-palegreen">
                            <span class="widget-caption">Form</span>
                        </div>
                        <div class="widget-body">
                            <div class="collapse in">
                                <form class="form-horizontal form-bordered" role="form">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label no-padding-right">
                                        	Language
                                        </label>
                                        <div class="col-sm-4">
                                            <select class="form-control" class="col-sm-6" placeholder="Email">
                                            	<option>Test 1</option>
                                            	<option>Test 1</option>
                                            	<option>Test 1</option>
                                            	<option>Test 1</option>
                                            	<option>Test 1</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label no-padding-right">
                                        	Logo small
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label no-padding-right">
                                        	Logo Lager
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-palegreen">Create</button>
                                            <button type="submit" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="widget">
                    	<div class="widget-header bordered-top bordered-palegreen">
                            <span class="widget-caption">Danh sách ngôn ngữ</span>
                        </div>
                        <div class="widget-body">
                            <div class="collapse in">
                                <table class="table table-hover table-striped table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Logo small
                                            </th>
                                            <th>
                                                Logo lager
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Steve
                                            </td>
                                            <td>
                                                Jobs
                                            </td>
                                            <td>
                                                steve
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Bill
                                            </td>
                                            <td>
                                                Gates
                                            </td>
                                            <td>
                                                billy
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Mark
                                            </td>
                                            <td>
                                                Zuckerberg
                                            </td>
                                            <td>
                                                markz
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Marissa
                                            </td>
                                            <td>
                                                Mayer
                                            </td>
                                            <td>
                                                marim
                                            </td>
                                        </tr>
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
@endsection