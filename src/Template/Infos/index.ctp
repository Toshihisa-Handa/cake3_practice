<!-- File: src/Template/infos/index.ctp -->

<h1>記事一覧</h1>
<table>
    <tr>
        <th>タイトル</th>
        <th>内容</th>
        <th>作成日時</th>
    </tr>

    <!-- ここで、$infos クエリーオブジェクトを繰り返して、記事の情報を出力します -->

    <?php foreach ($infos as $info): ?>
    <tr>
        <td>
            <?= $this->Html->link($info->title, ['action' => 'view', $info->slug]) ?>
        </td>
        <td>
           <p><?=$info['content'] ?></p>
        </td>
        <td>
            <?= $info->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>