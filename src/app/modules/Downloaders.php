<?php
namespace app\modules;

use std, gui, framework, app;


class Downloaders extends AbstractModule
{

    /**
     * @event jdownloader.complete 
     */
    function doJdownloaderComplete(ScriptEvent $e = null)
    {    
        alert('Загрузка завершена');
    }

    /**
     * @event jdownloader.error 
     */
    function doJdownloaderError(ScriptEvent $e = null)
    {    
        alert('Возникла ошибка, попробуйте снова');
    }

}
