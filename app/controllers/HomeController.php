<?php

class HomeController extends BaseController {

	public function index()
	{
            
            $limit = Input::get('limit', 3);
            
            $posts = Post::paginate($limit);
            
            return View::make('home.index',array(
                'posts' => $posts,
                'paginator' => array(
                    'total_count' => $posts->getTotal(),
                    'total_pages' => ceil($posts->getTotal() / $posts->getPerPage()),
                    'current_page' => $posts->getCurrentPage(),
                    'limit' => $posts->getPerPage(),
                    'last_page' => $posts->getLastPage(),
                    'form_page' => $posts->getFrom(),
                    'get_to' => $posts->getTo(),
                    'count' => $posts->count(),
                    'url' => $posts->getUrl(1)
                )
            ));
	}

}
