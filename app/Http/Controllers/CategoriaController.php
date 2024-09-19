<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            unset($data['_token']);

            Categoria::insert($data);

            DB::commit();

            return redirect('/categorias');
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }
    public function index()
    {
        //pesquisa as categorias no banco
        $categorias = Categoria::select('id', 'nome')->orderBy('id', 'desc')->get();

        return view('categoria.index', [
            'categorias' => $categorias
        ]);
    }
    public function create()
    {
        try {

            return view('categoria.create');

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function show($id){
        try {


            $categoria = Categoria::find($id);

           return view('categoria.show', ['categoria' => $categoria]);

        } catch (\Exception $e) {
            return $e;
        }

    }
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            unset($data['_token']);

            $id = array_shift($data);
            Categoria::where('id', $id)->update($data);

            DB::commit();

            return redirect('/categorias');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
    public function destroy($id)
    {
        try {

            Categoria::where('id', $id)->delete();

            return redirect('/categorias');

        } catch (\Exception $e) {
            return $e;
        }
    }
}