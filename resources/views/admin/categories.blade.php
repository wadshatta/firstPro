@extends('layouts.admin')

@section('content')


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Categories</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Categories</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Categories</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($CateView as $data)
                  <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->created_at}}</td>
                    <td><a href="/edit/{{$data->id}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/destroy/{{$data->id}}" class="btn btn-danger">Delete</a></td>
                    
                  </tr>
                 @endforeach
                
                
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

         
         
        
        </div>

      
      </div>
    </section>

</main>

  @endsection