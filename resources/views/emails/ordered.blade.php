s<p class="mb-4">{{ $product['ownerName']}}様の商品が注文されました。</p>

<div>
    <div class="mb-4">商品情報</div>
    <ul class="mb-4">
        <li>商品名: {{ $product['name'] }}</li>
        <li>商品金額: {{ number_format($product['price'])}}円</li>
        <li>商品数: {{ $product['quantity'] }}</li>
        <li>合計金額: {{ number_format($product['price'] * $product['quantity']) }}円</li>
    </ul>

    <div class="mb-4">購入者情報
        <ul>
            <li>{{ $user->name }}様</li>
        </ul>
    </div>

    <div>
        <h2>販売者</h2>
        <p>Hongdae fashion, Inc.
            600 Harrison Street, 3rd Floor
            San Francisco, CA 94107, JP</p>
    </div>
    @include('components.footer')
</div>