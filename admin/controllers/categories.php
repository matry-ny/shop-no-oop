<?php

function index()
{
	$data = [];


	$data['subview'] = 'categories/index';
	renderAdminPage($data);
}