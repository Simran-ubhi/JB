@include('partials/header')

 <div class="sale-form">
    
    <form method = "" action="{{ route('addsale') }}">

    @if(Session::get('Success'))
        <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
    @endif

    @if(Session::get('Fail'))
        <p style="background-color:red; padding:10px">{{Session::get('Fail')}}</p>
    @endif
    @csrf
   
    <h1>New Sale Form</h1>
        <label for="name">Name: </label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('Name')**{{$message}}@enderror
        <br>
        <label for="pnumber">Number: </label>
        <input type="text" name="pnumber" value="{{old('pnumber')}}">
        @error('pnumber')**{{$message}}@enderror
        <br>
        <label for="vouchers">Vouchers: </label>
        <input type="text" name="vouchers" value="{{old('vouchers')}}">
        @error('vouchers')**{{$message}}@enderror
        <br>
        <label for="cost">Cost: </label>
        <input type="text" name="cost" value="{{old('cost')}}">
        @error('cost')**{{$message}}@enderror
        <br>
        <label for="discount">Discount: </label>
        <input type="text" name="discount" id="" value="{{old('discount')}}">
        @error('discount')**{{$message}}@enderror
        <br>
        <label for="total_amount">Total Amount: </label>
        <input type="text" name="total_amount" value="{{old('total_amount')}}">
        @error('total_amount')**{{$message}}@enderror
        <br>
        <button>Save</button>
    </form>
</div>