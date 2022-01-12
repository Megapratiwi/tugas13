<p>
    {{$produk->harga}} |
    stok : {{$produk->stok}} | 
    berat : {{$produk->berat}} gr |
    seller : {{$produk->seller->username}} |
    Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>