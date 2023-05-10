<?php

require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Kennel.php';
require_once __DIR__ . './Models/Litterbox.php';
require_once __DIR__ . './Models/Toy.php';
require_once __DIR__ . './Models/ScratchPost.php';

$gifCard = new Product('Carta regalo', '50', './Views/img/Gift_Card.jpg', new Category('Gift'), 'Acquista le nostre Gift card e fai un regalo a una persona cara e al suo migliore amico a quattro zampe');
$gourmetGoldMousse = new Food('Gourmet Gold Mousse 24 x 85 g Alimento umido per gatti', '13,49', './Views/img/cans_24_1000x1000_4.jpg', new Category('Cat'), 'Alimento umido per gatti Gourmet Gold Mousse, a base di tenerissime mousse di carne o di pesce, con componenti freschi di alta qualità.', 'Food');
$roccoClassic = new Food('Rocco Classic 6 x 400 g Alimento umido per cani', '8,99', './Views/img/rocc_classic_rindpur_400g_hs_01_8.jpg', new Category('Dog'), 'Alimento umido Rocco Classic 6 x 400 g senza cereali per cani adulti, con un\'elevata percentuale di carne e interiora, componenti 100% freschi della migliore qualità.', 'Food');
$divanoOrtopedico = new Kennel('Divano ortopedico per cani', '38,99', './Views/img/divano_icon_topseller_1_55__7.jpg', new Category('Dog'), 'Divano ortopedico per cani grigio, con materasso in Memory Foam che dà sollievo, rivestimento ben aderente e morbido con effetto "pelle di pesca", bordo alto, telo in peluche incluso, lavabile a 30°C', 'Kennel');
$toiletteSavicNestor = new Litterbox('Toilette per gatti Savic Nestor', '21,99', './Views/img/lettiera_50931_savic_katzentoilette_nestor_farbkacheln_hs_01_1_5.jpg', new Category('Cat'), 'Toilette per gatti Savic Nestor dai colori moderni e freschi, con coperchio ribaltabile, per una rapida e pratica pulizia e filtro al carbone attivo.', 'Litterbox', array('L 56', 'P 39', 'H 38,5'), 'false');
$tiakiPalla = new Toy('Gioco per cani TIAKI palla meteorite', '7,99', 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/palla/meteorite/5/800/307696_pla_leckerli_ball_meteorit_fg_4797_5.jpg', new Category('Dog'), "Gioco per cani che promuove l'intelligenza del tuo pet, può essere riempito con crocchette o snack, divertente forma di meteorite, un'unica apertura per gli snack, in robusto TPR", 'Toy');
$tiragraffiPrimrose = new ScratchPost('Tiragraffi a torre Natural Paradise Primrose', '92,99', 'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/a/torre/natural/paradise/primrose/8/800/69109_np_kt_standard_logo_katze__fg_4504_8.jpg', new Category('Cat'), 'Stabile tiragraffi a torre con robusto rivestimento in sisal, grandi piattaforme in legno ecosostenibile, 3 nicchie con cuscino e lettino in tessuto certificato Oeko-Tex®. Colore: crema.', 'Scratch post');
$omegaToilette = new Litterbox('Toilette autopulente Omega Paw Roll\'n Clean', '71,49', './Views/img/autopulente.jpg', new Category('Cat'), 'Toilette autopulente Omega Paw Roll\'n Clean per gatti: la lettiera pulita si separa dai grumi con una rotazione, cassetto estraibile per smaltirla.', 'Litterbox', array('L 56', 'P 51,5', 'H 49'), 'true');


try {
    $omegaToilette->getClean('bla');
} catch (Exception $e) {
    echo $e->getMessage();
}


$products = [
    $gifCard,
    $gourmetGoldMousse,
    $roccoClassic,
    $divanoOrtopedico,
    $toiletteSavicNestor,
    $omegaToilette,
    $tiakiPalla,
    $tiragraffiPrimrose
];
