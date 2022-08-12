<?php 

Class Zines extends Controller {

    public function upload() {
        $upload = new \Delight\FileUpload\FileUpload();
        $upload->from('file');
        $upload->withAllowedExtensions(['pdf']);

        if (DEBUG["ADMIN"] == true) {

        $upload->withTargetDirectory(APP_ROOT . '/../public/zines');
        error_log('[DEBUG]  ADMIN flag was set in config, zine stored in public/zines');

        } else {
            $upload->withTargetDirectory(APP_ROOT . '/../writable/zines_rev');
        }

        try {
            $file = $upload->save();
        }
    }


}