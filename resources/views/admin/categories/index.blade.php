@extends('admin.layout.master')
@section('title', __('Categories'))
@section('content')
    <div class="row row-card-no-pd">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title">{{__('Categories')}}</h4>
                    </div>

                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#category">
                        {{__('Add')}}
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive table-hover table-sales">
                                <table class="table" id="table">
                                    <thead>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Active')}}</th>

                                    <th>{{__('Action')}}</th>
                                    </thead>
                                        <tbody>
                                                @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$category->name}}</td>
                                                    <td>
                                                        <label class="colorinput switch switch-label switch-pill switch-success switch-md float-left">
                                                            <input class="switch-input active colorinput-input"  type="checkbox" {{$category->active ? "checked":''}} name="active" value="secondary">
                                                            <span class="switch-slider colorinput-color bg-secondary" style=" " data-href="{{route('categories.active', $category) }}"  data-checked="{{ __('on') }}" data-unchecked="{{ __('off') }}"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                    <a href="#" onclick="editCategory('{{$category->name }}','{{route('categories.update',$category->id)}}')" class="btn btn-info btn-xs" data-toggle="modal" data-target="#updateCategory">
                                                        <i class='fa fa-edit'></i>{{__('Edit')}}
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="submit" onclick="removeCat('{{$category->name}}','{{route('categories.destroy',$category->id)}}')">
                                                        <i class="fas fa-trash"></i> {{__('Delete')}}
                                                    </button>
                                                </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                                {{$categories->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- end setting -->
    <div class="modal fade" id="category" tabindex="-1" role="dialog" aria-labelledby="category" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="BlogCategory">{{__('Add Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data" >
                        @csrf

                         <div class="form-group">
                            <label for="name"> {{ __('Category Name')  }}</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary float-right">{{__('Save')}}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateCategory" tabindex="-1" role="dialog" aria-labelledby="updateCategory" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateBlogCategory">{{__('Edit Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="POST" action="" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name"> {{ __('Category Name')  }}</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary float-right">{{__('Save')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $('.active').change(function () {
            let active = $(this).prop('checked');
            let href = $(this).next().attr('data-href');
            if(active){active = 1}else{active = 0}
            $.ajax({
                url: href,
                method: 'post',
                data: {'active': active, '_token': "{{ csrf_token() }}"},
                success: function (data) {
                    // window.location.reload();
                }
            });
        });
        function editCategory(name,href) {
            let modal = $('#updateCategory');
            modal.find('.modal-body input[name="name"]').val(name);
            modal.find('.modal-body form').attr("action",href);
        }
        function removeCat(name, url, e) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: url,
                            method: 'delete',
                            data: {'_token': "{{ csrf_token() }}"},
                            success: function (data) {
                                window.location.reload();
                            }
                        });
                    }
                });
        };
        $('#table').dataTable( {
            "responsive": false,
            "paginate": false,
            'order':[['0','desc']]
        } );

    </script>
@stop
