
@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{ route('foos.store') }}">
                        @csrf
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    New Foo
                                </p>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>there are some errors!</strong>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                </li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            Name: <input type="text" name="name" ><br/>
                                        </div>



                                    <div class="field">
                                        <label class="label">Thud</label>
                                        <div class="control">
                                            Thud: <input type="text" name="thud" ><br/>

                                    </div>

                                    <div class="field">
                                        <label class="label">Wombat</label>
                                        <div class="control">
                                            <input type="radio" name="wombat" value="1" > true <input type="radio" name="wombat" value="0"> false


                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/foos" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


