<li>
    <h4 style="background-color:#808080B3; height:40px; border-radius: 4px; overflow:hidden">
        <a href="/posts/{{ $post->id }}" style="text-decoration:none; color:#fff;">{{ $post->title }}</a>
    </h4>
    <a href="/posts/{{ $post->id }}" data-largesrc="{{ $post->file }}" data-title="{{ $post->title }}" data-description= "{{ $post->body }}">
        <img class="img-thumbnail" src="{{ $post->file }}" style="width:250px; height:350px; background-color:#16262a" alt="img01"/>
    </a>
</li>