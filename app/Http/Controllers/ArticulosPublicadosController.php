<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\articulosPublicados;
use DB;
use Yajra\DataTables\DataTables;

class ArticulosPublicadosController extends Controller
{
    public function obtenerArticulos(Request $request)
    {
		/*$input = $request->all();
		$categoria = $request->input('categoria');
		$titulo = $request->input('titulo');
		$descripcion = $request->input('descripcion');*/
		
       /* $input = $request->all();
		$categoria = $request->input('categoria');
		$titulo = $request->input('titulo');
		$descripcion = $request->input('descripcion');
		
		
		$draw = $request->input('draw');
		$row = $request->input('start');
		$rowperpage = $request->input('length');
		$columnIndex = $request->input('order');
		$searchValue = $request->input('search');

		
		
		$totalRecords = 0;
		$totalRecordwithFilter = 0;
		$data = array();
		

		$data[] = array( 
			  "titulo"=>'Titulo de Prueba',
			  "descripcion_corta"=>'Descripcion de Prueba',
			  "publicado_por"=>'Admin',
			  "fecha"=>'01/01/2021',
			  "enlace"=>''
		);
		
		$response = array(
		  "draw" => intval($draw),
		  "iTotalRecords" => $totalRecords,
		  "iTotalDisplayRecords" => $totalRecordwithFilter,
		  "aaData" => $data
		);
				
        return response()->json($response, 201);*/
		
		//$query = articulosPublicados::where('categorias_id',$categoria)->orWhere('titulo',$titulo)->orWhere('descripcion_corta',$descripcion)->get();
		/*if($categoria != null){
          $query =  $query->where('categorias_id',$categoria)
		}*/
		/*if($titulo != null){
           $query->where('titulo',$titulo)
		}
		if($descripcion != null){
           $query->where('descripcion_corta',$descripcion)
		}*/
		/*
	
		return datatables()
		->eloquent(articulosPublicados::query())
		->toJson();*/
		
		$anuncios = DB::table('anunciospublicados');

        $datatables =  Datatables::of($anuncios);

        if ($request->get('categoria')) {

            $anuncios->where('categorias_id', '=', $request->get('categoria'));
        }

        if ($titulo = $request->get('titulo')) {
            $anuncios->where('anunciospublicados.titulo', 'like', "$titulo%");
        }
		
		if ($descripcion = $request->get('descripcion')) {
            $anuncios->where('anunciospublicados.descripcion_corta', 'like', "$descripcion%");
        }
		
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('anunciospublicados.titulo', 'where', 'like', "$keyword%");
			$datatables->filterColumn('anunciospublicados.descripcion_corta', 'where', 'like', "$keyword%");
           // $datatables->filterColumn('users.id', 'whereRaw', "CONCAT(users.id,'-',users.id) like ? ", ["%$keyword%"]);
        }

        return $datatables->make(true);
    }
}
