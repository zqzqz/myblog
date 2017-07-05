<?php

$config = array(
	'news'	=>	array(
			array(
				'field'	=>	'title',
				'label'	=> 'Title',
				'rules'	=> 'required|min_length[5]'
				),
			array(
				'field'	=>	'summary',
				'label'	=> 'Sammary',
				'rules'	=> 'required|max_length[155]'
				),
			array(
				'field'	=>	'text',
				'label'	=> 'Text',
				'rules'	=> 'required|max_length[5000]'
				)

		),
	'tags' =>	array(
			array(
				'field' =>	'tag',
				'label' => 'Tag',
				'rules' => 'required'
				),
			array(
				'field' =>	'slug',
				'label' => 'Slug',
				'rules' => 'required'
				)
		),
);


