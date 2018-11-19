@extends('layouts.master')

@section('content')

<!--banner-->

@include("layouts.banner")	

<div class="content">
	<div class="container">
        <div class="content-top" style="text-align:center">
            <h2 class="new">ÚLTIMOS JUEGOS</h2>
        
			<div class="wrap">	
			    <div class="main">
                    <ul id="og-grid" class="og-grid">

                        @foreach ($posts as $post)

                            @include('posts.post')
                            
                        @endforeach
                        
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
        </div>

        <script src="/js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
        </script>
        
	</div>
	<div class="col-mn">
		<div class="container">
				<div class="col-mn2">
					<h3>Los mejores juegos</h3>
					<br>
					<p>Los juegos de Ricky, la mejor página en dónde encontrarás los ultimos juegos disponibles para descargar desde los mejores servidores.</p>
			</div>
		</div>
	</div>
</div>
@endsection