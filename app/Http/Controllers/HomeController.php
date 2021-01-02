<?php

namespace App\Http\Controllers;
use App\berita;
use App\categoris_id;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function index()
    {
        $article = berita::all();
    
        return view ('home',['article'=>$article]);
    }
    public function politik()
    {
        $politik = berita::where('categoris_id','2')->get();
    
        return view ('politik',['politik'=>$politik]);
    }
    public function olahraga()
    {
        $article = berita::where('categoris_id','3')->get();
    
        return view ('olahraga',['article'=>$article]);
    }
    public function teknologi()
    {
        $article = berita::where('categoris_id','4')->get();
    
        return view ('teknologi',['article'=>$article]);
    }
    public function ekonomi()
    {
        $article = berita::where('categoris_id','5')->get();
    
        return view ('ekonomi',['article'=>$article]);
    }

    public function getID($id){
        $article_id = berita::find([$id]);
        return view ('article',['articles'=> $article_id]);
     }
     public function tampil(){
     $category =categoris_id::all();
       // return dd($category);
     return view('create',['category'=>$category]);
     }
     public function create(Request $request)
 {
   
        $image_name = $request->file('img');
        $file = time().'.'.$image_name->getClientOriginalExtension();
        $path = $image_name->move('img',$file); 
       
    berita::create([

        'categoris_id'=>$request->input('categoris_id'),
        'judul' => $request->input('judul'),
        'berita' => $request->input('berita'),
        'img' => $file,
        'id_user' => '1'
        ]);
        
    return redirect('/home');
    }
    public function edit($id){

    $berita=berita::where('id',$id)->get();
    $categoris_id=categoris_id::all();
    return view('edit',compact('berita','categoris_id'));

}
public function proUp(Request $request)
{
  
      
   $ad=berita::where('id',$request->input('id'))->first();

       $ad->categoris_id=$request->input('categori_id');
       $ad->judul = $request->input('judul');
       $ad->berita = $request->input('berita');
       $ad->img = $request->input('img');
       $ad->id_user = '1';
      
   
   
   $ad->save();
   return redirect('/home');
}

}