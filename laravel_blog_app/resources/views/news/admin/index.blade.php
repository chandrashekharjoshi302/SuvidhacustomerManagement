@extends('news.admin.layouts.app')
@section('contant')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="{{route('AdminNews_post_DataPost')}}" method="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
  @endsection
