<?php
//Color Palette ------------------------------>
$colors= array
		(
			'default'=>(object)array
			(
				'name'=>'Default',
				'author'=>'Linesh Jose',
				'author_url'=>'https://linesh.com',
				'palettes'=>(object)array(
						'rgb'=>(object)array('name'=>'RGB','palette'=>array('#dc3912','#109618','#36c')),
						'blue'=>(object)array('name'=>'Blue','palette'=>array('#0D47A1','#1565C0','#1E88E5')),
						'brown'=>(object)array('name'=>'Brown','palette'=>array('#3E2723','#5D4037','#795548')),
						'cyan'=>(object)array('name'=>'Cyan','palette'=>array('#006064','#0097A7','#26C6DA')),
						'grey'=>(object)array('name'=>'Grey','palette'=>array('#212121','#424242','#616161')),
						'green'=>(object)array('name'=>'Green','palette'=>array('#1B5E20','#388E3C','#4CAF50')),
						'indigo'=>(object)array('name'=>'Indigo','palette'=>array('#1A237E','#303F9F','#5C6BC0')),
						'lime'=>(object)array('name'=>'Lime','palette'=>array('#827717','#AFB42B','#C0CA33')),
						'orange'=>(object)array('name'=>'Orange','palette'=>array('#E65100','#F57C00','#FF9800')),
						'pink'=>(object)array('name'=>'Pink','palette'=>array('#880E4F','#C2185B','#E91E63')),
						'red'=>(object)array('name'=>'Red','palette'=>array('#B71C1C','#D32F2F','#EF5350')),
						'purple'=>(object)array('name'=>'Purple','palette'=>array('#4A148C','#7B1FA2','#9C27B0')),
						'teal'=>(object)array('name'=>'Teal','palette'=>array('#004D40','#00796B','#009688')),
						'yellow'=>(object)array('name'=>'Yellow','palette'=>array('#F9A825','#FBC02D','#FDD835')),
						'campfire'=>(object)array('name'=>'Campfire','palette'=>array('#8C4646','#D6A58A','#D96459')),
						'rustic_table'=>(object)array('name'=>'Rustic Table','palette'=>array('#0D0000','#400101','#592B02')),
						'rustic_chili'=>(object)array('name'=>'Rustic Chili','palette'=>array('#403434','#8C031C','#590219')),
						'rustic_blue'=>(object)	array('name'=>'Rustic Blue','palette'=>array('#20258A','#0C122B','#1A2F57')),
						'sunrise'=>(object)array('name'=>'Sunrise','palette'=>array('#b43c38','#cf4944','#dd823b')),
						'coffee'=>(object)array('name'=>'Coffee','palette'=>array('#46403c','#59524c','#9ea476')),
						'drive'=>(object)array('name'=>'Drive','palette'=>array('#14a664','#f3bf2e','#4789fa'))
					)
			),
			'div'=>(object)array(),
			'canva'=>(object)array
			(
				'name'=>'Canva.com',
				'author'=>'Canva.com',
				'author_url'=>'https://www.canva.com/colors/color-palettes/',
				'desc'=>'&copy;2001-'.date('Y').' All Rights Reserved. Canva<sup>&reg;</sup>',
				'palettes'=>(object)array(
						'up_shore'=>(object)array('name'=>'Up Shore','palette'=>array('#0292B7','#1AC8DB', '#8C756A')),
						'berry_blues'=>(object)array('name'=>'Berry Blues','palette'=>array('#904b79', '#4E1A3D', '#FF2768')),
						'wild_orchid'=>(object)array('name'=>'Wild Orchid','palette'=>array('#741AAC', '#340744', '#bb74ab')),
						'soft_focus_forest'=>(object)array('name'=>'Soft Focus Forest','palette'=>array('#67968b', '#2B7C85', '#175873')),
						'pasture_of_dreams'=>(object)array('name'=>'Pasture of Dreams','palette'=>array('#613659', '#211522', '#C197D2')),
						'antique_rose'=>(object)array('name'=>'Antique Rose','palette'=>array('#9F90CF', '#0461B1', '#B1365B')),
						'green_tracks'=>(object)array('name'=>'Green Tracks','palette'=>array('#43B14B', '#9E6F6D', '#1E3148')),
						'chocolate_chip_delight'=>(object)array('name'=>'Chocolate Chip Delight','palette'=>array('#AE8B70', '#303437', '#4F0000')),
						'dark_road_curve'=>(object)array('name'=>'Dark Road Curve','palette'=>array('#747474', '#444444', '#0A0708')),
						'purple_fabric'=>(object)array('name'=>'Purple Fabric','palette'=>array('#281C2D', '#8155BA', '#695E93')),
						'center_of_life'=>(object)array('name'=>'Center of Life','palette'=>array('#E44650', '#EB63A0', '#e6ad13')),
						'cotton_dandelions'=>(object)array('name'=>'Cotton Dandelions','palette'=>array('#3F4122', '#536F16', '#013A20')),
						'secret_romance'=>(object)array('name'=>'Secret Romance','palette'=>array('#D01110', '#121110', '#D3A550')),
					)
			),
		);
return json_encode($colors);
?>