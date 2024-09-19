<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Perfume;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerfumeController extends Controller
{
    public function store(Request $request)
    {
        try {
            db::beginTransaction();

            $data = $request->all();
            unset($data['_token']);

            Perfume::insert($data);

            DB::commit();

            return redirect('/perfumes');
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }
    public function lucro()
    {
        $perfumesLucro = Perfume::where('status', '2')
            ->select(
                'id',
                'nome',
                'status',
                'preco_pago',
                'preco_vendido'
            )
            ->groupBy('id', 'nome', 'status', 'preco_pago', 'preco_vendido')
            ->get();

        $total_pago = $perfumesLucro->sum('preco_pago');
        $total_vendido = $perfumesLucro->sum('preco_vendido');

        $lucro_total = $total_vendido - $total_pago;

        return view('lucro.index', [
            'perfumesLucro' => $perfumesLucro, 'lucro_total' => $lucro_total
        ]);
    }
    public function index()
    {

        //pesquisa as perfumes no banco
        $perfumes = Perfume::leftJoin('categorias', 'categorias.id', 'perfumes.categoria_id')
            ->select(
                'perfumes.id',
                'perfumes.nome',
                'quantidade',
                'tipo',
                'sexo',
                'preco_pago',
                'preco_vendido',
                'status',
                'categorias.nome as categoria_id'
            )
            ->orderBy('id', 'asc')
            ->get();


        return view('perfume.index', [
            'perfumes' => $perfumes
        ]);
    }
    public function create()
    {
        try {
            $categorias = Categoria::orderBy('nome')->select('id', 'nome')->get();

            return view('perfume.create', ['categorias' => $categorias]);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function show($id)
    {
        try {

            $categorias = Categoria::orderBy('nome')->select('id', 'nome')->get();

            $perfume = Perfume::find($id);

            return view('perfume.show', ['perfume' => $perfume, 'categorias' => $categorias]);
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
            Perfume::where('id', $id)->update($data);

            DB::commit();

            return redirect('/perfumes');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
    public function destroy($id)
    {
        try {

            Perfume::where('id', $id)->delete();

            return redirect('/perfumes');
        } catch (\Exception $e) {
            return $e;
        }
    }
}

// $data = [];

// $usuario = Usuario::find(Auth::user()->id);

// if($request->isMethod("post")){
//     $usuario->fill($request->all());
//     $usuario->save();

//     $data["resp"] = "Cadastro editado com sucesso";
// }

// $data["usuario"] = $usuario;
// return view('editarCadastro' , $data);