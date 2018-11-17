<li>
    <h4 style="background-color:#808080B3">
        <a href="/posts/{{ $post->id }}" style="text-decoration:none; color:black">{{ $post->title }}</a>
    </h4>
    <a href="/posts/{{ $post->id }}" data-largesrc="/images/1.jpg" data-title="{{ $post->title }}" data-description= "{{ $post->body }}">
        <img class="img-responsive" src="/images/thumbs/1.jpg" alt="img01"/>
    </a>
</li>