<?php
/**
* 
*/
class Category extends Eloquent
{
	  protected $fillable = ['category_name', 
	  						'slug', 
	  						'description',
	  						'parent_id',
	  						'category_status'];
	  // protected $table ='category_table';
	
}