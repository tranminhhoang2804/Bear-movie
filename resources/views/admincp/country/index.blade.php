@extends('layouts.app')

@section('content')
            <table class="table">
                  <thead>
                    <tr>
                      <th class="bg-primary" scope="col">#</th>
                      <th class="bg-info" scope="col">Tên quốc gia</th>
                      <th class="bg-primary" scope="col">Mô tả</th>
                      <th class="bg-info" scope="col">Slug</th>
                      <th class="bg-primary" scope="col">Active</th>
                      <th class="bg-info" scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $cate)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$cate->title}}</td>
                      <td>{{$cate->description}}</td>
                       <td>{{$cate->slug}}</td>
                      <td>
                          @if($cate->status)
                            Hiển thị
                          @else
                            Ẩn
                          @endif
                      </td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['country.destroy',$cate->id],
                            'onsubmit'=>'return confirm("Delete?")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('country.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
@endsection