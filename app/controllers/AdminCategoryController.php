<?php

class AdminCategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/* Old ci fashion way to retrieve record from database*/

		/*$data['categories']=DB::table('categoriestable')->get();
		return View::make('/admin/category/index',$data);
		*/

		/*Now we will perform Laravel Way to perform a retrive of 
			data from database */
			$categories = Category::get();
		return View::make('admin.category.index')
							->with('categories',$categories);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$parentCategories=Category::where('parent_id',0)->get();
		return View::make('admin.category.create')
		     ->with("parentCategories",$parentCategories);
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Category::create([
			'category_name'=>Input::get('category_name'),
			'slug'=>Str::slug(Input::get('category_name')),
			'description'=>Input::get('description'),
			'parent_id'=>Input::get('parent_id'),
			'category_status'=>1
			]);
			return Redirect::to('/admin/category');


		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category=Category::find($id);

		$parentCategories=Category::where('parent_id',0)->get();
		return View::make('admin.category.edit')
		                 ->with('category',$category)
		                ->with('parentCategories',$parentCategories);		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$category=Category::find($id);
		if ($category) {
			$category->update([
			'category_name'=>Input::get('category_name'),
			'slug'=>Str::slug(Input::get('category_name')),
			'description'=>Input::get('description'),
			'parent_id'=>Input::get('parent_id')
				]);
		}
		return Redirect::to('/admin/category');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category=Category::find($id);
		if ($category) {
			$category->delete();
		}
		return Redirect::to('/admin/category');
	}

	public function status($id)
	{
		$category=Category::find($id);
		if($category){
			$newStatus=($category->category_status==1)?0:1;
			$category->update([
				'category_status'=>$newStatus
				]);
		}

		return Redirect::to('/admin/category');
	}


}
