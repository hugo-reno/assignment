<html>
<head><title>billing</title></head>

<body>


    <form action="#" method="get" class="creditly-card-form agileinfo_form">
        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
            <div class="credit-card-wrapper">
                <div class="first-row form-group">
                    <div class="controls">
                        <label class="control-label">User ID</label>
                        <input class="billing-address-name form-control" type="text" name="userid" >
                    </div>
                    <div class="controls">
                           <label class="control-label">Unit</label>
                           <input class="billing-address-name form-control" type="text" name="unit" >
                       </div>
                       <div class="controls">
                               <label class="control-label">Last Date</label>
                               <input class="billing-address-name form-control" type="text" name="lastDate" >
                           </div>


                </div>
                <button class="submit" type="submit" name="submit"><span>Update Bill<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
            </div>
        </section>
        @csrf
    </form>

    @foreach ($bill as $bill)
    {{$bill->userID}}
    @endforeach
</body>
</html>
