<?php

function index()
{
	echo 'Запрашиваемая страница не найдена: ' . $_SERVER['HTTP_REFERER'];
}