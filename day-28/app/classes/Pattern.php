<?php

namespace App\classes;


class Pattern
{

  


   public $i;
   public $j;
   public $n=5;

   public function patternOne()
   {

  

    for($this->i = 1; $this->i <= $this->n; $this->i++)
    {
        for($this->j = 1; $this->j <= ($this->n*2) -1; $this->j++)
        {
           if( ($this->j >= $this->n - ($this->i - 1)) && ($this->j <= $this->n + ($this->i - 1)) )
            {   
                echo '&#9734;';
            } 
            else{
                echo ' &nbsp;&nbsp;';
            }
        }
        echo '</br>';
    }
    

  
    

    //    for($this->i =0; $this->i <= 4; $this->i++)
    //    {
    //        for($this->j=1; $this->j <= $this->i; $this->j++)
    //        {
    //            echo '*';
    //        }echo '</br>';
    //    }

    //    echo '<hr/>';

    //    echo '<pre>';
    //   echo'
    //           *
    //          ***
    //         *****
    //        *******';
    //     echo '</pre>';



   }



   public function patternTwo()
   {
    

    for($this->i = 1; $this->i <= $this->n; $this->i++)
    {
        for($this->j = 1; $this->j <= ($this->n*2) -1; $this->j++)
        {
           if( ($this->j >= $this->n - ($this->i - 1)) && ($this->j <= $this->n + ($this->i - 1)) )
            {   
                echo '&#9733;';
            } 
            else{
                echo ' &nbsp;&nbsp;';
            }
        }
        echo '</br>';
    }
    for($this->i = $this->n-1; $this->i >= 0; $this->i--)
    {
        for($this->j = 1; $this->j <= ($this->n*2) -1; $this->j++)
        {
           if( ($this->j >= $this->n - ($this->i - 1)) && ($this->j <= $this->n + ($this->i - 1)) )
            {   
                echo '&#9733;';
            } 
            else{
                echo ' &nbsp;&nbsp;';
            }
        }
        echo '</br>';
    }
   }




   public function patternThree()
   {
    for($this->i=1; $this->i <= $this->n; $this->i++){
        for($this->j = 1; $this->j <= $this->n; $this->j++){
            if($this->i == 1 || $this->i == $this->n){
                echo '&#9733;';
            }else{
               if($this->j == 1 || $this->j == $this->n){
                echo '&#9733;';
               }else{
                   echo ' &nbsp;&nbsp;';
               }
            }
            
        }
        
        echo '<br/>';
    }
   }
   public function patternFour()
   {
       for($this->i = 1; $this->i <= $this->n; $this->i++){
           for($this->j=1; $this->j <= $this->n; $this->j++){
             if($this->j == $this->i){
                echo '&#9733;';
             }else{
                 echo '&nbsp;&nbsp;';
             }
           }
           echo '<br/>';
       }
   }
}