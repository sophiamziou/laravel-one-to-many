@extends('layouts.admin')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col">
              <h2>DETTAGLIO TIPOLOGIA</h2>
              <p><strong>nome: </strong>{{$type['name']}}</p>
              <h5 >QUESTA TIPOLOGIA HA {{count($type['projects'])}} PROGETTI</h5>
              <div class="d-flex gap-3">
                @forelse ($type['projects'] as $item)
                <div class="card my-3" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$item['slug']}}</h6>
                    <p class="card-text">{{$item['content']}}</p>
                    <a href="{{ route('admin.projects.show',['project' => $item['slug']]) }}">
                      <button type="button" class="btn btn-primary">visualizza il progetto</button>
                    </a> 
                  </div>
                </div>
                @empty
                <div class="container">
                  <div class="row justify-content-center mt-5">
                      <div class="col-lg-8 col-md-10 col-sm-12">
                          <div class="alert alert-primary text-center" role="alert">
                              <p>Non ci sono progetti appartenenti a questa tipologia</p>
                          </div>
                      </div>
                  </div>
                </div>
                @endforelse
              </div>
              <div class="d-flex gap-3">
                  <form action="{{route('admin.types.destroy', ['type' => $type['slug']])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" name="" id="" value="delete">
                  </form>
                  <a href="{{ route('admin.types.edit', $type )}}">
                      <button type="button" class="btn btn-primary">edit</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection