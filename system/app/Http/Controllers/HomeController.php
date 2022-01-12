<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Produk;
class HomeController extends Controller{

    function showhome(){
        return view('frontview.home');
    }

    function showabout(){
        return view('frontview.about');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showlogin(){
        return view('login');
    }

    function showregistrasi(){
        return view('registrasi');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showpelanggan(){
        return view('backview.pelanggan');
    }

    function showproduct(){
        return view('backview.product');
    }

    function product($product, $hargaMin = 2000, $hargaMax = 30000){
        if($product == 'sosis bakar'){
            echo "Tampilkan Produk Sosis Bakar";
        }elseif($product == 'Bakso'){
            echo "Produk Bakso";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }

    public function testCollection()
    {
    $list_produk = Produk::all();
    $data['list'] = Produk::Paginate(10);
    return view('test_collection', $data);

    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('backview.test-ajax', $data);
    }
}