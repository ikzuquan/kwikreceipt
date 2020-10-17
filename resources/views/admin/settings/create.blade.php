@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.settings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="company_name">{{ trans('cruds.setting.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}" required>
                @if($errors->has('company_name'))
                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.setting.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" required>{{ old('address') }}</textarea>
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tel">{{ trans('cruds.setting.fields.tel') }}</label>
                <input class="form-control {{ $errors->has('tel') ? 'is-invalid' : '' }}" type="text" name="tel" id="tel" value="{{ old('tel', '') }}" required>
                @if($errors->has('tel'))
                    <span class="text-danger">{{ $errors->first('tel') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.tel_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.setting.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax">{{ trans('cruds.setting.fields.fax') }}</label>
                <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', '') }}">
                @if($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="currency_id">{{ trans('cruds.setting.fields.currency') }}</label>
                <select class="form-control select2 {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency_id" id="currency_id" required>
                    @foreach($currencies as $id => $currency)
                        <option value="{{ $id }}" {{ old('currency_id') == $id ? 'selected' : '' }}>{{ $currency }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <span class="text-danger">{{ $errors->first('currency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="receipt_prefix">{{ trans('cruds.setting.fields.receipt_prefix') }}</label>
                <input class="form-control {{ $errors->has('receipt_prefix') ? 'is-invalid' : '' }}" type="text" name="receipt_prefix" id="receipt_prefix" value="{{ old('receipt_prefix', 'OR-') }}" required>
                @if($errors->has('receipt_prefix'))
                    <span class="text-danger">{{ $errors->first('receipt_prefix') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.receipt_prefix_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_digit">{{ trans('cruds.setting.fields.number_digit') }}</label>
                <input class="form-control {{ $errors->has('number_digit') ? 'is-invalid' : '' }}" type="number" name="number_digit" id="number_digit" value="{{ old('number_digit', '8') }}" step="1">
                @if($errors->has('number_digit'))
                    <span class="text-danger">{{ $errors->first('number_digit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.number_digit_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="next_number">{{ trans('cruds.setting.fields.next_number') }}</label>
                <input class="form-control {{ $errors->has('next_number') ? 'is-invalid' : '' }}" type="number" name="next_number" id="next_number" value="{{ old('next_number', '1') }}" step="1" required>
                @if($errors->has('next_number'))
                    <span class="text-danger">{{ $errors->first('next_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.next_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.setting.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes') }}</textarea>
                @if($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection