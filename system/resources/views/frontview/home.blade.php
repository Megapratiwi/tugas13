@extends ('frontview.template.base')

@section ('content')

<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
				<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
			</header>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div class="tm-gallery-page">
					@foreach($list_produk as $produk)
					<article class="col-md-3 tm-gallery-item" style="margin-right:20px;">
						<figure>
							<img widht="50px" height="100px" src="{{url("public/$produk->foto")}}" alt="">
							<figcaption>
								<h4 class="tm-gallery-title">{{$produk->nama}}</h4>
								<p class="tm-gallery-price">{{$produk->harga}}</p>
							</figcaption>
						</figure>
						<a href="{{url('produk', $produk->id)}}" class="tm-btn tm-btn-default tm-right">Cek Disini</a>
					</article>
					@endforeach
				</div> <!-- gallery page 1 -->
				<div class="col-md-12">
					<div class="row">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
						{!! $list_produk->links() !!}
						</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="{{ url('public/shop') }}/img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
							<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>

@endsection