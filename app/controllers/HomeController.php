<?php

class HomeController extends BaseController {

	public function index()
	{
            // limite de registros por pagina
            $limit = Input::get('pagiante',10); 
            
            // seleccionar registros por fecha
            $date = Input::get('date', '');
            
            // selecciona todos los posts
            $posts = Post::where('created_at', '>', $date)->paginate($limit);
            
            // determinar si es una busqueda avanzada
            $avanzado = (Input::get('avanzado')) ? '1' : '0';
            
            return View::make('home.index',array(
                'posts'     => $posts,
                'limit'     => $limit,
                'date'      => $date,
                'avanzado'  => $avanzado
            ));
	}

}
