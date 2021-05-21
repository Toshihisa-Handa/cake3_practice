<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $message; ?></p>

    <h1><?php echo $values['title']; ?></h1>
    <p><?php echo $values['message']; ?></p>
    <p><?php echo $values['email']; ?></p>

<h3>フォーム１</h3>
    <table>
        <?php echo $this->Form->create(null, [
            'type' => 'post',
            'url' => [
                'controller' => 'Hello', //現在のページのコントローラーを使用する際は指定不要
                'action' => 'confirm'
            ],
            "class" => "contact-form",
            'novalidate' => true,
            "name" => 'form_name'
        ]);
        ?>
        <tr>
            <th>name</th>
            <td>
                <!-- <input type="text" name='name'> -->
                <?= $this->Form->input('name', [
                    'type' => 'text', 'placeholder' => '' ,'class' => '', 'maxlength' => '40','label'=>false,
                    ]); ?>
            </td>
        </tr>
        <tr>
            <th>email</th>
            <td>
                <!-- <input type="text" name='email'> -->
                <?= $this->Form->input('email', [
                    'type' => 'text', 'placeholder' => '' ,'class' => '', 'maxlength' => '40','label'=>false,
                    ]); ?>
            </td>
        </tr>
        <tr>
            <th>age</th>
            <td>
                <!-- <input type="number" name='age'> -->
                <?= $this->Form->input('age', [
                    'type' => 'text', 'placeholder' => '' ,'class' => '', 'maxlength' => '40','label'=>false,
                    ]); ?>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <!-- <button>click</button> -->
                <?=$this->Form->submit('送信',[]) ?>
            </td>
        </tr>

        <?= $this->Form->end(); ?>
    </table>



<h3>フォーム２</h3>
<pre><?php print_r($form2_data) ?></pre>
<table>
    <?php echo $this->Form->create(null,
    ['type'=>'post',
     'url' =>['contoroller' => 'Hello', 'action'=>'index'
     ]]); ?>
     name <?php echo $this->Form->input('form2.name',['type'=>'text']); ?>
     email <?php echo $this->Form->input('form2.email',['type'=>'text']); ?>
     age <?php echo $this->Form->input('form2.age',['type'=>'text']); ?>
     <?php echo $this->Form->submit('送信２') ?>
    </form>
</table>








</body>

</html>