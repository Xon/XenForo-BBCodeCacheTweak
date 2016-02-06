<?php

class SV_BBCodeCache_Listener
{
    public static function init_dependencies(XenForo_Dependencies_Abstract $dependencies, array $data)
    {
        if (!class_exists('XenForo_BbCode_TextWrapper', false))
		{
			include('TextWrapper.php');
		}
    }
}
