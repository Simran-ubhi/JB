@include('partials/header')

 <div class="sale-form">
    
    <form method = "" action="">
    <h1>New Sale Form</h1>
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="number">Number: </label>
        <input type="text" name="number">
        <br>
        <label for="vouchers">No. of Vouchers: </label>
        <input type="text" name="vouchers">
        <br>
        <label for="amount">Cost: </label>
        <input type="text" name="amount">
        <br>
        <label for="discount">Discount: </label>
        <input type="text" name="discount" id="">
        <br>
        <label for="total">Total Amount: </label>
        <input type="text" name="total">
        <br>
        <button>Save</button>
    </form>
</div>