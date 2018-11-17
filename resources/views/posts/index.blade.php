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
                        
                        <!--
                        <li>
                            <a href="#" data-largesrc="/images/2.jpg" data-title="Angry Birds" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
                                <img class="img-responsive" src="/images/thumbs/2.jpg" alt="img02"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-largesrc="/images/3.jpg" data-title="Bike Games"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
                                <img class="img-responsive" src="/images/thumbs/3.jpg" alt="img03"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-largesrc="/images/4.jpg" data-title="Temple Run"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
                                <img class="img-responsive" src="/images/thumbs/4.jpg" alt="img01"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-largesrc="/images/5.jpg" data-title="Car Games"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
                                <img class="img-responsive" src="/images/thumbs/5.jpg" alt="img01"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-largesrc="/images/6.jpg" data-title="Fite Games"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
                                <img class="img-responsive" src="/images/thumbs/6.jpg" alt="img02"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-largesrc="/images/7.jpg" data-title="Fite Games"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
                                <img class="img-responsive" src="/images/thumbs/7.jpg" alt="img03"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-largesrc="/images/8.jpg" data-title="Panda Game" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
                                <img class="img-responsive" src="/images/thumbs/8.jpg" alt="img01"/>
                            </a>
                        </li>
                        -->
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