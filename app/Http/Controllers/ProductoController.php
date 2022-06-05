<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    //Main
    public function index(){
        $productos = Producto::All();
        return view('Producto.index')-> with('productos',$productos);
    }

    //Add new Producto
    public function add(){
        return view('Producto.Add');
    }

    public function insert(Request $request){
        #dd($request->imagen);
        #echo 'Hola';
        $producto = new Producto();
        $producto->categoria = $request->categoria;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->oferta = $request->oferta;
        $producto->fechavnc = $request->fechavnc;
        $nomb = $_FILES['imagen']['name'];           # nombre de la foto ejm imganimal1.jpg
        $temporal = $_FILES['imagen']['tmp_name'];   # agrega la foto en un lugar temporal
        $carpeta = 'i/P/';              # lugar donde se alcenara la foto

        $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

        move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino

        $producto->imagen= $ruta;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen



        /*$nomb = $_FILES['imagen']['name'];           # nombre de la foto ejm imganimal1.jpg
        $temporal = $_FILES['imagen']['tmp_name'];   # agrega la foto en un lugar temporal
        $carpeta = 'img/Producto/';              # lugar donde se alcenara la foto

        $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

        move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino
        $x = 'texto';
        $producto->imagen= $x;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen*/
        $producto->save();

        return redirect('/Producto');


    }

    public function edit($id){
        $productos = Producto::find($id);
        return view('Producto.edit')->with('productos',$productos);
    }

    public function update(Request $request, $id){
        $producto = Producto::find($id);
        $producto->categoria = $request->categoria;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->oferta = $request->oferta;
        $producto->fechavnc = $request->fechavnc;
        $producto->save();
        return redirect('/Producto');
    }

    public function delete(Request $request, $id){
        $productos = Producto::find($id);
        $productos->delete();

        return redirect('/Producto');
    }


}
