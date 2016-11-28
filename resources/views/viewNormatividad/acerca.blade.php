<section id="normatividad" style="margin-top: 50px">
	<div class="row">
		@foreach($documents as $document)
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="{{ url( $document['url'] ) }}" target="_blank" style="color: #545454;">
				<p>
					<span class="glyphicon glyphicon-book" aria-hidden="true"></span> {{ $document['name'] }}
				</p>
			</a>
		</div>
		@endforeach
	</div>
</section>