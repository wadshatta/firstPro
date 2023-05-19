@extends('layouts.admin')

@section('content')
  
  <!-- ======= Sidebar ======= -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add new Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-md-10">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Products</h5>
  
                <!-- General Form Elements -->
                <form action="/product/astore" method="POST">
                    @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">describe</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">image</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Categories</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="inputEmail" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            @foreach($CateView as $data)  
                            <option>{{$data->name}}</option>
                            @endforeach
                           
                          </select>
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
