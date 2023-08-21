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
                        <td>
                          <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
                          </a>
                        </td> 
                        <td>
                          <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">
                          <i class="fas fa-edit"></i>
                          </a>
                        </td>        
                      </tr>
                @endforeach 
              </tbody>
            </table>
            <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-primary">Aggiungi un progetto</a>
          </div>
    </div>
</div>

@endsection