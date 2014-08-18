<?php
	echo $this->Menu->render($menu->links, [
		'templates' => [
			'root' => '{{content}}',
			'parent' => '{{content}}',
			'child' => '{{content}}',
		],
		'formatter' => function ($link, $info) {
			$link->set('expanded', false);
			return $this->Menu->formatter($link, $info);
		}
	]);
