@extends('layouts.admin.base')

@section('title', 'Email Template')

@section('content')

    <div class="row">

        <div class="col-md-9">

            <div class="box box-default">

                <div class="box-header with-border">
                    <h3 class="box-title">Edit</h3>
                </div>

                <form class="" method="post" action="{{ route('admin.email.template.save') }}">
                    <div class="box-body">

                        <div class="form-group {{ $errors->has('display_name') ? ' has-error' : '' }}">
                            <label for="inputDisplayName" class="control-label">Display Name*</label>
                            <input type="text" class="form-control" name="display_name" placeholder="Enter Display Name" value="{{ old('display_name') ? old('display_name') : $data->display_name }}" required>
                            @if ($errors->has('display_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('display_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('to') ? ' has-error' : '' }}">
                            <label for="inputDescription" class="control-label">To
                            </label>
                            <textarea class="form-control" name="to" placeholder="address@mail.com, address2@mail.com ...">{{ old('to') ? old('to') : $data->to }}</textarea>
                            <span class="help-block">You can enter many e-mail addresses separated by commas</span>
                            @if ($errors->has('to'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('to') !!}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 {{ $errors->has('from_name') ? ' has-error' : '' }}">
                                <label for="inputPosition" class="control-label">From name*</label>
                                <input type="text" class="form-control" name="from_name" placeholder="Enter From Name" value="{{ old('from_name') ? old('from_name') : $data->from_name }}" required>

                                @if ($errors->has('from_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('from_name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('from_email') ? ' has-error' : '' }}" style="width: 50%">
                                <label for="inputPosition" class="control-label">From email*</label>
                                <input type="text" class="form-control" name="from_email" placeholder="Enter From Email" value="{{ old('from_email') ? old('from_email') : $data->from_email }}" required>

                                @if ($errors->has('from_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('from_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="inputPosition" class="control-label">Subject*</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{ old('subject') ? old('subject') : $data->subject }}" required>
                            @if ($errors->has('subject'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="inputDescription" class="control-label">Body*</label>
                            <textarea class="form-control tinymce-editor" rows="30" name="body" placeholder="">{!! old('body') ? old('body') : $data->body !!}</textarea>
                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 {{ $errors->has('status') ? ' has-error' : '' }}">
                                <label>Status*</label>
                                <select class="form-control" name="status" required>
                                    <option value="">Please select status</option>
                                    @foreach($data->arrStatus as $key => $iter)
                                        <option value="{{ $key }}" {{ (old('status') ? old('status')  : $data->status) == $key ? " selected" : "" }}>{{ $iter }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 {{ $errors->has('position') ? ' has-error' : '' }}">
                                <label for="inputPosition" class="control-label">Position*</label>
                                <input type="text" class="form-control" name="position" placeholder="Enter Position" value="{{ old('position') ? old('position') : $data->position }}" required>
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="inputDescription" class="control-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Trigger, Indicator, Distribution, Other" rows="5">{{ old('description') ? old('description') : $data->description }}</textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('description') !!}</strong>
                                </span>
                            @endif
                        </div>

                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-default pull-right" href="{{ route('admin.email.template') }}" role="button">Back to Emails templates</a>
                    </div>
                </form>

            </div>

        </div>

    </div>

@endsection

@push('tinymce')
<script src="{{ asset('js/admin/tinymce.js') }}"></script>
@endpush

@push('script')

<script>
    $(function(){});
</script>

@endpush