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

Route::get('/mp', function () {
    return view('mp');
})->name('mp');

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

    return back()->with('status', 'Mpiandraikitra enregistré.');
})->name('membres.store');

Route::get('/membres', function () {
    $membres = DB::table('membres')->orderBy('nom')->get();

    return view('membres.index', ['membres' => $membres]);
})->name('membres.index');

Route::get('/membres/search', function (Request $request) {
    $query = (string) $request->query('q', '');

    if ($query === '') {
        return response()->json([]);
    }

    $results = DB::table('membres')
        ->where('nom', 'like', '%' . $query . '%')
        ->orWhere('prenom', 'like', '%' . $query . '%')
        ->orWhere('adresse', 'like', '%' . $query . '%')
        ->orWhere('numero', 'like', '%' . $query . '%')
        ->limit(10)
        ->get(['id', 'nom', 'prenom', 'adresse', 'numero']);

    return response()->json($results);
})->name('membres.search');

Route::get('/membres/{id}', function (int $id) {
    $membre = DB::table('membres')->where('id', $id)->first();

    if (!$membre) {
        abort(404);
    }

    return view('membres.show', ['membre' => $membre]);
})->name('membres.show');

Route::patch('/membres/{id}', function (Request $request, int $id) {
    $validated = $request->validate([
        'nom' => ['required', 'string', 'max:255'],
        'prenom' => ['required', 'string', 'max:255'],
        'adresse' => ['required', 'string', 'max:255'],
        'numero' => ['required', 'string', 'max:50'],
    ]);

    $updated = DB::table('membres')
        ->where('id', $id)
        ->update([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'adresse' => $validated['adresse'],
            'numero' => $validated['numero'],
        ]);

    if (!$updated) {
        return back()->with('status', 'Aucune modification effectuée.');
    }

    return back()->with('status', 'Membre mis à jour.');
})->name('membres.update');
