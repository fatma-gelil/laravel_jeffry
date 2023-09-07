<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use Illuminate\Support\Facades\File;
	use mysql_xdevapi\Exception;

	class post
	{
		public static function all(){
			$files=File::files(public_path ("posts/"));
			return array_map (function ($file){
				return $file->getContents();
			},$files);
		}
		public static function find($slug)
		{
			//$post =file_get_contents($path= __DIR__."/../resources/posts/{$slug}.html");
           //base_path();
	      if (! file_exists($path=public_path("posts/{$slug}.html"))){
			  throw new ModelNotFoundException();
		     // return redirect('/');
		    //abort(404);
		    //dd("file doesn't exist");
	       }
	     return cache()->remember("posts.{$slug}", 10,fn()=>file_get_contents($path));
		}

	}