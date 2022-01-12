@extends('admin.layout.master')
@section('title','Create')
@section('content')
    <div class="row row-card-no-pd">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title">{{__('Add Course')}}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('courses.store')}}"  enctype="multipart/form-data" accept-charset="utf-8" file="true">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">{{ __('Select Category') }}*</label>
                                    <select name="category_id" class="custom-select form-control auto-save" required >
                                        <option value="">{{ __('Select') }} {{ __('Category') }}</option>
                                        @foreach($categories as $key => $value)
                                            <option value="{{ $key }}">{{ $value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="level">{{ __('Select Level') }}*</label>
                                    <select name="level" class="custom-select form-control auto-save" required >
                                        <option value="">{{ __('Select') }} {{ __('Level') }}</option>
                                        <option value="beginner">{{ __('Beginner') }}</option>
                                        <option value="immediate">{{ __('immediate') }}</option>
                                        <option value="high">{{ __('High') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">{{ __('Name') }}*</label>
                                    <input type="text" name="name" class="form-control" required >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">{{ __('Description') }}*</label>
                                    <input type="text" name="description" class="form-control" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rating">{{ __('Rating') }}*</label>
                                    <input type="number"  max="5" name="rating" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hours">{{ __('Hours') }}*</label>
                                    <input type="number" name="hours"  class="form-control" required>
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
