<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Article;

class ArticleController extends Controller
{
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
        $article = Article::findOrFail($id);
        //dd($article);
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
        $req = $request->all();
        $req['user_id'] = '1';
        Article::create($req);
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
        return redirect('/articles');
    }
}
