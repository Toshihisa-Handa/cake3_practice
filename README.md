フォーム入力スニペット

```
フォームタグ生成
<?= $this->Form->create($contact_form, ['type' => 'post', 'name' => 'form_name','class' => 'contact-form', 'templates' => $form_templates,'url' =>['controller' => 'contact','action' => 'index']]); ?>
formのアクションを下記のインプットタグで実装出来る
 <?= $this->Form->input('action', ['type' => 'hidden', 'value' => 'confirm']); ?>



 インプットタグ生成
 <?= $this->Form->input('company_name',['type' => 'text', 'class' => 'c-input', 'maxlength' => 100, 'error'=>false]); ?>


フォームの閉じタグは</form>で問題ない
```