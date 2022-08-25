
@include('partials/header')


<section class="New">
        <h1>NEW CLIENT</h1>

        <form action=" {{ route('createclient') }} " class="form-new" method="POST" >
            @if(Session::get('Success'))
            <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
            @endif

            @if(Session::get('Fail'))
            <p style="background-color:red; padding:10px">{{Session::get('Fail')}}</p>
            @endif
            @csrf
                <label for="cname" class="Name-lbl"> Name: </label> 
                <input name="cname" type="text" value="{{old('cname')}}"> <br>
                @error('cname')**{{$message}}@enderror <br>

                <label for="contact" class="Contact-lbl"> Contact: </label> 
                <input name="contact" type="text" value="{{old('contact')}}"> <br>
                @error('contact')**{{$message}}@enderror <br>

                <label for="Referredby" class="referred_by">Referred by: </label> 
                <input name="Referredby" type="text" value="{{old('empID')}}"> <br> 
                @error('Referredby')**{{$message}}@enderror <br>

                <h3>Activation fee : Rs 99/-</h3>
             
                <h3>Free Ticket: 1</h3>

                <label for="ticket" class="paid_ticket"> Ticket: </label> 
                <input name="ticket" list="tickets" value="{{old('ticket')}}">
                @error('ticket')**{{$message}}@enderror <br>
                <datalist id="tickets" style="display:flex">
                    <option value="PVR">
                    <option value="Carnival">
                </datalist>     
                <label for="paidticket" class="PaidTicket-lbl"> Paid Ticket: </label> 
                <input name="paidticket" type="text" value="{{old('paidticket')}}"> <br> 
                @error('paidticket')**{{$message}}@enderror <br>

                <label for="paidfood" class="PaidFood-lbl"> Paid Food: </label> 
                <input name="paidfood" type="text" value="{{old('paidfood')}}"> <br> 
                @error('paidfood')**{{$message}}@enderror <br>

                <label for="discount" class="discount-lbl"> Discount: </label>
                <input name="discount" type ="text" value="{{old('discount')}}">  <br> 
                @error('discount')**{{$message}}@enderror <br>

                <label for="payableamount" class="payAmount-lbl"> Payable Amount: </label> 
                <input name="payableamount" type="text" value="{{old('payableamount')}}"> <br> 
                @error('payableamount')**{{$message}}@enderror <br>
              
                <label for="paymentmethod" class="paymethod-lbl"> Payement method: </label> 
                <input name="paymentmethod" type="text" value="{{old('paymentmethod')}}"> <br> 
                @error('paymentmethod')**{{$message}}@enderror <br>
 
                <label for="referreceID" class="referrence-lbl"> Reference ID: </label> 
                <input name="referreceID" type="text" value="{{old('referreceID')}}"> <br> 
                @error('referreceID')**{{$message}}@enderror <br>
                <br>
                  <button class="info-save"> SAVE </button>
                <hr>
    
        </form>
    </section>