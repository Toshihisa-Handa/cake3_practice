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
                <input type="text" name='name'>

            </td>
        </tr>
        <tr>
            <th>email</th>
            <td>
                <input type="text" name='email'>
            </td>
        </tr>
        <tr>
            <th>age</th>
            <td>
                <input type="number" name='age'>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button>click</button>
            </td>
        </tr>

        <?= $this->Form->end(); ?>
    </table>



</body>

</html>