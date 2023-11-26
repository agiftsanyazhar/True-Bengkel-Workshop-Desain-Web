<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Http,
    Log,
};

class AuthenticatedSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Sign In';

        return view('auth.login', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // dd($request);
            $email = $request->email;
            $password = $request->password;

            $response = Http::post('http://true-bengkel-v2.test/api/login', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'form_params' => [
                    'email' => $email,
                    'password' => $password,
                ],
            ]);

            $contents = $response->getBody()->getContents();
            $result = json_decode($contents, true);

            dd($result);

            $status = 'success';
            $message = 'Welcome!';

            return redirect()->route('admin.dashboard.index')->with($status, $message);
        } catch (\Exception $e) {
            $status = 'danger';
            $message = 'Sorry! Try again later. ' . $e->getMessage();

            Log::error($e->getMessage());

            return redirect()->back()->with($status, $message);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        dd($request);
        try {
            Http::post(
                url('http://true-bengkel-v2.test/api/login'),
                [$data]
            )->object();

            $status = 'success';
            $message = 'Welcome!';

            return redirect('/login')->with($status, $message);
        } catch (\Exception $e) {
            $status = 'danger';
            $message = 'Sorry! Try again later. ' . $e->getMessage();

            Log::error($e->getMessage());

            return redirect()->back()->with($status, $message);
        }
    }
}
