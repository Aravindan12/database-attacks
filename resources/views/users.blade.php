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
              <h5 class="card-title">Users</h5>
              <a href="{{route('add-user')}}"><button class="btn btn-primary pull-right">Add User</button></a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)       
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@stop
