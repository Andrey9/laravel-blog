<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Set middleware for article
     *
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Show all articles
     *
     * @return $this
     */
    public function index()
    {
        $articles = Article::all();
        //dd($articles);
        return view('article.index')->with(['articles' => $articles]);
    }

    /**
     * Show article by id
     *
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $article = Article::with('comments')->findOrFail($id);
        return view('article.show')->with(['article' => $article]);
    }

    /**
     * Show articles creating form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Stores new article
     *
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
        return redirect('/articles');
    }

    /**
     * Show article editing form
     *
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('manage',$article);
        //dd($article);
        return view('article.edit')->with(['article' => $article]);
    }

    /**
     * Saves updated article
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());
        return redirect('/articles/'.$article->id);
    }

    /**
     * Delete article
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('manage',$article);
        Article::destroy($id);
        return redirect('/articles');
    }
}
