<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\DataModel;
use Illuminate\Support\Facades\Auth;

class QuizCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $model = new DataModel();


        $userId = Auth::user()->crm_id;
    
        $user = $model->get('users/' . $userId);
    
        if ($user->houseId === null && !$request->is('quiz')) {
            // User doesn't have a houseId and is not trying to access /quiz, redirect them to /quiz
            return redirect('/quiz');
        }
    
        return $next($request);
    }
    
}
