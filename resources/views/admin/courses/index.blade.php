@extends('admin.layout.master')
@section('title', __('Courses'))
@section('content')
    <div class="row row-card-no-pd">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title">{{__('Courses')}}</h4>
                    </div>

                    <a href="{{route('courses.create')}}" type="button" class="btn btn-success float-right" >
                        {{__('Add')}}
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive table-hover table-sales">
                                <table class="table" id="table">
                                    <thead>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Category')}}</th>
                                    <th>{{__('Level')}}</th>
                                    <th>{{__('Hours')}}</th>
                                    <th>{{__('Views')}}</th>
                                    <th>{{__('Rating')}}</th>
                                    <th>{{__('Active')}}</th>
                                    <th>{{__('Action')}}</th>
                                    </thead>
                                    <tbody>
                                                @foreach($courses as $course)
                                                <tr>
                                                    <td>{{$course->name}}</td>
                                                    <td>{{$course->category->name}}</td>
                                                    <td>{{$course->level}}</td>
                                                    <td>{{$course->hours}}</td>
                                                    <td>{{$course->views}}</td>
                                                    <td>{{$course->rating}}</td>
                                                    <td>
                                                        <label class="colorinput switch switch-label switch-pill switch-success switch-md float-left">
                                                            <input class="switch-input active colorinput-input"  type="checkbox" {{$course->active ? "checked":''}} name="active" value="secondary">
                                                            <span class="switch-slider colorinput-color bg-secondary" style=" " data-href="{{route('courses.active', $course) }}"  data-checked="{{ __('on') }}" data-unchecked="{{ __('off') }}"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('courses.edit',$course->id)}}"  class="btn btn-info btn-xs" >
                                                            <i class='fa fa-edit'></i>{{__('Edit')}}
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="submit" onclick="removeCourse('{{$course->name}}','{{route('courses.destroy',$course->id)}}')">
                                                            <i class="fas fa-trash"></i> {{__('Delete')}}
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                                {{$courses->links() }}
                            </div>
                        </div>

                    </div>
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

        function removeCourse(name, url, e) {
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
