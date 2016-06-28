<?php
include_once __DIR__ . '/../src/Image.php';
// Busca imagens do diret�rio origem e move para exec cria um diretorio temporario
set_time_limit(0);
ini_set('memory_limit', '2048M');

if(!isset($argv[1]))
  die("Informe um diretorio de trabalho.\n");

if(!isset($argv[2]))
    die("Informe um diretorio de origem.\n");

$dirIn = $argv[1];
$dirOut = $argv[2];
$dirBase = __DIR__. '/exec/ready/'.$dirIn;

if(!is_dir($dirBase))
  die("Diretorio de trabalho nao encontrado.\n");

$dirDone = __DIR__.'/done';
if(!is_dir($dirDone))
  mkdir($dirDone);

$dirDoneFile = __DIR__.'/done/file';
if(!is_dir($dirDoneFile))
  mkdir($dirDoneFile);

$files = array_filter(scandir($dirBase),function($i) { return pathinfo($i, PATHINFO_EXTENSION) == 'jpg'; });

foreach ($files as $i => $f) {
  $start = time();

  $arquivo = $dirBase.'/'.$f;
  // $arquivoDest = str_replace('exec/ready/'.$dirIn,'done/img',$arquivo);
  $arquivoDest = $dirOut.'/'.$f;

  $template = 'LINHA_BASE';
  // $template = 'HCPA_2015_345';
  // $template = 'FAURGS_100';

  try {
    // $image = new Image('1602_50');
    $image = new Image($template);
    $image->exec($arquivo);

    // altera referencia para o arquivo
    $image->output['arquivo'] = $arquivoDest;
    $imageOutPut = $image->output;

    $presenca = '1'; # TODO: 1 presente - 2 ausente  (ausente = marcada)
    $str = '';
    foreach ($image->output['regioes'] as $r) { $str .= $r[0]; }
    $str = $str;
    $tempos = $image->getTimes();
    $tempoExec = $tempos['timeAll'];

  } catch(Exception $e){

    $presenca = '?';
    $str = $e->getMessage();
    $tempoExec = '??';
    $imageOutPut = ['erro'=>$e->getMessage()];

  }

  // salva debug do arquivo
  $export = fopen($dirDoneFile.'/'.$f.'.json','w');
  fwrite($export,json_encode($imageOutPut));
  fclose($export);

  // move imagem para pasta de finalizadas
  rename($arquivo,$arquivoDest);
  echo 'Movendo de ' . $arquivo . ' - ' . $arquivoDest . "\n";
  // Atualiza arquivo compartilhado de resolu��es
  $outData = ["'".pathinfo($f,PATHINFO_FILENAME)."'",$presenca,$str,$start,time(),number_format((float)$tempoExec,6) * 1000000];
  $strOut = implode(';',$outData)."\n";

  $export = fopen(__DIR__.'/out.csv','a');
  fwrite($export,$strOut);
  fclose($export);

}

rmdir ($dirBase);
