<li>
    <h4 style="background-color:#808080B3">
        <a href="/posts/{{ $post->id }}" style="text-decoration:none; color:black">{{ $post->title }}</a>
    </h4>
    <a href="/posts/{{ $post->id }}" data-largesrc="/images/Shadow-Tomb-Raider-PC-portada.jpg" data-title="{{ $post->title }}" data-description= "{{ $post->body }}">
        <img class="img-responsive" src="/images/thumbs/Shadow-Tomb-Raider-PC-portada.jpg" alt="img01"/>
    </a>
</li>