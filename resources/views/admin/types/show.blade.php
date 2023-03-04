@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">slug</th>
                        <th scope="col">actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th>{{$type['id']}}</th>
                          <td>{{$type['name']}}</td>
                          <td>{{$type['slug']}}</td>
                        <td>
                            <div class="d-flex gap-3 flex-column">
                              <form action="{{route('admin.types.destroy', ['type' => $type['slug']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" name="" id="" value="delete">
                              </form>
                              <a href="{{ route('admin.types.edit', $type )}}">
                                  <button type="button" class="btn btn-primary">edit</button>
                                </a>
                            </div>
                          </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection