@extends('inc.navebar')
@extends('layouts.app')

@section('main')


<main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Edit a category!</h1>
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('categories.update',$category) }}" method="post" >
                    @csrf
                    @method('put')
                    
                    <label for="name"><span>category name</span></label>
                    <input type="text" id="title" name="name" value="{{ $category->name }}" />
                    {{--  @error('name')
                        <p style ="color: red; margin-bottom: 25px;">{{ $message }}</p>
                    @enderror  --}}

                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>
            <div class="create-categories">
                <a href="{{route('categories.index')}}">Categories list <span>&#8594;</span></a>
            </div>
        </section>
    </main>



@endsection