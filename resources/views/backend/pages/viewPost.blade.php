@extends('backend.layouts.layout')
@section('content')

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Post Example</div>
            <div class="card-body">
              <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($post_info as $d)
                          <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->title }}</td>
                            <td>{{ $d->user_post }}</td>
                          </tr>
                        @endforeach
                  
                    </tbody>
                  </table>
            </div>
            
          </div>
@stop