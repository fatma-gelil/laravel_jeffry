<?php

	namespace App\Models;

	class post
	{
		public static function find($slug)
		{
			//$post =file_get_contents($path= __DIR__."/../resources/posts/{$slug}.html");
           //base_path();
	      if (! file_exists($path=resource_path("posts/{$slug}.html"))){
		    return redirect('/');
		    //abort(404);
		    //dd("file doesn't exist");
	       }
	     return cache()->remember("posts.{$slug}", 10,fn()=>file_get_contents($path));
		}

	}