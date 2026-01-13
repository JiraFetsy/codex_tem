<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/historique-scoutisme', function () {
    return view('historique');
})->name('historique-scoutisme');

Route::post('/membres', function (Request $request) {
    $validated = $request->validate([
        'nom' => ['required', 'string', 'max:255'],
        'prenom' => ['required', 'string', 'max:255'],
        'adresse' => ['required', 'string', 'max:255'],
        'numero' => ['required', 'string', 'max:50'],
    ]);

    DB::table('membres')->insert([
        'nom' => $validated['nom'],
        'prenom' => $validated['prenom'],
        'adresse' => $validated['adresse'],
        'numero' => $validated['numero'],
    ]);

    return back()->with('status', 'Membre enregistré.');
})->name('membres.store');
