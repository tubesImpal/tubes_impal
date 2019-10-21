<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardC extends Controller {

    public function home(){
        return view('dashboard/home');
    }

    public function ab(){
        return view('dashboard/about');
    }

    public function fa(){
        return view('dashboard/faq');
    
    }


}

?>
