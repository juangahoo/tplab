@extends('layouts.master')

@section('content')

<!--banner-->

@include("layouts.banner")	

<div class="content">
	<div class="container">
        <div class="content-top">
            <h2 class="new">NEW GAMES</h2>
        
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
					<h3>The Best Features</h3>
					<p>Contrary to popular belief
						, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					<a class=" more-in" href="single.html">Read More</a>
			</div>
		</div>
	</div>
</div>
@endsection