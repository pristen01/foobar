@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Foos</p>


            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/foos/create" class="button is-primary">Add a new Foo</a>
                        </div>
                        @if($message = Session::get('success'))
                            <div class="alert alert-success ">
                                <p>{{$message}}</p>
                            </div>
                        @endif


                        <div class="column is-12">
                            <table>
                                <tr>


                                    <th>Post Name</th>
                                    <th>name</th>
                                    <th>thud</th>
                                    <th>wombat</th>
                                    <th>kazamm</th>
                                </tr>
                                @foreach($foos as $foo)



                                            <tr style="{{
    $foo->wombat ? 'background-color: cyan;' : 'background-color: white;'
}}">
                                                <td>{{$foo->post?->title}}</td>
                                             <td> {{ $foo->name }}</td>
                                               <td> {{ $foo->thud }}</td>
                                               <td>{{ $foo->wombat }}</td>
                                                <td>{{ $foo->kazaam() }}</td>

                                                <td>
                                                    <a href="{{ route('foos.edit', $foo->id) }}" ><button class="btn btn-primary"> Edit</button></a>
                                                    <a href="{{ route('foos.show', $foo->id) }}" ><button class="btn btn-primary"> View</button></a>


                                                    <form method="POST" action="{{ route('foos.destroy', $foo->id) }}" accept-charset="UTF-8" style="display:inline">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" > Delete</button>

                                                    </form>
                                                </td>

                                            </tr>



                                    </div>
                                @endforeach
                            </table>
                        {{$foos->links()}}}

                        </div>
                    </div>
                </div>

            </div>
@endsection
