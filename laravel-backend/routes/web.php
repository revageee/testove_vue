use App\Http\Controllers\ProductController;

Route::get('/create-product', [ProductController::class, 'createProduct']);
