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
              <h5 class="card-title">Books</h5>
              <a href="{{route('add-book')}}"><button class="btn btn-primary pull-right">Add Book</button></a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($books as $book)       
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$book->name}}</td>
                      <td>{!! $book->description !!}</td>
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

  {{-- malicious code that used to create random book data at 2 sec time interval --}}
  {{-- <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>

  <script>
    axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

    function randomNumberBetween(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function randomString(charsCount = 16) {
      let characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
      
      return Array.from('x'.repeat(charsCount))
      .map(() => characters.charAt(Math.floor(Math.random() * characters.length)))
      .join('')
    }

    function randomSentance(wordCount = 5) {
      return Array.from('x'.repeat(wordCount))
      .map(() => randomString(randomNumberBetween(3, 7)))
      .join('')
    }

    setInterval(() => {
      axios.post('http://localhost:8000/store-book', {
        name: randomSentance(5),
        description: randomSentance(10),
      })
    }, 2000);
  </script> --}}
@stop
