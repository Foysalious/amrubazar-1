<!-- navbar start -->
<section class="navbar-pc">
	<div class="container">
		<div class="row">
			<div class="nav-carousel owl-carousel owl-theme">
				
				<!-- navbar item start -->
				@foreach(App\Models\Backend\Category::orderBy('id','asc')->where('parent_id',0)->where('is_delete',0)->get() as $category) 
				<div class="item">
				<a href="{{ route('subcat', $category->slug) }}">
						<div class="col-md-12 nav-cat-item">
							<img src="{{ asset('images/category/'.$category->icon_image) }}" class="img-fluid">
						</div>
					</a>
					<p>{{$category->name}}</p>
				</div>
				<!-- navbar item end -->
				@endforeach

				
				<!-- navbar item end -->

			</div>
		</div>
	</div>
</section>
<!-- navbar end -->




















<!-- navbar drop down start -->


















