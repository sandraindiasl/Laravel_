<?php
function setActive()
{
	return request()->routeIs('home') ? 'active' : '';
}