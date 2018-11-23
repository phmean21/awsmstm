@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Category list @endslot
            @slot('parent') Main @endslot
            @slot('active')   Category  @endslot
        @endcomponent
        <hr>
        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i
                    class="fa fa-plus-square-o"></i> Make category</a>
        <table class="table">
            <thead>
            <th>Name</th>
            <th>Publications</th>
            <th class="text-right">Action</th>
            </thead>
        </table>
        <tbody>
        @forelse($categories as  $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td>
                    <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        @empty
            <tr>
                <th><h4 class="text-center">data not exist</h4></th>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <td colspan="3">
            <ul class="pagination pull-right">
                {{$categories->links()}}
            </ul>
        </td>
        </tfoot>

    </div>
@endsection