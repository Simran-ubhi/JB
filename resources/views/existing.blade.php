
@include('partials/header')
<h2></h2>
<section class = "existing">
        <h3 class="cust_id"> Client ID: {{ $res['clientID'] }} </h3>
        <h3 class="name"> Name: {{ $res['cname'] }} </h3>
        <h3 class="contact"> Number: {{ $res['pnumber'] }} </h3>
        
            <form class = "form-existing" action="">
                <label class="Ticket-lbl"> Ticket: </label> 
                <input name="ticket" list="tickets">
                <datalist id="tickets" style="display:flex">
                    <option value="PVR">
                    <option value="Carnival">
                </datalist>     

                <label class="PaidTicket-lbl"> Paid Ticket: </label> 
                <input name="PaidTicket" type="text"> <br> <br>

                <label class="PaidFood-lbl"> Paid Food: </label> 
                <input name="PaidFood" type="text"> <br> <br>

                <label class="discount-lbl"> Discount: </label>
                <input name="discount" type ="text">  <br> <br> 

                <label class="payAmount-lbl"> Payable Amount: </label> 
                <input name="payAmount" type="text"> <br> <br>
              
                <label class="paymethod-lbl"> Payment method: </label> 
                <input name="paymethod" type="text"> <br> <br>

                <label class="referrence-lbl"> Referrence ID: </label> 
                <input name="referrence" type="text"> <br> <br>
             </form>  
            <hr>
            <button class="info-save"> SAVE </button>
            <hr>
    </section>