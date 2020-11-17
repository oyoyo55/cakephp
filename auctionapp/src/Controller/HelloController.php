<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController
{
    public function index()
    {
    }

    public function form()
    {
        $this->viewBuilder()->autoLayout(false);
        $name = $this->request->data['name'];
        $mail = $this->request->data['mail'];
        $age = $this->request->data['age'];
        $res = 'こんにちわ、' . $name . '(' . $age . ')さん。
        メールアドレスは、' . $mail . 'ですね？';
        $values = [
            'title'=>'Result',
            'message'=> $res
        ];
        $this->set($values);
    }
}
