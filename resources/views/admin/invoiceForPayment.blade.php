<div class="row d-flex justify-content-center">
  <div class="col-md-6">
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
    <form action="{{ route('pay-form') }}" method="post">
       @csrf
      
        <div class="form-group">
          <label for="username">Имя и фамилия плательщика</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="row d-flex justify-content-end">
          <div class="col-6">
            <div class="form-group">
             <label><span>Сумма оплаты</span></label>
              <div class="input-group">
                <input type="number" name="payment_amount" id="payment_amount" class="form-control"  step="0.01">
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="currency"><span>Валюта</span></label>
              <div class="input-group">
               <select class="form-control" id="currency">
                  <option value="kzt">KZ</option>
                  <!-- <option value="dollar">Dollar</option>
                  <option value="rub">Rub</option> -->
                </select>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="subscribe btn btn-primary rounded-pill shadow-sm pay-submit">Оплатить</button>
      </form>
  </div>
</div>