@extends('backend.layouts.layout')
@section('content')

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Post Example</div>
            <div class="card-body">
              <form method="post" action="{{URL::to('addpost')}}">
                 {{ csrf_field() }}
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>

                  <div class="form-group col-md-12">
                  <label for="inputEmail4">Description</label>
                   <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-maxlength="5000" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                  
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
            </div>
            
          </div>
@stop