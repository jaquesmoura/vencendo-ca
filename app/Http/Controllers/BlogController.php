<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    public function posts(){
        $texto = 'Vencendo o CA';
        $texto_post = 'A grandeza vem não quando as coisas sempre vão bem para você, mas a grandeza vem quando você é realmente testado, quando você sofre alguns golpes, algumas decepções, quando a tristeza chega. Porque apenas se você esteve nos mais profundos vales você poderá um dia saber o quão magnífico é se estar no topo da mais alta montanha. - Richard Milhous Nixon';
        $titulo_post = 'A verdadeira grandeza';
        $foto_post = 'http://ingressomachupicchu.com/miingsot/wp-content/uploads/2015/06/montanas-machu-picchu.jpg';
        $qtde = 4;
        $posts = [];
        $i = 0;
        while ($i < $qtde){
            $i++;
            array_push($posts,new Post($titulo_post.'_'.$i,$texto_post,$foto_post));
        }
        return view('blog.posts',['text'=>$texto,'posts'=>$posts]);
    }

    public function post_cloning($qtde){
        $texto = 'Vencendo o CA';
        $texto_post = 'A grandeza vem não quando as coisas sempre vão bem para você, mas a grandeza vem quando você é realmente testado, quando você sofre alguns golpes, algumas decepções, quando a tristeza chega. Porque apenas se você esteve nos mais profundos vales você poderá um dia saber o quão magnífico é se estar no topo da mais alta montanha. - Richard Milhous Nixon';
        $titulo_post = 'A verdadeira grandeza';
        $foto_post = 'http://blogdescalada.com/wp-content/uploads/2017/06/montanha-arco-iris-1.jpg';
        $posts = [];
        $i = 0;
        while ($i < $qtde){
            $i++;
            array_push($posts,new Post($titulo_post.'_'.$i,$texto_post,$foto_post));
        }

        return view('blog.posts',['text'=>$texto,'posts'=>$posts]);
    }
}
