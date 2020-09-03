<?php 

trait UploadTrait
{
    public function doUpload()
    {
        print "a";
    }
}

class Mp3
{
    use UploadTrait;
}
class Mp4
{
    use UploadTrait;
}

$file=new Mp3; 
$file->doUpload();
