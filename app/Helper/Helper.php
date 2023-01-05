<?php


namespace App\Helper;


class Helper
{
    public static function fileUploadSingle($fileObject, $directory,$existFile = null)
    {
        if($fileObject){
            if($existFile){
                if(file_exists($existFile)){
                    unlink($existFile);
                }
            }
            $file = $fileObject;
            $name = rand(10,1000).time().$file->getClientOriginalName();
            $fileDirectory ='admin/assets/img/upload-images/'.$directory.'/';
            $file -> move($fileDirectory,$name);
            $fileUrl = $fileDirectory.$name;

        }else{
            if($existFile){
                $fileUrl = $existFile;
            }else{
                $fileUrl = null;
            }
        }
        return $fileUrl;




    }

    public static function fileUpload($fileObject, $directory,$existFile = [])
    {
        if($fileObject)
        {
            if($existFile)
            {
                if(file_exists($existFile))
                {
                    unlink($existFile);
                }
            }
            $images = array();
            if($files = $fileObject){
                foreach($files as $file){
                    $name = rand(10,1000).time().$file->getClientOriginalName();
                    $fileDirectory ='admin/assets/img/upload-images/'.$directory.'/';
                    $file->move($fileDirectory,$name);
                    $fileUrl = $fileDirectory.$name;
                    $images[] = $fileUrl;
                }
            }
        }else{
            if($existFile)
            {
                $images[] = $existFile;
            }
            else{
                $images = [];
            }
        }

        return implode('|',$images);



    }

}
