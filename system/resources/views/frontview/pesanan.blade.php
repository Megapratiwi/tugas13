@extends ('frontview.template.base')

@section ('content')

<header class="row tm-welcome-section">

</header>

<h3 style="margin-left: 50px;">Pesanan Anda</h3>

			<div class="tm-container-inner tm-persons">
				<div class="row">
					<article class="col-lg-6">
						<figure class="tm-person">
							<img widht="100px" height="100px" src="{{url("public/$produk->foto")}}" alt="">
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">{{$produk->nama}}</h4>
								<p class="tm-person-title">Rp. {{$produk->harga}}</p>
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
								
							</div>
						</div>	
					</div>
				</div>
			</div>
			<header class="row tm-welcome-section">
				</header>
@endsection