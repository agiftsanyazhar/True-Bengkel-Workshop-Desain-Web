<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'True Bengkel';

        return view('landing-page.index', $data);
    }

    public function products()
    {
        $data['title'] = 'Products';

        return view('landing-page.products', $data);
    }

    public function productsDetail()
    {
        $data['title'] = 'Products Detail';

        return view('landing-page.products-detail', $data);
    }

    public function customerService()
    {
        $data['title'] = 'Customer Serivce';

        return view('landing-page.customer-service', $data);
    }

    public function gallery()
    {
        $data['title'] = 'Gallery';

        return view('landing-page.gallery', $data);
    }
}
