<?php

function index()
{
	$data = [];


	$data['subview'] = 'dashboard/index';
	renderAdminPage($data);
}