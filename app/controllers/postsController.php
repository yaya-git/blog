<?php

class postsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('post.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('post.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            try
            {
                $user = User::find(1);
                
                $post = new Post;
                $post->user()->associate($user);
                $post->title = Input::get('title');
                $post->content = Input::get('content');
                $post->save();
                
                $json['success'] = true;
                $json['request'] = 'POST';
                    
            }
            catch (Exception $e)
            {
                Log::error($e->message());
                
                $json['success'] = false;
            }
                
            return $json;
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
		return View::make('post.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            try
            {
                $json['success'] = true;
                $json['request'] = 'PUT';
                    
            }
            catch (Exception $e)
            {
                $json['success'] = false;
            }
                
            return json_encode($json);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            try
            {
                $json['success'] = true;
                    
            }
            catch (Exception $e)
            {
                $json['success'] = false;
            }
                
            return $json;
	}


}
