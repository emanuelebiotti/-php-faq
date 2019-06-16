<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


        $domanda1 = [

          'faq' => '<h1>Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?</h1>',
          'ris' => '<p>La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>'
        ];


      foreach ($domanda1 as $key => $value) {

        if ($key == 'faq') {
          print_r($value);
        } else if ($key == 'ris') {
          print_r($value);
        }
      }

     ?>

  </body>
</html>
