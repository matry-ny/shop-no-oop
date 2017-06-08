<?php

function index()
{
	$data = [];


	$data['subview'] = 'products/index';
	renderAdminPage($data);
}

function edit($id = null)
{
	$id = (int)$id;
	$data['pageTitle'] = $id ? "Редактировать товар (id = {$id})" : 'Добавить товар';


	$data['subview'] = 'products/edit';
	renderAdminPage($data);
}