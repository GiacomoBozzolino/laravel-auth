@extends('layouts.admin')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-12">
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Link</th>
                      <th scope="col">Slug</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($projects as $project)
                      <tr>
                        <td>{{$project-> name}}</td>
                        <td>{{$project-> link}}</td>
                        <td>{{$project-> slug}}</td>    
                      </tr>
                    @endforeach  
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection