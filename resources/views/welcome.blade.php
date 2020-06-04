@extends('layouts.app')

@section('content')
	<!-- @include('forms.pay-form') -->
	<div class="row d-flex justify-content-center">
  @if($errors->any())
  <div clas="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
      @endforeach
    </ul>
  </div>
@endif
  <div class="col-md-6">
    <form action="{{ route('pay-form') }}" method="post">
       @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required class="form-control">
        </div>
          <div class="form-group">
          <label for="phone">Номер телефона</label>
          <input type="number" name="phone" id="phone" required class="form-control">
        </div>
        <div class="form-group">
          <label for="username">Имя и фамилия указанные на карте</label>
          <input type="text" name="username" id="username" required class="form-control">
        </div>
        <div class="form-group">
          <label for="card_number">Номер карты</label>
          <div class="input-group">
            <input type="text" name="card_number" id="card_number" class="form-control" required>
            <div class="input-group-append">
              <span class="input-group-text text-muted">
                  <i class="fa fa-cc-visa mx-1"></i>
                  <i class="fa fa-cc-amex mx-1"></i>
                  <i class="fa fa-cc-mastercard mx-1"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="form-group">
              <label><span class="hidden-xs">Срок действия карты</span></label>
              <div class="input-group">
                <input type="number" placeholder="MM" name="cardMonth" id="cardMonth" class="form-control" required>
                <input type="number" placeholder="YY" name="cardYear" id="cardYear" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group mb-4">
              <label data-toggle="tooltip" title="Три цифры на обратной стороне Вашей карты">CVV
                  <i class="fa fa-question-circle"></i>
              </label>
              <input type="text" required name="cvv" id="cvv" class="form-control">
            </div>
          </div>
        </div>
          <div class="row d-flex justify-content-end">
            <div class="col-6">
              <div class="form-group">
               <label><span>Сумма оплаты</span></label>
                <div class="input-group">
                  <input type="number" name="payment_amount" id="payment_amount" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="currency"><span>Валюта</span></label>
                <div class="input-group">
                 <select class="form-control" id="currency">
                    <option value="kz">KZ</option>
                    <option value="dollar">Dollar</option>
                    <option value="rub">Rub</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        <button type="submit" class="subscribe btn btn-primary rounded-pill shadow-sm pay-submit">Оплатить</button>
      </form>
  </div>
</div>
@endsection