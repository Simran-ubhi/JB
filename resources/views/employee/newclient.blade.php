
@include('partials/header')


<section class="New">
        <h1>NEW CLIENT</h1>

        <form class="form-new" action="">
                 <label class="Name-lbl"> Name: </label> 
                <input name="cname" type="text"> <br> <br>

                <label class="Contact-lbl"> Contact: </label> 
                <input name="contact" type="number"> <br> <br>

                <label class="referred_by"> Referred By: </label> 
                <input name="refby" type="text"> <br> 

                <h3>Activation fee : Rs 99/-</h3>
             
                <h3>Free Ticket: 1</h3>

                <label class="paid_ticket6"> Ticket: </label> 
                <input name="ticket" list="tickets">
                <datalist id="tickets" style="display:flex">
                    <option value="PVR">
                    <option value="Carnival">
                </datalist>     
                <label class="PaidTicket-lbl"> Paid Ticket: </label> 
                <input name="paid_ticket" type="text"> <br> <br>

                <label class="PaidFood-lbl"> Paid Food: </label> 
                <input name="paid_food" type="text"> <br> <br>

                <label class="discount-lbl"> Discount: </label>
                <input name="discount" type ="number">  <br> <br> 

                <label class="payAmount-lbl"> Payable Amount: </label> 
                <input name="payable_amount" type="number"> <br> <br>
              
                <label class="paymethod-lbl"> Payement method: </label> 
                <input name="payment_method" type="text"> <br> <br>

                <label class="referrence-lbl"> Reference ID: </label> 
                <input name="referrece_ID" type="text"> <br> <br>
             </form>  
            <hr>
            <button class="info-save"> SAVE </button>
            <hr>

        </form>
    </section>