@extends('admin.layout.master')
@section('title','Create')
@section('content')
    <div class="row row-card-no-pd">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title">{{__('Edit Course')}}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('courses.update',$course->id)}}"  enctype="multipart/form-data" accept-charset="utf-8" file="true">
                        @method('Put')
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">{{ __('Select Category') }}*</label>
                                    <select name="category_id" class="custom-select form-control auto-save" required >
                                        <option value="">{{ __('Select') }} {{ __('Category') }}</option>
                                        @foreach($categories as $key => $value)
                                            <option {{$course->category_id == $key ?'selected' : ''}} value="{{ $key }}">{{ $value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="level">{{ __('Select Level') }}*</label>
                                    <select name="level" class="custom-select form-control auto-save" required >
                                        <option value="">{{ __('Select') }} {{ __('Level') }}</option>
                                        <option {{$course->level == 'beginner' ?'selected' : ''}} value="beginner">{{ __('Beginner') }}</option>
                                        <option {{$course->level == 'immediate' ?'selected' : ''}} value="immediate">{{ __('immediate') }}</option>
                                        <option {{$course->level == 'high' ?'selected' : ''}} value="high">{{ __('High') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">{{ __('Name') }}*</label>
                                    <input type="text" name="name" value="{{$course->name}}" class="form-control" required >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">{{ __('Description') }}*</label>
                                    <input type="text" name="description" value="{{$course->description}}" class="form-control" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rating">{{ __('Rating') }}*</label>
                                    <input type="number"  max="5" name="rating" value="{{$course->rating}}" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hours">{{ __('Hours') }}*</label>
                                    <input type="number" name="hours" value="{{$course->hours}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success float-right">{{__('Save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

