@extends('layouts.admin')

@section('content')
  
  <!-- ======= Sidebar ======= -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">addcate</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-md-8">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add New Category</h5>
  
                <!-- General Form Elements -->
                <form action="/store" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">descrip</label>
                    <div class="col-sm-10">
                      <input type="text" name="description" class="form-control">
                    </div>
                  </div>
                 
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Save</label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </div>
                    
                  </div>
                  

                </form>
  
              </div>
            </div>
  
          </div>
  
         
        </div>
      </section>




  </main>



  @endsection
