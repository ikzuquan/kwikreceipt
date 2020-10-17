@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.receipt.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.receipts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="date">{{ trans('cruds.receipt.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}" required>
                @if($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="customer_name">{{ trans('cruds.receipt.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', '') }}" required>
                @if($errors->has('customer_name'))
                    <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.receipt.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.receipt.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address') }}</textarea>
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.receipt.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_method">{{ trans('cruds.receipt.fields.payment_method') }}</label>
                <input class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" type="text" name="payment_method" id="payment_method" value="{{ old('payment_method', '') }}" required>
                @if($errors->has('payment_method'))
                    <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reference">{{ trans('cruds.receipt.fields.reference') }}</label>
                <input class="form-control {{ $errors->has('reference') ? 'is-invalid' : '' }}" type="text" name="reference" id="reference" value="{{ old('reference', '') }}">
                @if($errors->has('reference'))
                    <span class="text-danger">{{ $errors->first('reference') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.receipt.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.receipt.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', '') }}" step="0.0001" required>
                @if($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="discount">{{ trans('cruds.receipt.fields.discount') }}</label>
                <input class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" type="number" name="discount" id="discount" value="{{ old('discount', '') }}" step="0.0001">
                @if($errors->has('discount'))
                    <span class="text-danger">{{ $errors->first('discount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.discount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="paid">{{ trans('cruds.receipt.fields.paid') }}</label>
                <input class="form-control {{ $errors->has('paid') ? 'is-invalid' : '' }}" type="number" name="paid" id="paid" value="{{ old('paid', '0') }}" step="0.001" required>
                @if($errors->has('paid'))
                    <span class="text-danger">{{ $errors->first('paid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.paid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="balance">{{ trans('cruds.receipt.fields.balance') }}</label>
                <input class="form-control {{ $errors->has('balance') ? 'is-invalid' : '' }}" type="number" name="balance" id="balance" value="{{ old('balance', '') }}" step="0.0001" required>
                @if($errors->has('balance'))
                    <span class="text-danger">{{ $errors->first('balance') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receipt.fields.balance_helper') }}</span>
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