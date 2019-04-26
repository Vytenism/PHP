<?php

	$mano_atmintis = [
	    'Penktadienis',
	    'Paskaita',
	    'Baras',
	    'Viskis',
	    'Alus',
	    'Degtine',
	    'Alus',
	    'Pirmadienis',
	    'Paskaita'
	];
        $draugo_atmintis = [
            'Penktadienis',
	    'Laisve',
	    'Baras',
	    'Dektine',
	    'Alus',
	    'Sidras',
	    'Vynas',
	    'Sekmadienis',
	    'Paskaita'
        ];
        
$rand_flashback = rand(0, count($mano_atmintis)- 1);   
$flashback_text = '#' . $rand_flashback . ':' . $mano_atmintis[$rand_flashback];   
$rand_flashback2 = rand(0, count($draugo_atmintis)- 1); 
$flashback_text1 = '#' . $rand_flashback2 . ':' . $draugo_atmintis[$rand_flashback2];

$bendri_atsiminimai = [];
foreach($mano_atmintis as $prisiminimas){
    $egzist = in_array($prisiminimas, $draugo_atmintis);
    if($egzist) {
        $bendri_atsiminimai[] = $prisiminimas;
    }
}

?>

<html>
<head>
	<title>Klases daras</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Kas buvo penktadienį ?!</h1>
	<h2>Bendra</h2>
	<p>
		<ul> <!-- foreach -->
			<?php foreach($bendri_atsiminimai as $prisiminimas): ?>
			<li> 
				<?php print $prisiminimas; ?>
			</li>
			<?php endforeach; ?>
		</ul><!-- endforeach -->
	</p>
        
    
</body>
</html>