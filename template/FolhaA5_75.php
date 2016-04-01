<?php
# em milimetros
return array(
	'raioTriangulo' => (4.5 * sqrt(2)) / 2, # diagonal / 2
	'ancora1' => array(10, 17.5),
	'distAncHor' => 127.5,
	'distAncVer' => 182.5,
	'disElipHor' => 1,
	'disElipVer' => 37,
	'elpAltura' => 2.45,
  'elpLargura' => 4.55,
	'diagonal' => 222,
	'code_template' => array(103.5,0,126,3.5),
	'formatoRegioes' => 'grid', # grid

	'regioes' => array( # distancias relativas a ancora 1
	  # FORMATO: [distancia horizontal, distancia vertical, saida caso marcado, saida caso não marcado]
	  # linha 0
		array(0,1,37,'A','W'),
		array(0,1+8.85,37,'B','W'),
		array(0,1+(2*8.85),37,'C','W'),
		array(0,1+(3*8.85),37,'D','W'),
		array(0,1+(4*8.85),37,'E','W'),
		# linha 1
		array(0,1					,37 + 4.58,'A','W'),
		array(0,1+8.85		,37 + 4.58,'B','W'),
		array(0,1+(2*8.85),37 + 4.58,'C','W'),
		array(0,1+(3*8.85),37 + 4.58,'D','W'),
		array(0,1+(4*8.85),37 + 4.58,'E','W'),
		# linha 23
		array(0,1					,37 + (4.58 * 23),'A','W'),
		array(0,1+8.85		,37 + (4.58 * 23),'B','W'),
		array(0,1+(2*8.85),37 + (4.58 * 23),'C','W'),
		array(0,1+(3*8.85),37 + (4.58 * 23),'D','W'),
		array(0,1+(4*8.85),37 + (4.58 * 23),'E','W'),
		# linha 24
		array(0,1					,37 + (4.58 * 24),'A','W'),
		array(0,1+8.85		,37 + (4.58 * 24),'B','W'),
		array(0,1+(2*8.85),37 + (4.58 * 24),'C','W'),
		array(0,1+(3*8.85),37 + (4.58 * 24),'D','W'),
		array(0,1+(4*8.85),37 + (4.58 * 24),'E','W'),

	  # coluna 2
		# linha 0
		array(0,47+1,37,'A','W'),
		array(0,47+1+8.85,37,'B','W'),
		array(0,47+1+(2*8.85),37,'C','W'),
		array(0,47+1+(3*8.85),37,'D','W'),
		array(0,47+1+(4*8.85),37,'E','W'),
		# linha 24
		array(0,47+1				,37 + (4.58 * 24),'A','W'),
		array(0,47+1+8.85		 ,37 + (4.58 * 24),'B','W'),
		array(0,47+1+(2*8.85),37 + (4.58 * 24),'C','W'),
		array(0,47+1+(3*8.85),37 + (4.58 * 24),'D','W'),
		array(0,47+1+(4*8.85),37 + (4.58 * 24),'E','W'),

	  # coluna 3
		# linha 0
		array(0,47+47+1,37,'A','W'),
		array(0,47+47+1+8.85,37,'B','W'),
		array(0,47+47+1+(2*8.85),37,'C','W'),
		array(0,47+47+1+(3*8.85),37,'D','W'),
		array(0,47+47+1+(4*8.85),37,'E','W'),
		# linha 1
		array(0,47+47+1				 ,37 + 4.58,'A','W'),
		array(0,47+47+1+8.85		 ,37 + 4.58,'B','W'),
		array(0,47+47+1+(2*8.85),37 + 4.58,'C','W'),
		array(0,47+47+1+(3*8.85),37 + 4.58,'D','W'),
		array(0,47+47+1+(4*8.85),37 + 4.58,'E','W'),
		# linha 21
		array(0,47+47+1				 ,37 + (4.58 * 21),'A','W'),
		array(0,47+47+1+8.85		 ,37 + (4.58 * 21),'B','W'),
		array(0,47+47+1+(2*8.85),37 + (4.58 * 21),'C','W'),
		array(0,47+47+1+(3*8.85),37 + (4.58 * 21),'D','W'),
		array(0,47+47+1+(4*8.85),37 + (4.58 * 21),'E','W'),
		# linha 22
		array(0,47+47+1				 ,37 + (4.58 * 22),'A','W'),
		array(0,47+47+1+8.85		 ,37 + (4.58 * 22),'B','W'),
		array(0,47+47+1+(2*8.85),37 + (4.58 * 22),'C','W'),
		array(0,47+47+1+(3*8.85),37 + (4.58 * 22),'D','W'),
		array(0,47+47+1+(4*8.85),37 + (4.58 * 22),'E','W'),
		# linha 23
		array(0,47+47+1				 ,37 + (4.58 * 23),'A','W'),
		array(0,47+47+1+8.85		 ,37 + (4.58 * 23),'B','W'),
		array(0,47+47+1+(2*8.85),37 + (4.58 * 23),'C','W'),
		array(0,47+47+1+(3*8.85),37 + (4.58 * 23),'D','W'),
		array(0,47+47+1+(4*8.85),37 + (4.58 * 23),'E','W'),
		# linha 24
		array(0,47+47+1				,37 + (4.58 * 24),'A','W'),
		array(0,47+47+1+8.85		 ,37 + (4.58 * 24),'B','W'),
		array(0,47+47+1+(2*8.85),37 + (4.58 * 24),'C','W'),
		array(0,47+47+1+(3*8.85),37 + (4.58 * 24),'D','W'),
		array(0,47+47+1+(4*8.85),37 + (4.58 * 24),'E','W'),



	),
);
