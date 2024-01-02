<?php

namespace App\Http\Controllers;

use App\Models\ModelPrompts;
use App\Models\ModelPromptsCategorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PromptsController extends Controller
{
    public function show(Request $request)
    {

        $texto = $request->input('texto');
        $categoria = $request->input('categoria');

        $promptList = ModelPrompts::where('id', 1)->get();

        //$queryBusqueda->join('users', 'pregunta.id_usuario', '=', 'users.id');
        //->join('pregunta_tipo', 'pregunta.id_tipo','=','pregunta_tipo.id')
        //->orderby('pregunta.fecha_creacion','desc')
        //->select(['pregunta.id','pregunta_tipo.nombre as tipo', 'pregunta.titulo', 'pregunta.detalle', 'pregunta.fecha_creacion', 'users.names', 'users.surnames']);

        //---------------------------------------------------------
        // $queryBusqueda = ModelPrompts::query();

        // if(!is_null($texto)){
        //     $queryBusqueda->where('prompts.title','LIKE', "%{$texto}%");
        //     $queryBusqueda->orWhere('prompts.content','LIKE', "%{$texto}%");
        // }

        // if(!is_null($categoria) && $categoria != 'categorias')
        // {
        //     $queryBusqueda->where('prompts.id_category', $categoria);
        // }

        // $promptList = $queryBusqueda->paginate(10)->withQueryString();   //ejecuta la query
        //---------------------------------------------------------

        $queryBusqueda = DB::table('prompts');

        if (!is_null($texto)) {
            $queryBusqueda->where(function ($query) use ($texto) {
                $query->where('title', 'LIKE', "%{$texto}%")
                    ->orWhere('content', 'LIKE', "%{$texto}%"); // Agrega el campo adicional aquí
            });
        }

        if (!is_null($categoria) && $categoria != 'categorias') {
            $queryBusqueda->where('id_category', $categoria);
        }

        $promptList = $queryBusqueda->paginate(10);

        $categorias = ModelPromptsCategorias::all();

        // Renderiza la vista parcial y devuelve el HTML
        $listaResultadosHtml = View::make('promptsPerzonalizado.lista_resultados')->with(['promptList' => $promptList])->render();

        if ($request->ajax()) {
            return response()->json(['lista_resultados_html' => $listaResultadosHtml]);
        }

        return view('promptsPerzonalizado.promptLibrary')->with([
            'promptList' => $promptList,
            'categorias' => $categorias,
            'text' => $texto
        ]);
    }


    public function viewIndex()
    {
        return view('legalBot.index');
    }

    public function viewConocimiento()
    {
        return view('legalBot.conocimiento');
    }

    public function viewEscritoFinal()
    {
        return view('legalBot.escritoFinal');
    }

    public function viewAsistenciaLegalIA()
    {
        return view('promptsPerzonalizado.promptLibrary');
    }
}
