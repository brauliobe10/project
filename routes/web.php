<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserControlñler;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', UserControlñler::class);




/*
//Definicion de rutas

Route::get('/hola', function(){
    $nombre="Andrea Leyton";
    return "Hola {$nombre}";
});

// Parametros en las rutas

Route::get('/usuario/{nombre}', function($nombre){
    return "Usuario: $nombre";
});

//Parámetros con valores por defecto

Route::get('/usuario/{nombre?}', function($nombre='Default'){
    return "Usuario: $nombre";
});

//Rutas Nombradas
Route::get('/perfil',function(){
    return view('perfil');
})->name('perfil');

//redireccion de rutas
Route::redirect('/ruta-anterior','/ruta-nueva');

Route::get('/ruta-nueva', function(){
    return "Ruta nueva";
});

//Vista directa
Route::view('/bienvenido','welcome'); 

//Grupos de ruta
    //agrupacion con prefijos
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', function(){
        return "Admin Dashboard";
    });
});


//env(): sirve para obtener variables de entorno

Route::get('/db', function(){
    return env('DB_CONNECTION');
});

//dd: sirve para volcar y depurar

Route::get('/dd' , function(){
    $nombre="Braulio Bellodas";
    dd($nombre);
    return env('DB_CONNECTION');
});


//app sirve para acceder a configuraciones de la aplicacion
Route::get('/app', function(){
    return config('app.timezone');
});


//Route::view('/producto', 'producto'); O

Route::get('/producto', function(){
    //return view('almacen.producto', ['nombre' => 'Impresora XL300' , 'marca' => 'Epson']); tambien se utiliza con "with"
    //return view('almacen.producto') -> with (['nombre' => 'Impresora XL300' , 'marca' => 'Epson']);
    $nombre="Impresora XL300"; 
    $marca="Epson";
    return view('almacen.producto', compact('nombre' , 'marca'));
});

//ruta para la vista condicional donde se aplica if
Route::get('condicional/{nota}' , function($nota=12){
    return view('estructuras.condicional' , compact('nota'));
});

//ruta para la vista switch donde se utiliza switch
Route::get('control/{numero}' , function($numero=2){
    return view('estructuras.switch' , compact('numero'));
});

//ruta para la vista while donde se utiliza la estructura condicional while
Route::get('while/{numero}' , function($numero=1){
    return view('estructuras.while' , compact('numero'));
});

//ruta para la vista foreach donde se utiliza foreach
Route::get('foreach' , function(){  
    $lista=["Platanos" , "Manzanas" , "Durazno" , "Peras"];
    return view('estructuras.foreach' , compact('lista'));
});

Route::get('categoria' , function(){
    return view('partials.categoria');
});

Route::get('contacto' , function(){
    return view('contacto');
});

Route::get( 'probar-conexion' , function(){
    try {
        DB::connection()->getPdo();
        return "conexion a la base de datos exitosa";
    } catch (\Exception $e) {
        return "no se pudo conectar a la base de datos  <br> Error: ".$e->getMessage();
    }

});

// QUERY BUILDER

Route::get( 'query' , function(){
    $entradas = DB::table('entradas')->get(); //obtenemos los registros de la tabla entradas
    return $entradas; //retorna el objeto entradas donde se almacenan los registros
});

//obtener primer registro
Route::get( 'find' , function(){
    $entradas = DB::table('entradas')->first(); //obtiene el primer registro de la tabla entradas
    return $entradas; //devuelve el objeto entradas con el primer registro que encuentra
});

//filtrar datos
Route::get( 'filtro' , function(){
    $entradas = DB::table('entradas')
    ->where('user_id', 1)
    ->where('titulo', 'LIKE', 'p%')
    ->orWhere('titulo' , 'LIKE', 'a%')
    ->get(); // obtenemos todos los registros con user_id = 1 y ademas los titulos que empiecen con p
    return $entradas; //devuelve el objeto con los registros con user_id = 1 y los titulos empiecen con p
});

//otros where que pueden ser utiles en query builder
//whereNull()
//whereNotNull()
//whereIn()
//WhereNotIn()
//WhereBetween()
//WhereNotBetween()

// JOINS CON QUERY BUILDER

Route::get( 'join' , function(){
    $entradas = DB::table('entradas')
    ->join('users' , 'entradas.user_id', '=' , 'users.id')->get(); //obtiene toda la coleccion de la tabla entradas pero con la union de user_id a la tabla users mediante el id
    return $entradas; //devuelve el objeto con la coleccion de datos
});


//join con select

Route::get( 'select' , function(){
    $entradas = DB::table('entradas')
    ->join('users' , 'entradas.user_id', '=' , 'users.id')
    ->select('entradas.id' , 'entradas.titulo' , 'entradas.tag' , 'users.name', 'users.email')
    ->get();
    return $entradas; //devuelve el objeto entradas con la coleccion de datos
});

//otros tipos de join en query builder
//leftJoin()
//rightJoin()
//joinWhere()

//Insertar datos con query Builder

route::get('insert' , function(){ //inserta los datos a la tabla users
    $insertado = DB::table('users')
    ->insert([
        "name" => "Julio Cesar",
        "email" => "julio@prueba",
        "password" => "juan1"
    ]);

    return $insertado; //retorna el objeto con un "1" que es un true
});


//obtener con datos
route::get('insert_id' , function(){ //inserta los datos a la tabla users
    $id = DB::table('users')
    ->insertGetId([
        "name" => "Lionel Messi",
        "email" => "messi@prueba",
        "password" => "messi1"
    ]);

    return $id; //retorna el objeto con el numero de id
});

//llama al codigo de EntradaController.php y lo ejecuta
//Route::get('entrada',[EntradaController::class, 'index'] );

//Route::resource('entrada', EntradaController::class); //te crea todos los metodos de rutas de entrada

//Route::resource('entrada', EntradaController::class)->only('index' , 'show'); //solo te crea el metodo de la ruta index 

Route::resource('entrada', EntradaController::class)->except('destroy' , 'update');

Route::get('respuesta' , function(){
    return response('Hola, esto es una respuesta', 200);
});

Route::get('respuesta_2' , function(){
    return response('Hola, esto es una respuesta 2', 404);
});

*/




