<?php

namespace App\Controller;
// use App\Controller\AppController

class HelloController extends AppController
{

    // public $autoRender = false;
    private $data = [
        ['name' => 'taro', 'mail' => 'taro@jp', 'tel' => '0123456789'],
        ['name' => 'hanako', 'mail' => 'hanako@jp', 'tel' => '234567890'],
        ['name' => 'ziro', 'mail' => 'ziro@jp', 'tel' => '32456789']
    ];

    public function index()
    {
        // echo "<html><body><h1>helloです</h>";
        // echo "<p>this is sample page</p></body></html>";
        // $id ='no name';
        // if(isset($this->request->query['id'])){
        //     $id = $this->request->query['id'];
        // }
        // $pass ='no pass';
        // if(isset($this->request->query['pass'])){
        //     $pass = $this->request->query['pass'];
        // }
        // echo "<html><body><h1>helloです2かいめ</h>";
        // echo "<p>this is sample page</p>
        //       <ul><li>idは{$id}です</li>
        //           <li>パスワードは{$pass}です。</body></html>";


        //     $id = 0;
        //     if (isset($this->request->query['id'])) {
        //         $id = $this->request->query['id'];
        //     }
        //     var_dump($this->data);
        //     echo json_encode($this->data[$id]);



        $this->viewBuilder()->enableAutoLayout(false); //自動レイアウト機能を使わないの意味
        $this->set('title', 'hello');
        $this->set('message', 'this is message');


        $values = [
            'title' => 'hello',
            'message' => 'this is message',
            'email' => 'hoge@com.jp'
        ];
        $this->set('values', $values);


if($this->request->isPost()){
    $form2_data = [
        "name" => $this->request->data['form2.name'],
        "email" => $this->request->data['form2.email'],
        "age" => $this->request->data['form2.age'],
    ];
    $this->set('form2_data',$form2_data);
}else{
    $this->set('form2_data',[]);
}



    }


    public function confirm()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $form_data = [
            "name" => $this->request->data['name'],
            "email" => $this->request->data['email'],
            "age" => $this->request->data['age'],
        ];

        $this->set('form_data', $form_data);
    }
}
