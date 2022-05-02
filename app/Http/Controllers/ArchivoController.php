<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Exception;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $user = auth()->user();
            $permisosUsuario = DB::table('usuario_permiso')->where('fk_id_usuario', '=', $user->id)->get();
            foreach ($permisosUsuario as $permisoUsuario) {
                $permiso = DB::table('permiso')->where('id_permiso', '=', $permisoUsuario->fk_id_permiso)->get();
                if ($permiso[0]->nombre_permiso == 'Ver Historico Admin') {
                    $archivos = DB::table('archivo')->get();
                    return view('archivo.index', compact('archivos'));
                } elseif ($permiso[0]->nombre_permiso == 'Ver Historico') {
                    $archivos = DB::table('archivo')->where('fk_id_usuario', '=', $user->id)->get();
                    return view('archivo.index', compact('archivos'));
                }
            }
            return redirect()->route('home')->with('denied', 'Usted no tiene permisos para ingresar al historico.');
        } catch (Exception $error) {
            return redirect()->route('home')->with('denied', 'Ha ocurrio un error inesperado: ' . $error->getMessage() . '. Favor de comunicar al administrador del sistema.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $user = auth()->user();
            $permisosUsuario = DB::table('usuario_permiso')->where('fk_id_usuario', '=', $user->id)->get();
            foreach ($permisosUsuario as $permisoUsuario) {
                $permiso = DB::table('permiso')->where('id_permiso', '=', $permisoUsuario->fk_id_permiso)->get();
                if ($permiso[0]->nombre_permiso == 'Cargar Archivo Admin') {
                    $usuarios = DB::table('users')->get();
                    return view('archivo.create', compact('usuarios'));
                } elseif ($permiso[0]->nombre_permiso == 'Cargar Archivo User') {
                    $usuarios = null;
                    return view('archivo.create', compact('usuarios'));
                }
            }
            return redirect()->route('home')->with('denied', 'Usted no tiene permisos para ingresar a la carga de archivos.');
        } catch (Exception $error) {
            return redirect()->route('home')->with('denied', 'Ha ocurrio un error inesperado: ' . $error->getMessage() . '. Favor de comunicar al administrador del sistema.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user = auth()->user();
            $nombre = '';
            $ruta = '';
            if ($request->id_usuario != null) {
                $usuario = DB::table('users')->where('id', '=', $request->id_usuario)->get();
                if ($request->hasFile('file')) {
                    $ruta_destino = 'public/storage/' . $usuario[0]->name;
                    $file = $request->file('file');
                    $nombre_archivo = $file->getClientOriginalName();
                    $ruta = $request->file('file')->storeAs($ruta_destino, $nombre_archivo);
                    $nombre = $nombre_archivo;
                    $ruta = str_replace('public', 'storage', $ruta);
                }
                DB::table('archivo')->insert([
                    'fk_id_usuario' => $usuario[0]->id,
                    'nombre_archivo' => $nombre,
                    'ruta_archivo' => $ruta,
                ]);
            } else {
                if ($request->hasFile('file')) {
                    $ruta_destino = 'public/storage/' . $user->name;
                    $file = $request->file('file');
                    $nombre_archivo = $file->getClientOriginalName();
                    $ruta = $request->file('file')->storeAs($ruta_destino, $nombre_archivo);
                    $nombre = $nombre_archivo;
                    $ruta = str_replace('public', 'storage', $ruta);
                }
                DB::table('archivo')->insert([
                    'fk_id_usuario' => $user->id,
                    'nombre_archivo' => $nombre,
                    'ruta_archivo' => $ruta,
                ]);
            }
            return redirect()->route('home')->with('success', 'Se cargo el archivo correctamente.');
        } catch (Exception $error) {
            return redirect()->route('home')->with('denied', 'No se pudo cargar el archivo de forma correcta, el error fue: ' . $error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        //
    }
}
