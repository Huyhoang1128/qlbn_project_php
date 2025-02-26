<?php

class BaseController
{
    protected $folder;

    public function view($file, $date = [])
    {
        $f_view = 'views/'. $this->folder .'/'. $file .'.php';
        if (is_file($f_view)){
            extract($data);
            ob_start();
            require $f_view;
            $content = ob_get_clean();
            require 'views/layout/app.php';
        } else{
            header("location: index.php?action=error");
        }
    }
    public function error()
        {
            return $this->view('error');
        }
}
