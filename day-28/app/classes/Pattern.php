<?php

namespace App\classes;


class Pattern
{

  


   public $i;
   public $j;
   public $n;

   public function patternOne()
   {

    $this->n = 4;

    for($this->i = 1; $this->i <= $this->n; $this->i++)
    {
        for($this->j = 1; $this->j <= ($this->n*2) -1; $this->j++)
        {
           if( ($this->j >= $this->n - ($this->i - 1)) && ($this->j <= $this->n + ($this->i - 1)) )
            {   
                echo '+';
            } 
            else{
                echo '&nbsp;&nbsp;';
            }
        }
        echo '</br>';
    }

    echo '<br/>';

    echo '<hr/>';


    for($this->i = $this->n; $this->i >= 0; $this->i--)
    {
        for($this->j = 1; $this->j <= ($this->n*2) -1; $this->j++)
        {
           if( ($this->j >= $this->n - ($this->i - 1)) && ($this->j <= $this->n + ($this->i - 1)) )
            {   
                echo '+';
            } 
            else{
                echo '&nbsp;&nbsp;';
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

       echo '<hr/>';

       echo '<pre>';
      echo'
              *
             ***
            *****
           *******';
        echo '</pre>';



   }
}