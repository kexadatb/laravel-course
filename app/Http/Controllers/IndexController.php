<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\User;
use App\Model\Post;
use App\Model\Comment;

class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $john   = new User( 1, "John" );
        $petter = new User( 2, "Petter" );
        $mark   = new User( 3, "Mark" );
        
        $posts = array(
            new Post( 1, "Titulo do primeiro post", "Primeiro post", array(), $john),
            new Post( 2, "Titulo do segundo post",  "Segundo post", array(), $petter),
            new Post( 3, "Titulo do terceiro post", "Terceiro post", array(), $john),
        );

        $post = $posts[0];
        
        $post->addComments(
            array(
                new Comment( 1, "Commentario do primeiro post 1", $post, $mark),
                new Comment( 2, "Commentario do primeiro post 2", $post, $petter),
                new Comment( 3, "Commentario do primeiro post 3", $post, $mark)
            )
        );

        $post = $posts[1];

        $post->addComments(
            array(
                new Comment( 4, "Commentario do segundo post 1", $post, $mark),
                new Comment( 5, "Commentario do segundo post 2", $post, $john)
            )
        );

        $post = $posts[2];

        $post->addComments(
            array(
                new Comment( 6, "Commentario do terceiro post 1", $post, $petter),
                new Comment( 7, "Commentario do terceiro post 2", $post, $petter)
            )
        );

        return View('index/index', array('posts' => $posts ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
