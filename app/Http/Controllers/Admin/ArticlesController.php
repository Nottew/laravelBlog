<?php


namespace App\Http\Controllers\Admin;


use App\Entities\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index ()
    {

    }

    public function addArticle ()
    {
        $objCategory = new Category();
        $categories = $objCategory->get();


        return view('admin.articles.add', ['categories' => $categories]);
    }
    public function addRequestArticle(Request $request)
    {
        dd($request->all());
    }

    public function editArticle (int $id)
    {

    }

    public function deleteArticle (Request $request)
    {

    }
}