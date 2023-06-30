@extends('common.master')

@section('content')
    <section class="hero  is-large  is-bold is-primary"  style="background: url('{{$post->img_url}}') no-repeat center center; background-size: cover;" >
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{$post->title}}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
use
                <div class="column is-12">

                    <div class="content">
                        <p>Published at: {{ $post->published_at }}</p>

                        {!! $post->body !!}

                        @foreach($post->foos as $foo)
                            <h1>{{ $foo->name}}</h1>
                            <h1>{{ $foo->thud}}</h1>
                            <h1>{{ $foo->wombat}}</h1>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


