@extends('base')

@section('body')
    <section class="posts">
        <article>
            <h1><a href="{{ route('article', $post->getSlug()) }}" title="{{ $post->getTitle() }}">{{ $post->getTitle() }}</a></h1>
            <span class="meta">Posted on the 24th of December 1984.</span>
            <section class="body">{{ $post->getHtml() }}</section>
            <a href="{{ route('index') }}" title="Back to the DayleRees.com home page." class="back-link">&larr; Back to index.</a>
        </article>
        <section class="comments">
                <div id="disqus_thread"></div>
                <script type="text/javascript">
                    var disqus_shortname = 'daylerees';
                    var disqus_developer = 1;
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments.</a></noscript>

        </section>
    </section>
@stop
