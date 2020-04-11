<?php

namespace Upload\Exception;


use Cake\TestSuite\TestCase;
use Upload\Uploader;

class UploadExceptionTest extends TestCase
{

    /**
     * @return void
     */
    public function testConstruct()
    {
        $ex = new UploadException(-1);
        $this->assertEquals(__d('upload', 'Unknown upload error'), $ex->getMessage());
    }

    /**
     * @return void
     */
    public function testMapErrorMessage()
    {
        $ex = new UploadException(Uploader::UPLOAD_ERR_OK);
        $this->assertEquals(__d('upload', 'Upload successful'), $ex->getMessage());
    }
}
