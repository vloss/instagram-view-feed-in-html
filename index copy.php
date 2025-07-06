<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Exibição básica do Instagram</title>
  <meta http-equiv="Content-Language" content="pt-br">
  <meta name="author" content="Vinicius Viana Loss">
  <meta name="description" content="Exibição básica do Instagram.">
  <meta name="keywords" content="">
</head>
<body>


    <?php
      $file_token     = dirname(__FILE__).'/instagram-api-token.txt';
      $ACCESS_TOKEN   = file_get_contents($file_token);

      if ($ACCESS_TOKEN != "") {
        $CONN = curl_init();
        curl_setopt($CONN, CURLOPT_URL, 'https://graph.facebook.com/v23.0/17841474112981305/stories?fields=id%2Cmedia_type%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cusername&access_token='.$ACCESS_TOKEN);
        curl_setopt($CONN, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($CONN);
        curl_close($CONN);
        $JSON_DATA = json_decode($data);
      } else {
        echo "TOKEN não informado, adicione o token no arquivo 'instagram-api-token.txt'";
      }
    ?>

    <?php 
    //  echo "<pre>";
    // print_r($JSON_DATA);
    // echo "</pre>";
    ?>

    
<?php 
if (!empty($JSON_DATA['data'])) {
    foreach ($JSON_DATA['data'] as $story) {
        if ($story['media_type'] == 'IMAGE') {
            echo "<img src='{$story['media_url']}' style='max-width:300px;'><br>";
        } elseif ($story['media_type'] == 'VIDEO') {
            echo "<video src='{$story['media_url']}' controls style='max-width:300px;'></video><br>";
        }
    }
} else {
    echo "Nenhum story encontrado ou token expirado.";
}

?>

    <?php if (count($JSON_DATA->data) > 0){  ?>
      <table style="width: 800px;">
        <?php $quantidade = 0; ?>
        <?php foreach ($JSON_DATA->data as $key => $value) { ?>
          <?php if ($value->media_type == "IMAGE" && $quantidade < 8){  ?>
            <?php if ($quantidade == 0 || $quantidade == 4 ){ ?>
            <tr>
            <?php } ?>
              <?php $quantidade++; ?>
              <td>
                  <a href="<?php echo $value->media_url; ?>" > 
                    <img style="width: 200px;" src="<?php echo $value->media_url; ?>" >
                  </a>
                  <p><?php echo substr($value->caption, 0, 70) . '...'; ?><a target="_blank" href="<?php echo $value->permalink; ?>"> Ver Post</a></p>
              </td>
            <?php if ($quantidade == 4 || $quantidade == 8 ){ ?>
            </tr>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      </table>
    <?php } ?>
</body>
</html>