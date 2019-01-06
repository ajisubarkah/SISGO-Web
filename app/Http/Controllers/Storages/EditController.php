<?php

namespace App\Http\Controllers\Storages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goods;

class EditController extends Controller
{
    public function edit($id) {
        $data = Goods::find($id);
        return view('pages.storages.edit')->with(['goods'=>$data]);
    }

    public function editGoods(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'barcode' => 'required',
            'selling' => 'required',
            'purchase' => 'required'
        ]);
        
        $goods = Goods::find($request->id);
        
        $goods->name = $request->name;
        $goods->barcode = $request->barcode;
        $goods->selling = Goods::deconvertFromRupiah($request->selling);
        $goods->purchase = Goods::deconvertFromRupiah($request->purchase);

        if($request->hasFile('photo')) {
            
            $fileNameToStore= $request->barcode . '.jpg';
            
            $path = $request->file('photo')->storeAs('public/goods', $fileNameToStore);    
            $goods->photo = $fileNameToStore;
        }

        $goods->save();
        
        return redirect('storages');
    }
}