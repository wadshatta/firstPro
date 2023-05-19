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
                    <tr>
                      <th scope="row">2</th>
                      <td>Bridie Kessler</td>
                      <td>Developer</td>
                      <td>2014-12-05</td>
                      <td><button type="submit" class="btn btn-primary">Edit</button></td>
                      <td><button type="submit" class="btn btn-danger">Delete</button></td>
                      
                    </tr>
                   
                  
                  
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