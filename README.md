# Payment
## Description

Here we implements the payment feature where teachers can contact with the authority.
Teacher can fill up a form and submit this with there payment details.<br>

## Active Controller
1. PaymentController.php

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

## Views-Route

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET  | /payment  | Pay Now | payData |
| 2 | POST  | /payment | Payment | payment |


