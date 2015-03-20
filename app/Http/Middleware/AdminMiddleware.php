<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $admin;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->admin = $auth;
    }

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if(Auth::user()->role != 'administrator')
        {
            return response('Unauthorized.', 401);

        } else {

            return $next($request);

        }

        return abort(404);
	}

}
