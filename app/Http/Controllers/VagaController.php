<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Curriculo;
use App\Models\Habilidade;
use App\Models\OutrasAtividade;
use App\Models\Vaga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = Vaga::paginate(10);

        return view('pages.vagas.index', compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.vagas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $array = explode('-', trim($request->periodo));
        $request->merge(['inicio' => Carbon::createFromFormat('d/m/Y', trim($array[0]))->format('Y-m-d')]);
        $request->merge(['fim' => Carbon::createFromFormat('d/m/Y', trim($array[1]))->format('Y-m-d')]);

        DB::beginTransaction();

        try {
            $vaga = Vaga::create($request->all());

            foreach ($request->habilidade as $nomeHabilidade) {
                $habilidade = new Habilidade();
                $habilidade->titulo = $nomeHabilidade;
                $habilidade->vaga_id = $vaga->id;
                $habilidade->save();
            }

            foreach ($request->atividade as $nomeAtividade) {
                $habilidade = new Atividade();
                $habilidade->titulo = $nomeAtividade;
                $habilidade->vaga_id = $vaga->id;
                $habilidade->save();
            }

            foreach ($request->outras_atividades as $nomeOutraAtividade) {
                $habilidade = new OutrasAtividade();
                $habilidade->titulo = $nomeOutraAtividade;
                $habilidade->vaga_id = $vaga->id;
                $habilidade->save();
            }

            DB::commit();

            return redirect()->route('vagas.show', $vaga->id)
                ->with('success', 'Vaga registrada com sucesso!');

        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->back()->withErrors(['Erro ao salvar vagas', $exception->getMessage()]);
        }
    }

    /**
     * Enviocurriculo a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Enviocurriculo(Request $request, $vaga_id)
    {
        $request->merge(['vaga_id' => $vaga_id]);

        $data = $request->all();
        DB::beginTransaction();
        try {
            $curriculo = Curriculo::create($data);

            if($request->hasFile('anexo')) {
                $curriculo->uploadFile($request->anexo, 'anexo');
            }
            DB::commit();

            return redirect()->back()->with('success', 'Curriculo registrado com sucesso!');

        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());

            return redirect()->back()->withErrors([
                'Erro ao salvar cooperado',
                $exception->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Vaga $vaga)
    {
        $vaga->with('habilidades', 'atividades' , 'outrasAtividades')->first();

        return view('pages.externo.show', compact('vaga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
