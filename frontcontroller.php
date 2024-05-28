<?php

class FrontController extends Controller{
    // @return \Illuminate\Http\Response
    @return \Illuminate\Http\Response
    public function index(){
        $kategori=Kategori::all();
        $menus=Menu::paginate(3);

        return view('menu',[
            'kategoris'=>$kategoris,
            'menus'=>$menus
        ]);
    }
} @return Response
public function create(){

}
public function show($id){
    $kategori=Kategori::all();
    $menus=Menu::where('idkategori', $id)->get();
    return ('$id')
    return view('kategori',[
        'kategoris'=>$kategoris,
        'menus'=>$menus
    ]);
}
@return void
public function boot(){
    Paginator::useBootstrap();
}
public function register(){
    $kategoris=Kategori::all();
    return view('register',['kategoris'=>$kategoris]);
}


?>