<? if (isset($error)) : ?>
    <div class="error">
        <?=$error?>
    </div>
<? endif; ?>

<form action="" method="post">

    <label for="salutation">Anrede</label>        
    <select name="salutation" id="salutation">
        <? foreach(['none'=>'-','female'=>'Frau','male'=>'Herr'] as $gender => $salutation) : ?>
            <option value="<?=$gender?>" <?=isset($error)&&$_POST['salutation']===$gender?'selected':''?> >
                <?=$salutation?>
            </option>
        <? endforeach; ?>
    </select>

    <div>
        <label for="first-name">Vorname</label>
        <input type="text" name="fname" id="first-name"
        value="<?=isset($error) && isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : ''?>">
    </div>

    <div>
        <label for="last-name">Nachname</label>
        <input type="text" name="lname" id="last-name"
        value="<?=isset($error) && isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''?>">
    </div>

    <div>
        <label for="url">Website</label>
        <input type="text" name="url" id="url"
        value="<?=isset($error) && isset($_POST['url']) ? htmlspecialchars($_POST['url']) : ''?>">
    </div>

    <div>
        <label for="e-mail">E-Mail</label>
        <input type="email" name="email" id="e-mail"
        value="<?=isset($error) && isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''?>">
    </div>

    <input type="submit" name="sendForm" value="Neue Person anlegen">

</form>