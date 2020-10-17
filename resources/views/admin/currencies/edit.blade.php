@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.currency.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.currencies.update", [$currency->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.currency.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $currency->code) }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.currency.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $currency->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('enabled') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="enabled" value="0">
                    <input class="form-check-input" type="checkbox" name="enabled" id="enabled" value="1" {{ $currency->enabled || old('enabled', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="enabled">{{ trans('cruds.currency.fields.enabled') }}</label>
                </div>
                @if($errors->has('enabled'))
                    <span class="text-danger">{{ $errors->first('enabled') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.enabled_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="precision">{{ trans('cruds.currency.fields.precision') }}</label>
                <input class="form-control {{ $errors->has('precision') ? 'is-invalid' : '' }}" type="number" name="precision" id="precision" value="{{ old('precision', $currency->precision) }}" step="1" required>
                @if($errors->has('precision'))
                    <span class="text-danger">{{ $errors->first('precision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.precision_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="symbol">{{ trans('cruds.currency.fields.symbol') }}</label>
                <input class="form-control {{ $errors->has('symbol') ? 'is-invalid' : '' }}" type="text" name="symbol" id="symbol" value="{{ old('symbol', $currency->symbol) }}" required>
                @if($errors->has('symbol'))
                    <span class="text-danger">{{ $errors->first('symbol') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.symbol_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('symbol_first') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="symbol_first" value="0">
                    <input class="form-check-input" type="checkbox" name="symbol_first" id="symbol_first" value="1" {{ $currency->symbol_first || old('symbol_first', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="symbol_first">{{ trans('cruds.currency.fields.symbol_first') }}</label>
                </div>
                @if($errors->has('symbol_first'))
                    <span class="text-danger">{{ $errors->first('symbol_first') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.symbol_first_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thousand_seperator">{{ trans('cruds.currency.fields.thousand_seperator') }}</label>
                <input class="form-control {{ $errors->has('thousand_seperator') ? 'is-invalid' : '' }}" type="text" name="thousand_seperator" id="thousand_seperator" value="{{ old('thousand_seperator', $currency->thousand_seperator) }}">
                @if($errors->has('thousand_seperator'))
                    <span class="text-danger">{{ $errors->first('thousand_seperator') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.thousand_seperator_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="decimal_mark">{{ trans('cruds.currency.fields.decimal_mark') }}</label>
                <input class="form-control {{ $errors->has('decimal_mark') ? 'is-invalid' : '' }}" type="text" name="decimal_mark" id="decimal_mark" value="{{ old('decimal_mark', $currency->decimal_mark) }}" required>
                @if($errors->has('decimal_mark'))
                    <span class="text-danger">{{ $errors->first('decimal_mark') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.currency.fields.decimal_mark_helper') }}</span>
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