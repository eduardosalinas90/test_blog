<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use Debugbar;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        // Debugbar::disable();
    }
    public function index()
    {
        $articles = Article::orderBy('id','DESC')->paginate(5);
        $articles->each(function($articles){

            $articles->category;
            $articles->user;
        });

        return view('admin.articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name','ASC')->pluck('name', 'id');
       return view('admin.articles.create')
       ->with('categories',$categories)
       ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $article = new Article($request->all());
        $article->user_id = 1;
        $article->save();
        $article->tags()->sync($request->tag_id);
        return redirect('admin/articles/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->category;

        $categories = Category::orderBy('name','DESC')->pluck('name','id');
        $tags = Tag::orderBy('name','DESC')->pluck('name','id');
        $my_tag = $article->tags->pluck('id')->ToArray();

        return view('admin.articles.edit')
        ->with('article',$article)
        ->with('categories',$categories)
        ->with('tags',$tags)
        ->with('my_tag',$my_tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();
        $article->tags()->sync($request->tag_id);
        return redirect('admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
