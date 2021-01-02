<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\berita;
class ArticlesController extends Controller
{
     public function getID($id){
        $article_id = berita::find([$id]);
        return view ('articles',['articles'=> $article_id]);
     }
}