@extends('admin/layout/master')

@section('pageHeading')
Category Index
@endsection

@section('breadcrumb')
	<li>
    <i class="icon-home"></i>
    <a href="/admin">Home</a>
    <i class="fa fa-angle-right"></i>
	</li>
<li>
 <a href="/admin/category">Category</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Create</span>
</li>

@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-home"></i>
                        <span class="caption-subject bold uppercase"> Add New Category</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->

                    <form action="/admin/category" method="post">
                    <input type="hidden" name="_token" value="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="category_name" id="category_name" class="form-control" value="">
                                        <span class="help-block bold"><i class="fa fa-info"></i></span>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        <span class="help-block bold"><i class="fa fa-info"></i></span>

                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="control-label">Parent Categories</label>
                                   
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option value="">- Select Parent Category -</option>
                                           @foreach($parentCategories as $parentCategory)
                                            <option value="{{$parentCategory->id}}">{{$parentCategory->category_name}}</option>

                                           @endforeach 
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/admin/category" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
@endsection

 