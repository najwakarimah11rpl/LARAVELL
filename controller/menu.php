<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     *Display a listing of the resource.
     * @return\Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "<h1>ini index menu</h1>"        
    }
    
    @param \App\Models\Menu $menu
    @return \Illuminate\Http\Response
    
    public function edit($id);
}


?>
