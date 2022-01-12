@extends ('frontview.template.base')

@section ('content')

<header class="row tm-welcome-section">
				</header>

			<div class="tm-container-inner tm-persons">
				<div class="row">
					<article class="col-lg-6">
						<figure class="tm-person">
							<img widht="100px" height="100px" src="{{url("public/$produk->foto")}}" alt="">
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">{{$produk->nama}}</h4>
								<p class="tm-person-title">Rp. {{$produk->harga}}</p>
								<p class="tm-person-about">Stok : {{$produk->stok}}</p>
								<p class="tm-person-about">Berat : {{$produk->berat}}</p>
								<a href="{{url('pesanan', $produk->id)}}" class="tm-btn tm-btn-default tm-right">Pesan Disini</a>
							</figcaption>
						</figure>
					</article>
				</div>
			</div>
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							<div class="tm-history-text"> 
								<h4 class="tm-history-title">Deskripsi</h4>
								<p class="tm-mb-p">
									{!!nl2br($produk->deskripsi)!!}
								</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<header class="row tm-welcome-section">
				</header>
@endsection