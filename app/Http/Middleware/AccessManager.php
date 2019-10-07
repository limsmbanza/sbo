<?php

namespace App\Http\Middleware;

use Closure;
use App\ModelsAccessList;
use App\ModelsFeature;
use Illuminate\Support\Facades\Route;

class AccessManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	$routeName=ModelsFeature::whereName(Route::currentRouteName())->get();
	
	
	if($routeName->isEmpty())
	{
		abort('404','Page non trouvée.');	
	}else
	{

		 $accessLists=auth()->user()
			            ->accessList()->first()
			            ->access_list;
		
		 $accessLists=trim($accessLists,'[]');

	         if(preg_match('/,{1,}/',$accessLists))
	         {
		 	$explosedString=explode(',',$accessLists);
				
			if(in_array(intval($routeName[0]->id),$explosedString))
			{
				return $next($request);
			}else
			{
				abort('403','Vous ne disposez pas d accès réquis pour accèder à cette page');
			}
		 }else
		 {
			if($routeName[0]->id == intval($accessLists))
			{
				return $next($request);
			}else
			{
				abort('403','Vous ne disposez pas d accès réquis pour accèder à cette page');
			}
		 }
			
	}

	/*	
	if(!$routeName->isEmpty())
	{
	
	     
	     $accessLists=trim($accessLists,'[]');
	     $explosedString=explode(',',$accessLists);
	     dd($explosedString);		
	}    
	*/
	/*  
	     if(preg_match('/,{1,}/',$accessLists))
	     {
		$explosedString=explode(',',$accessLists);
		
		foreach($explosedString as $explosed)
		{
			if($explosed === (int) $routeName[0]->id)
			{
				return $next($request);					
			}else
			{
				abort('403','Vous ne disposez pas d accès réquis pour accèder à cette page');
			}
		}
	     }else
	     {
		if($routeName[0]->id === (int) $accessLists)
		{
			 return $next($request);
		}else
		{
			abort('403','Vous ne disposez pas d accès réquis pour accèder à cette page');	
		}
	     }
	*/
/*		 
	}else
	{
	 
   
	  
	}

    
    }
  */ 
	//return $next($request);
    }

}

