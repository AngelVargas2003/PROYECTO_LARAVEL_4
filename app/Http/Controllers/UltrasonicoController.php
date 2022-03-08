<?php
namespace App\Http\Controllers;
use App\Models\Humedad;
use App\Models\Ultrasonico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\dataUltrasonic;
use phpDocumentor\Reflection\Types\Array_;

class UltrasonicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getValuesUltrasonic()
    {
        $response = Http::get('https://io.adafruit.com/api/v2/JuanCastorena18/feeds/semiintegradora.ultrasonico/data');
        $jsonData = $response->object();
        dd($jsonData);
        foreach ($jsonData as $data){
            $model=new Ultrasonico();
            $model->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }
    public function getDataUltrasonic()
    {
        $response = Http::get('https://io.adafruit.com/api/v2/JuanCastorena18/feeds/semiintegradora.ultrasonico/data/chart');
        $js4onData = $response->object();
        //dd($js4onData);
        $data=json_decode($response,true);
        //dd($data);
        $dataend=$data["data"];
        //$finalValue=json_decode($dataend);
        //dd($finalValue);
        //$jsonDataValue=$finalValue->object();
        //dd($jsonDataValue);
        dd($dataend);
        //$gson=json_decode($dataend,true);
        //dd($gson);
        //$datosdinales=$dataend[0];
        //dd($datosdinales);
        //foreach ($dataend as $datas){
          //  $model=new dataUltrasonic();
            //$model->date=$dataend[0];
            //$model->value=$dataend[1];
            //$model->save();
        //
        //foreach ($jsonData as $data){
            //$model=new Ultrasonico();
            //$model->id=$data->id;
           // $model->value=$data->value;
         //   $model->save();
       // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getprom(){
        $users = DB::table('humedad')->avg('humedad.value');
        return $users;
    }
    public function getHumedad(){
        $response = Http::get('https://io.adafruit.com/api/v2/JuanCastorena18/feeds/semiintegrador.temperatura/data');
        $jsonData = $response->object();
        foreach ($jsonData as $data){
            $model=new Humedad();
            $model->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
        return $response;
    }
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function show(Ultrasonico $ultrasonico)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function edit(Ultrasonico $ultrasonico)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ultrasonico $ultrasonico)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ultrasonico  $ultrasonico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ultrasonico $ultrasonico)
    {

    }
}
