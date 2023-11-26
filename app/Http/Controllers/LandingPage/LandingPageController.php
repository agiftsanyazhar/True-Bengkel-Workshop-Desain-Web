<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    private function getData($endpoint)
    {
        return Http::get("http://true-bengkel-v2.test/api/{$endpoint}")->object();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'True Bengkel';

        $about = $this->getData('about');
        $brand = $this->getData('brand');
        $sparePart = $this->getData('spare-part');
        $pegawai = $this->getData('pegawai');
        $gallery = $this->getData('gallery');

        $data['about'] = $about->data[0];
        $data['brand'] = $brand->data;
        $data['sparePart'] = $sparePart->data;
        $data['pegawai'] = $pegawai->data;
        $data['gallery'] = $gallery->data;

        return view('landing-page.index', $data);
    }

    public function products()
    {
        $data['title'] = 'Products';

        return view('landing-page.products', $data);
    }

    public function productsDetail($id)
    {
        $data['title'] = 'Products Detail';

        $sparePart = Http::get(url('http://true-bengkel-v2.test/api/spare-part/detail/' . $id))->object();

        $data['sparePart'] = $sparePart->data[0];

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
