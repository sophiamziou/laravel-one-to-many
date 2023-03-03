@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">content</th>
                        <th scope="col">slug</th>
                        <th scope="col">actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th>{{$project['id']}}</th>
                          <td>{{$project['title']}}</td>
                          <td>{{$project['content']}}</td>
                          <td>{{$project['slug']}}</td>
                          <td>
                            <div class="d-flex gap-3 flex-column">
                              <form action="{{route('admin.projects.destroy', ['project' => $project['slug']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" name="" id="" value="delete">
                              </form>
                              <a href="{{ route('admin.projects.edit', $project )}}">
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