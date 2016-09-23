@extends('admin/layout/master')


@section('title')
InfLara Movie | Category Index
@endsection


@section('pageHeading')
Category Index
@endsection


@section('breadcrumb')
	<li>
    <i class="icon-home"></i>
    <a href="index.html">Home</a>
    <i class="fa fa-angle-right"></i>
	</li>
<li>
    <span>Category</span>
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
                        <span class="caption-subject bold uppercase"> Manage Categories</span>
                    </div>
                    <div class="actions">
                        <a href="../admin/category/create" class="btn blue btn-circle btn-outline sbold">
                            <i class="fa fa-plus"></i> Add </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Parent ID</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                       
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id }}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->parent_id}}</td>
                                <td>
                                <form action="/admin/category/status/{{$category->id}}" method="post">
                                <input type="hidden" name="_method" value="PUT"> 
                                @if($category->category_status==1)
                                   <button type="submit" class="btn btn-success btn-xs">Active</button>
                                    @else
                                    <button type="submit" class="btn btn-danger btn-xs">Deactive</button>

                                    @endif</td>
                                    </form>
                                <td>
                                   <form action="/admin/category/{{$category->id}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                 <a href="/admin/category/{{ $category->id }}/edit"
                                           class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Edit </a>
                                   <button type="submit" class="btn btn-outline btn-circle dark btn-sm red">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button> 
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
@endsection

 