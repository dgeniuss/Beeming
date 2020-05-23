<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        //$this->prbox->itemsText = $this->file->content; //получение списка программ
    }

    /**
     * @event button6.action 
     */
    function doButton6Action(UXEvent $e = null)
    {    
        
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {    
    
    }

    /**
     * @event prbox.action 
     */
    function doPrboxAction(UXEvent $e = null)
    {    
        $name = $this->prbox->selected;
        $this->edit->text = $name;
        
        $url = $this->edit->text;
        $this->editAlt->text = $this->ini->get($url);
    }


    /**
     * @event checkbox.click-Left 
     */
    function doCheckboxClickLeft(UXMouseEvent $e = null)
    {    
        
        if($this->checkbox->selected == false ) {
            $this->panel3->visible = false;
        } else {
            $this->panel3->visible = true;
        }     
    }

    /**
     * @event panel.click-Left 
     */
    function doPanelClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event editAlt.step 
     */
    function doEditAltStep(UXEvent $e = null)
    {    
        
    }

    /**
     * @event combobox.action 
     */
    function doComboboxAction(UXEvent $e = null)
    {    
        if($this->combobox->selected == "graphics") {
            $this->prbox->itemsText = $this->graphics->content;
        }
        
        if($this->combobox->selected == "montage") {
            $this->prbox->itemsText = $this->montage->content;
        }
        
        if($this->combobox->selected == "streaming") {
            $this->prbox->itemsText = $this->streaming->content;
        }
        
        if($this->combobox->selected == "utilits") {
            $this->prbox->itemsText = $this->utilits->content;
        }
        
        if($this->combobox->selected == "audio") {
            $this->prbox->itemsText = $this->audio->content;
        }                           
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {    
        $this->panel4->visible = true;
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $e = null)
    {    
        
    }

    /**
     * @event button7.action 
     */
    function doButton7Action(UXEvent $e = null)
    {    
        $this->panel4->visible = false;
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $e = null)
    {    
        
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
        
    }

    /**
     * @event label.click-Left 
     */
    function doLabelClickLeft(UXMouseEvent $e = null)
    {    
        
    }
}
