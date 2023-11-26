@extends('layouts.master')
 
@section('title', 'Page Title')
 

 
@section('content')
  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              {{-- attack --}}
              {{-- prevention --}}
              <h5 class="card-title">Add Book</h5>
              <a href="{{route('list-books')}}"><button class="btn btn-primary pull-right">All Books List</button></a>
              <!-- General Form Elements -->
              <form method="POST" action="{{route('store-book')}}">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="name" name="name" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="description">
                    </textarea><!-- End TinyMCE Editor -->
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@stop
