<?php

// -------------------------------------------------------------------- //

// CERRAR SESSION
Route::get('/cerrarsession', "UsuariosController@cerrarSession");
// REGISTRO
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', "UsuariosController@registrarUsuario");
// PERFIL
Route::get('/profile', function () {
    return view('profile');
});
// DETALLE DEL PRODUCTO
Route::get('/product-detail/{id}', "ProductosController@mostrarProducto");
Route::post('/product-detail', "VentasController@comprarProducto");
// CONTACT
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', "ReclamosController@agregarReclamo");
// INDEX
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
// PREGUNTAS FRECUENTES
Route::get('/faq', function () {
    return view('faq');
});
//CART
Route::get('/cart', "VentasController@mostrarVentas");
// EDICION DE PERFIL
Route::get('/edit-profile', function () {
    return view('edit-profile');
});
Route::post('/edit-profile', "UsuariosController@editarUsuario");
// RECUPERAR CONTRASEÑA
Route::get('/remember', function () {
    return view('remember');
});
Route::post('/remember', "UsuariosController@cambiarContrasenha");

// LOGIN
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', "UsuariosController@verificarUsuario");

//STOCK
Route::get('/stock', function(){
    return view('stock');
});
Route::post('/stock', "ProductosController@agregarProducto");

Route::get('/show-stock', "ProductosController@mostrarProductos");
Route::post('/show-stock', "ProductosController@eliminarProducto");

Route::get('/edit', "ProductosController@cualEdito");
Route::post('/edit', "ProductosController@mostrarEditar");
Route::post('/edit-stock', "ProductosController@editar");