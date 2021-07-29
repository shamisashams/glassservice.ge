{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $product->category_id ? __('admin.product-update') : 'admin.product-create')

@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection
{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/form-select2.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m12 12">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <input name="old-images[]" id="old_images" hidden disabled value="{{$product->files}}">
                    <h4 class="card-title">{{$product->category_id ? __('admin.product-update') : __('admin.product-create')}}</h4>
                    {!! Form::model($product,['url' => $url, 'method' => $method,'files' => true]) !!}
                    <div class="row">
                        <div class="col s12 m6 8">
                            <div class="row">
                                <ul class="tabs">
                                    @foreach($languages as $key => $language)
                                        <li class="tab col ">
                                            <a href="#lang-{{$key}}">{{$language->locale}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                @foreach($languages as $key => $language)
                                    <div id="lang-{{$key}}" class="col s12  mt-5">
                                        <div class="input-field ">
                                            {!! Form::text('meta_title['.$key.']',$product->language($language->id) !== null ? $product->language($language->id)->meta_title:  '',['class' => 'validate '. $errors->has('meta_title.*') ? '' : 'valid']) !!}
                                            {!! Form::label('meta_title['.$key.']',__('admin.meta_title')) !!}
                                            @error('meta_title.*')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text('meta_description['.$key.']',$product->language($language->id) !== null ? $product->language($language->id)->meta_description:  '',['class' => 'validate '. $errors->has('meta_description.*') ? '' : 'valid']) !!}
                                            {!! Form::label('meta_description['.$key.']',__('admin.meta_description')) !!}
                                            @error('meta_description.*')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text('meta_keywords['.$key.']',$product->language($language->id) !== null ? $product->language($language->id)->meta_keywords:  '',['class' => 'validate '. $errors->has('meta_keyword.*') ? '' : 'valid']) !!}
                                            {!! Form::label('meta_keywords['.$key.']',__('admin.meta_keyword')) !!}
                                            @error('meta_keywords.*')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text('title['.$key.']',$product->language($language->id) !== null ? $product->language($language->id)->title:  '',['class' => 'validate '. $errors->has('title.*') ? '' : 'valid']) !!}
                                            {!! Form::label('title['.$key.']',__('admin.title')) !!}
                                            @error('title.*')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text('description['.$key.']',$product->language($language->id) !== null ? $product->language($language->id)->description:  '',['class' => 'validate '. $errors->has('description.*') ? '' : 'valid']) !!}
                                            {!! Form::label('description['.$key.']',__('admin.description')) !!}
                                            @error('description.*')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>

                                        <div class="input-field">
                                            <h5 for="description">@lang('admin.content')</h5>
                                            <textarea class="form-control" id="content-{{$key}}"
                                                      name="content">
                                                {!! $product->language($language->id) !== null ? $product->language($language->id)->content:  '' !!}
                                            </textarea>
                                            @error('content['.$key.']')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col s12 m6 8">
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::text('slug',$product->slug,['class' => 'validate '. $errors->has('slug') ? '' : 'valid']) !!}
                                    {!! Form::label('slug',__('admin.slug')) !!}
                                    @error('slug')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="category_id">{{__('admin.category')}}</label>
                                </div>
                                <div class="input-field col s12">
                                    <select name="category_id" class="select2 js-example-programmatic browser-default">
                                        <optgroup>
                                            @foreach($categories as $key => $category)
                                                <option value="{{$category->id}}" {{$key === 0 ? 'selected' : ''}}>
                                                    {{$category->language(app()->getLocale())? substr($category->language(app()->getLocale())->title,0,15): substr($category->language()->title,0,15)}}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                    @error('category_id')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>
                                <div class="input-field"></div>
                                <div class="col s12 mt-3 mb-3">
                                    <label>
                                        <input type="checkbox" name="status"
                                               value="true" {{$product->status ? 'checked' : ''}}>
                                        <span>{{__('admin.status')}}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-images"></div>
                                @if ($errors->has('images'))
                                    <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::submit($product->category_id ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light ']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection

{{-- vendor script --}}
@section('vendor-script')
    <script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        @foreach($languages as $key => $language)
        CKEDITOR.replace('content-{{$key}}', {
            filebrowserUploadUrl: "{{locale_route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        @endforeach
    </script>
@endsection