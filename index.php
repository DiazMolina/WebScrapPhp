<?php
require 'lib/simple_html_dom.php';
$html = new simple_html_dom();
// CODIGO FUNCIONAL DE TERREMOTO------
/*
$html->load_file('http://ultimosismo.igp.gob.pe');
$titulo = $html->find('form');
foreach($titulo as $iframe) {
$product['Fecha'] = $iframe->find('div div div',1)->plaintext;
$product['Hora'] = $iframe->find('div div div',3)->plaintext;
$product['Magnitud'] = $iframe->find('div div div',5)->plaintext;
$product['Referencia'] = $iframe->find('div div div',7)->plaintext;
$product['Latitud'] = $iframe->find('div div div',10)->plaintext;
$product['Longitud'] = $iframe->find('div div div',13)->plaintext;
$product['Profundidad'] = $iframe->find('div div div',16)->plaintext;
//$product['titulo'] = $iframe->find('div div div',1)->plaintext;
$data['products'] = $product;
}
echo json_encode($data);*/
//-------------------------------------------------------
/*
$html->load_file('https://www.ultrapeliculashd.com/movies/mi-nueva-yo');
$titulo = $html->find('iframe',0); */
//ULTRA PELICULAS ------------------------------------------------------------------
/*$html->load_file('https://www.ultrapeliculashd.com/movies/trolls-holiday');
$resumen = $html->find('p',0);
$video = $html->find('iframe',0);*/
//echo $html->find('.playex');
//echo $titulo->tag; // Returns: " div"
//echo $titulo->outertext; // Returns: " <div>foo <b>bar</b></div>"
//echo $titulo->innertext; // Returns: " foo <b>bar</b>"
//echo $titulo->plaintext; // Returns: " foo bar"
//echo $html->outertext = '<div class="playex">' . $html->outertext . '<div>';
//foreach($titulo as $iframe) {
//echo $iframe->outertext;
//echo$iframe->find('iframe',1)->outertext;
//$product['titulo'] = $iframe->find('div div div',1)->plaintext;

//}
//-------------------------------------------------------------------------
//OBTENFION DE POSTER ,RESUMEN,LINK DEL VIDEO  PAGINA PROBADA EN INKAPELIS

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
<input type="text" name="url" placeholder="ingrese url de pagina"><br>
 
<input type="submit" name="submit" value="Obtener Videos"><br>
 
</form>
<?php
if(isset($_POST['submit']))
 
{
$name = $_POST['url'];
$html->load_file($name);
$resumen = $html->find('p',6)->outertext;
$titulo = $html->find('h1',0)->plaintext;
$imagen = $html->find('img',1)->outertext;
$video = $html->find('iframe',0)->outertext;

   echo "<textarea rows='25' cols='80'> ". $titulo.$imagen.$resumen.$video." </textarea>";

}
?>
  					
						