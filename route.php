use App\Http\Controllers\ComboController;
Route::get('/', fn() => view('welcome'));
Route::get('/fetch/{combo}', [ComboController::class, 'fetch']);
