@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-2 mt-2 text-end">
                    <a href="{{route('admin.projects.index' )}}" class="btn btn-primary"> Tutti i progetti</a>
                </div>
            </div>
            <div class="col-12">
                <form action="{{route('admin.projects.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" >Title</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{old('title')}}">
                    </div>
                  
                    <div class="form-group">
                        <label class="control-label" >Link</label>
                        <input type="text" id="link" name="link" class="form-control" placeholder="link" value="{{old('link')}}">
                    </div>
                    
                    <div class=" form-group mt-2">
                        <button type="submit" class="btn btn-success"> Salva</button>
                    </div>
                </form>

            </div>
              

        </div>
    </div>

@endsection