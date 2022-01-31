# Payment

---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Methods](#section-3)
- [Models](#section-4)
- [Views-Route](#section-5)


<a name="section-1"></a>
## Description

Here we implements the payment feature where teachers can contact with the authority.
Teacher can fill up a form and submit this with there payment details.<br
                                                                          >
<a name="section-2"></a>
## Active Controller
1. PaymentController.php

<a name="section-3></a>
## Method
1. `payData() : Returns view of 'index';`

```php
class PaymentController extends Controller
{
    //function for inserting payment information
    function payData(Request $req)
    {
        //variable for payment table in databse
        $payment= new Payment;
        $payment->name=$req->name;
        $payment->email=$req->email;
        $payment->address=$req->address;
        $payment->teacher_id=$req->teacher_id;
        $payment->gateway=$req->gateway;
        $payment->pay_no=$req->pay_no;
        $payment->trnx=$req->trnx;
        $payment->amount=$req->amount;
        $payment->save();

        
        echo '<script>alert("Payment Succesfull!!!!!!!")</script>'; //inline javascript with php
        
        return view('index');


    }
}

```

<a name="section-4></a>                                                       
## Model
1. Payment.php

```php 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamps=false;
}

```
<a name="section-5></a>
## Views-Route

| __#__       | __Request Type__ | __Paths__  |  __Action__ |__Route Name__ |
|-------------|------------------|----------  |-------------|---------------|
| 1           | GET              | /payment   | Pay Now     |payData        |
| 2           | POST             | /payment   | Payment     |payment        |



