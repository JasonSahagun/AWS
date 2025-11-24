<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvidersController extends Controller
{
    Public function indice(){
        $proveedores=DB::table('suppliers')->where('status', 'ACTIVO')->get();
        foreach ($proveedores as $pro){
            $photos = DB::table('pictures')->where('product_id', $pro ->id )->get();
            $pro ->photos = $photos;
        }
        return view('/admin/proveedor/list')->with('proveedores',$proveedores); //
    }

    Public function crear(){
        return view('/admin/proveedor/create'); //
    }

    Public function guardar(Request $request){
        //dd($request);
        $proveedores=DB::table('suppliers') -> insertGetId([
            'name' => $request -> name,
            'contact_name' => $request -> contact_name,
            'picture' => $request -> picture,
            'address' => $request -> address,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'status'=> 'ACTIVO',
            'created_at'=> now(),
            'updated_at'=>now(),
        ]);

        if($request->hasFile('picture')){
            $ruta='imagenes/provider';
            $extension=$request->picture->extension();
            $nombre= $request->file('picture')->getClientOriginalName();
            $path=$request->file('picture')->storeAs( '/imagenes/provider', $nombre);
            DB::table('suppliers')->update([
                'picture'=>'/storage/'.$path,
                'updated_at'=>now(),
            ]);
        }
        
        if($request->hasFile('photos')){
            $ruta='imagenes/provider';
            $num=0;
            foreach($request->photos as $img){
                $extensions=$img->extensions(); $num++;
                $extension=$request->picture->extension();
            $nombre= $request->file('picture')->getClientOriginalName();
            $path=$request->file('picture')->storeAs( '/imagenes/provider', $nombre);
                DB::table('pictures')->instert([
                    'name'=>$path,
                    'description'=>'informacion de prueba',
                    'category_id'=> $id,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ]);
            }
        }
        $proveedores=DB::table('suppliers')->where('status', 'ACTIVO')->get();
        return view('/admin/proveedor/list')
            ->with('proveedores',$proveedores)
            ->with('mensaje','registro realizado');
    }

    Public function editar($id){

        $proveedores=DB::table('suppliers')->where('id',$id)->first();
        
        return view('/admin/proveedor/edith') -> with ('proveedores',$proveedores );  //
    }

    Public function actualizar(Request $request, $id){
        //dd($request);
        DB::table('suppliers') -> where('id',$id)-> update([
            'name' => $request -> name,
            'contact_name' => $request -> contact_name,
            'picture' => $request -> picture,
            'address' => $request -> address,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'updated_at'=> now(),
        
        ]);

        if($request->hasFile('picture')){
            $ruta='/imagenes/proveedor';
            $extension=$request->picture->extension();
            $nombre= $request->file('picture')->getClientOriginalName();
            $path=$request->file('picture')->storeAs( '/imagenes/proveedor', $nombre);
            DB::table('suppliers')->where('id',$id)->update([
                'picture'=> '/storage/'.$path,
                'updated_at'=>now(),
            ]);
        }
        
        if($request->hasFile('photos')){
            $ruta='imagenes/proveedor';
            $num=0;
            foreach($request->photos as $img){
                $extensions=$img->extensions(); $num++;
                $nombre= $request->file('picture')->getClientOriginalName();
                $path=$request->file('picture')->storeAs( '/imagenes/provider', $nombre);
                DB::table('pictures')->instert([
                    'name'=>$path,
                    'description'=>'informacion de prueba',
                    'category_id'=> $id,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ]);
            }
        }
        //dd($request);
        $proveedores=DB::table('suppliers')->where('status','ACTIVO')->get();
        return view('/admin/proveedor/list')
        ->with('proveedores',$proveedores)
        ->with('mensaje', 'Registro actualizado');
        }
    

    Public function mostrar($id){
        $proveedores=DB::table('suppliers')->where('id',$id)->first();
        return view('/admin/proveedor/show')-> with ('proveedores',$proveedores );   //
    }

    Public function borrar($id){
        
        // $deleted = DB::table('categories') -> where('id',$id)->delete();
            DB::table('suppliers') -> where('id',$id)-> update([
            'status' => "INACTIVO",
            'picture' => 'default.jpg'
        ]);
        
        $proveedores=DB::table('suppliers')->where('status', 'ACTIVO')->get();
        return view('/admin/proveedor/list')
            ->with('proveedores',$proveedores)
            ->with('mensaje','registro borrado');
    }
}
