<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // ここで、詳細な製品ページに必要なデータをインポートまたは処理します。
        // 例えば、$product = Product::find($id);のように商品情報を取得することができます。

        // 詳細製品ページを表示するビューを返します。
        return view('product.show', ['productId' => $id]);
    }
}
