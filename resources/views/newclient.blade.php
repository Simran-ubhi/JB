
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

                <label for="pnumber" class="Contact-lbl"> Contact: </label> 
                <input name="pnumber" type="text" value="{{old('pnumber')}}"> <br>
                @error('pnumber')**{{$message}}@enderror <br>

                <label for="City" class="Contact-lbl"> City: </label> 
                <input name="City" type="text" value="{{old('City')}}"> <br>
                @error('City')**{{$message}}@enderror <br>

                <label for="Referredby" class="referred_by">Referred by: </label> 
                <input name="Referredby" type="text" value="{{old('empID')}}"> <br> 
                @error('Referredby')**{{$message}}@enderror <br>

                <br>
                  <button class="info-save"> SAVE </button>
                <hr>
    
        </form>
    </section>