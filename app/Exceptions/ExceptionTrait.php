<?php

namespace App\Exceptions;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;


trait ExceptionTrait
{
    public function apiException($request,$e)
    {
       
            if ($e instanceof ModelNotFoundException) {
                return response()->json([
                    'errors'=>'Product Model not found'
                ],404);
               }
        
        
            if ($e instanceof NotFoundHttpException) {
                return response()->json([
                    'errors'=>'Incorect route'
                ],Response::HTTP_NOT_FOUND);
               }
               return parent::render($request, $e);
            }
            
          
    }
