<?php


namespace App\classes;


class ImageUpload
{
    protected $post;
    protected $imageName;
    protected $file;
    protected $directory;
    protected  $fileType;
    protected  $check;
    protected $name;
    protected $tmpName;



    public function __construct($data, $file)
    {
        $this->post = $data;
        $this->file = $file;
    }

    public function index(){
//        echo '<pre>';
//        print_r($this->file);
//        print_r($_FILES);
//        echo '</pre>';




        $this->imageName = $this->file['image']['name'];
        $this->fileType = pathinfo($this->imageName, PATHINFO_EXTENSION);
        $this->tmpName = str_replace(' ','_',$this->post['name']);
        $this->name = $this->tmpName.'_'.time().'.'.$this->fileType;
        $this->directory = '../assets/img/upload/'.$this->name;

        $this->check = getimagesize($this->file['image']['tmp_name']);

        if($this->check)
        {
            if(!file_exists($this->directory))
            {
                if($this->fileType == 'jpg' || $this->fileType == 'png')
                {
                    move_uploaded_file($this->file['image']['tmp_name'],$this->directory);
                    return[
                        'name' => $this->post['name'],
                        'image' =>$this->directory,
                    ];
                }else{
                    echo 'Faizlami Paisen JPG $ PNG File Den MIA....';
                }
            }else{
                echo('MOZa lon Mia aki jinis amre duibar den ken....valo hoa jan');
//         die('MOZa lon Mia aki jinis amre duibar den ken....valo hoa jan');
//         exit('MOZa lon Mia aki jinis amre duibar den ken....valo hoa jan');
            }
        }else{
            echo 'vai chobi den.... onno kisu diyen na';
        }



    }
}