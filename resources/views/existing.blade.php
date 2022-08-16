
@include('partials/header')

<section class = "existing">
        <h3 class="cust_id"> Customer ID: 102 </h3>
        <h3 class="name"> Dilsher Singh </h3>
        <h3 class="contact"> 9876543215 </h3>
        
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
              
                <label class="paymethod-lbl"> Payement method: </label> 
                <input name="paymethod" type="text"> <br> <br>

                <label class="referrence-lbl"> Refference ID: </label> 
                <input name="referrence" type="text"> <br> <br>
             </form>  
            <hr>
            <button class="info-save"> SAVE </button>
            <hr>
    </section>