<?php

namespace App\Http\Controllers;

use App\bank;
use App\bill;
use App\eAdmin;
use App\information;
use Illuminate\Http\Request;
use  Mapper;

class informationController extends Controller
{
    public function index(Request $request) {

        $in = information::all();
       $mapper= Mapper::map(16.822113, 96.203480);
        $n= information::where('name','=','mgmg')->first();
        $input = $request->all();
        $id = $request->input('id');

        //dd($id);

        $bill= bill::where([['userID','=',$id]])->first();
        $amount= bill::where('userID', $id)->get(['billAmount']);

        $billforPay=($bill['billAmount']);

        $bill = bill::all();

        $bank=bank::all();


       // $id = information::where('name','=','mgmg','AND','email','=','mgmg@gmail.com')->first();
       $id = information::where('name','=','mgmg','AND','password','=','csm85494')->first();

        return view('index',[

            'informations'=>$in,
            'bill'=>$bill,
            'bank'=>$bank,

        ]);

    }

    public function eAdmin() {

        $in = information::all();
       $mapper= Mapper::map(16.822113, 96.203480);
        $n= information::where('name','=','mgmg')->first();

        $bill = bill::all();
        $bank=bank::all();

       // $id = information::where('name','=','mgmg','AND','email','=','mgmg@gmail.com')->first();
       $id = information::where('name','=','mgmg','AND','password','=','csm85494')->first();

        return view('eAdmin',[

            'informations'=>$in,
            'bill'=>$bill,
            'bank'=>$bank,

        ]);

    }



    public function store() {

        $information = new information();


        $information->name=request('name');
        $information->email=request('email');
        $information->phone=request('phone');
        $information->address=request('address');
        $information->nrc=request('nrc');
        $information->password=request('password');

        $information->save();



        return redirect('loginSignup');
    }

    public function login() {

        $information = new information();
        $user= false;
        $email =request('email');
        $password=request('password');
        $id = null;



     // $auth1= information::where('email','=',$email)->first();

    //$auth2=information::where('password','=',$password)->first();

        $result= information::where([['email','=',$email],['password','=', $password]])->first();


   //$id=information::where('email', 'aungaung@gmail.com')->first('userID');



        $id=($result['userID']);
         //dd($result);

        if($result==null){

            return back();

        }
        else if($result!=null) {
            return redirect()->action(
                'informationController@index', ['id'=> $id],
            );

        }
        else {
            return back();
        }
    }



    public function billCalculation(){

        $in = information::all();
        $bill = new bill();
        $amount=request('unit')*35;

        $bill->userID=request('userid');
         $bill->unit=request('unit');
          $bill->lastDate=request('lastDate');
           $bill->billAmount=$amount;
            $bill->save();
            $bill = bill::all();

            return view('eAdmin',[


                'bill'=>$bill,
                'informations'=>$in,

            ]);


    }

    public function map() {
        Mapper::map(16.822113, 96.203480);

        return view('map');
    }



    public function bankAmount(){


        $bank = new bank();

        $bank->Name=request('name');
         $bank->cardNumber=request('cardNumber');
          $bank->password=request('password');
           $bank->amount=request('amount');
            $bank->save();


    }

    public function bankData() {

        $bank=bill::all();

        return view ('bank',['bank'=>$bank]);

    }


}
