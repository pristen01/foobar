
@extends('common.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Foo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('foos.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('foos.update',$foo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            Name: <input type="text" name="name" value="{{ $foo->name }}"><br/>
            Thud: <input type="text" name="thud" value="{{ $foo->thud}}"><br/>
            Post name: <input type="text" name="thud" value="{{$foo->post?->title}}"><br/>
            Wombat: <input type="radio" name="wombat" value="1" {{ $foo->wombat}}> true <input type="radio" name="wombat" value="0"{{ $foo->wombat}}> false
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
