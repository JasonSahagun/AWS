<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    Public function indice(){
        $orden=DB::table('order_detaile')->where('status', 'ACTIVO')->get();
        // foreach ($orden as $order){
        //     $photos = DB::table('pictures')->where('product_id', $order ->id )->get();
        //     $order ->photos = $photos;
        // }
        return view('/admin/orden/list')->with('orden',$orden); //
    }

    // Public function crear(){
    //     return view('/admin/orden/create'); //
    // }

    // Public function guardar(Request $request){
    //     //dd($request);
    //     $proveedores=DB::table('order_detaile') -> insertGetId([
    //         'order_id' => $request -> order_id,
    //         'product_id' => $request -> product_id,
    //         'cantidad' => $request -> cantidad,
    //         'address' => $request -> address,
    //         'phone' => $request -> phone,
    //         'email' => $request -> email,
    //         'status'=> 'ACTIVO',
    //         'created_at'=> now(),
    //         'updated_at'=>now(),
    //     ]);

        
    //     $proveedores=DB::table('suppliers')->where('status', 'ACTIVO')->get();
    //     return view('/admin/proveedor/list')
    //         ->with('proveedores',$proveedores)
    //         ->with('mensaje','registro realizado');
    // }

    Public function editar($id){

        $orden=DB::table('order_detaile')->where('id',$id)->first();
        
        return view('/admin/orden/edith') -> with ('orden',$orden );  //
    }

    Public function actualizar(Request $request, $id){
        //dd($request);
        DB::table('order_detaile') -> where('id',$id)-> update([
            'order_id' => $request -> order_id,
            'product_id' => $request -> product_id,
            'cantidad' => $request -> cantidad,
            'precio' => $request -> precio,
            'subtotal' => $request -> subtotal,
            'updated_at'=> now(),
        
        ]);

        //dd($request);
        $orden=DB::table('order_detaile')->where('status','ACTIVO')->get();
        return view('/admin/orden/list')
        ->with('orden',$orden)
        ->with('mensaje', 'Registro actualizado');
        }
    

    Public function mostrar($id){
        $orden=DB::table('order_detaile')->where('id',$id)->first();
        return view('/admin/orden/show')-> with ('orden',$orden );   //
    }

    Public function borrar($id){
        
        // $deleted = DB::table('categories') -> where('id',$id)->delete();
            DB::table('order_detaile') -> where('id',$id)-> update([
            'status' => "INACTIVO",
            
        ]);
        
        $orden=DB::table('order_detaile')->where('status', 'ACTIVO')->get();
        return view('/admin/orden/list')
            ->with('orden',$orden)
            ->with('mensaje','registro borrado');
    }
}
