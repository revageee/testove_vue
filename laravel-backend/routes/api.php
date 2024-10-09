use App\Http\Controllers\ProductController;

// Для отримання списку продуктів
Route::get('/products', [ProductController::class, 'index']);

// Для створення нового продукту (якщо вам це потрібно)
Route::post('/create-product', [ProductController::class, 'createProduct']);
