<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    private $product;
    private $data;
    private $register;
    private $fullName;
    private $i;
    private $j;
    private $result;
    private $totalWord;
    private $totalCharacter;




    public function index()
    {
        $this->product = new Product();
        $this->data  = $this->product->products();
//        echo '<pre>';
//        print_r($this->data);
//        echo '</pre>';
//        exit();
        return view('home',['products' => $this->data]);
    }


    public function  about()
    {
        return view('about');
    }

    public function oddEven(){
        return view('oddEven');
    }

    public function oddEvenResult(Request $request){

        for ($this->i = $request->starting_number; $this->i <= $request->ending_number; $this->i++){

            if($request->choice == 'odd'){

                if ($this->i % 2 != 0)
                {
                    $this->result .=$this->i.' ';
                }

            }else if ($request->choice == 'even'){
                    if($this->i %2 == 0){

                        $this->result .=$this->i.' ';
                    }
            }

        }
        return view('oddEven',['result' => $this->result]);
    }

    public  function registration()
    {

        return view('registration');
    }



    public function count(){
       return view('count');
    }


    public function countResult(Request $request)
    {
       $this->totalWord  = str_word_count($request->given_string);
       $this->totalCharacter  = strlen(str_replace(" ","", $request->given_string));


       return view('count', [
           'word' => "Total Word - " .$this->totalWord,

           'character' => "Total Character - " .$this->totalCharacter


       ]);
    }



    public function newRegister(Request $request)
    {

      $this->fullName = $request->first_name.' '.$request->last_name;
      return view('registration',['full_name' => $this->fullName]);


    }

    public function prime(){
      return  view('prime');
    }


}
