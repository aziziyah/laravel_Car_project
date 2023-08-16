<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class DataController extends Controller
{
    
  /*
    private static function getData(){
        
 return[
    ['id'=>1 , 'model'=>'2017','country'=> 'koria', 'car'=>'sonata'],
    ['id'=>2 , 'model'=>'2017','country'=> 'japan', 'car'=>'lexus'],
    ['id'=>3 , 'model'=>'2017','country'=> 'malaysia', 'car'=>'myvi'],

 ];
    }
    */
    

    public function index()
    {
        return view('Datas.data', [
            'Datas' => Car::all()
        ]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('Datas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
       $request->validate(
[
    'car-name'=>'required',
    'car-country'=>'required',
    'car-model'=>'required|integer',
    'car-price'=>'required|integer',

]

);
       
        $ccar= new Car();

       $ccar->car = strip_tags($request->input('car-name'));
       $ccar->country =strip_tags ($request->input('car-country'));
       $ccar->model = strip_tags($request->input('car-model'));
       $ccar->price =strip_tags ($request->input('car-price'));

       $ccar->save();
       return redirect()->route('Datas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $Data)
    {
        $index= Car::findOrFail($Data);
       

        
        return view('Datas.show', [
            'Data'=>$index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $Data)
    {
    
         return view('Datas.edit', [
             'car'=> Car::findOrFail($Data)
         ]
         );
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $car)
    {
        $request->validate(
            [
                'car-name'=>'required',
                'car-country'=>'required',
                'car-model'=>'required|integer',
                'car-price'=>'required|integer',
            
            ]
            
            );
    $update= Car::findOrFail($car);
    $update->car = strip_tags($request->input('car-name'));
    $update->country =strip_tags ($request->input('car-country'));
    $update->model = strip_tags($request->input('car-model'));
    $update->price =strip_tags ($request->input('car-price'));

       $update->save();
       return redirect()->route('Datas.show', $car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Data)
    {
        $delete= Car::findOrFail($Data);
        $delete->save();
        return redirect()->route('Datas.index', $Data);

    }
}
