<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    //for register
    public function test_register()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    //for payment
    public function test_payment()
    {
        $response = $this->get('/payment');
        $response->assertStatus(200);
    }

    //for request
    public function test_request()
    {
        $response = $this->get('/request');
        $response->assertStatus(200);
    }

    //database testing1
    public function test_db()
    {
       $this->assertDatabaseHas('users',[
           'email'=>'emonju330@gmail.com'

       ]);
    }

    //database testing2
    public function test_db2()
    {
       $this->assertDatabaseHas('payments',[
           'name'=>'Robin'

       ]);
    }

//for payment
    public function test_payData()
    {
        $response = $this->post('/payment', [

            'name' => 'Al Imran',
            'email' => 'imran@gmail.com',
            'address' => 'savar,dhaka',
            'teacher_id' => 'imrann3',
            'gateway' => 'nagad',
            'pay_no' => '01887656432',
            'trnx' => 'xhjfyw2',
            'amount' => '1500'



        ]);
        $response->assertRedirect('index');
    }


    

    


    
}
